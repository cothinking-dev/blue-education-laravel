# Backend Architecture Review — Blue Education Laravel

**Reviewer:** Senior Laravel Developer (automated)
**Date:** 2026-04-16
**Scope:** Backend code, data architecture, deployment pipeline
**Project type:** Marketing site for an international education consultancy

---

## Rubric Scores

| # | Metric | Score | Grade |
|---|---|:---:|---|
| 1 | YAGNI (You Aren't Gonna Need It) | 4.5 / 5 | Excellent |
| 2 | KISS (Keep It Simple, Stupid) | 4.5 / 5 | Excellent |
| 3 | Laravel Best Practices | 4 / 5 | Very Good |
| 4 | Data Architecture | 4 / 5 | Very Good |
| 5 | Security | 4.5 / 5 | Excellent |
| 6 | Testing | 4.5 / 5 | Excellent |
| 7 | Caching Strategy | 4 / 5 | Very Good |
| 8 | Deployment Readiness | 3.5 / 5 | Good |
| 9 | Code Organisation | 4.5 / 5 | Excellent |
| 10 | Maintainability | 4.5 / 5 | Excellent |
| | **Overall** | **4.2 / 5** | **Very Good** |

---

## 1. YAGNI — 4.5 / 5

**What's done well:**
- No service classes, jobs, events, listeners, notifications, observers, or actions directories exist. For a content-driven marketing site, this is correct — the complexity simply isn't warranted.
- No API layer (no `routes/api.php`). The single JSON endpoint (contact form) lives inline in web routes. Appropriate for a site with zero API consumers.
- No custom middleware. The throttle on the contact route uses built-in Laravel middleware.
- No Redis, no external cache driver — SQLite + database cache/queue/session is the right call for this traffic profile.
- Factories have thoughtful states (`published()`, `draft()`, `active()`, `inactive()`) that reflect actual domain states rather than speculative ones.

**Minor deductions:**
- Queue infrastructure tables (`jobs`, `job_batches`, `failed_jobs`) are migrated despite the only queued item being the `EnquiryReceived` mailable. With SQLite and low traffic, `sync` would suffice and save three tables. However, this is defensible as forward-looking infrastructure — the deploy script already restarts queue workers (`bin/deploy.sh:28`).
- `spatie/laravel-sitemap` is pulled as a dependency but the `SitemapController` (`app/Http/Controllers/SitemapController.php`) also has a fallback that calls `GenerateSitemap->handle()` directly if cache is cold. The dual-path (scheduled + on-demand) is slightly over-engineered for a site with <50 URLs.

---

## 2. KISS — 4.5 / 5

**What's done well:**
- `PageController` (`app/Http/Controllers/PageController.php`) is a standout pattern. One `show()` method + a constant map handles 27 static pages. Zero boilerplate, zero per-page controllers.
- `AdminPolicy` (`app/Policies/AdminPolicy.php`) — a single generic policy for all models. All five methods return `$user->is_admin`. No per-model policies when the auth rule is identical across the board.
- Invokable controllers for single-action routes (`HomeController`, `FaqController`, `PartnerController`, `SitemapController`, `RobotsController`). Each is under 25 lines.
- `Faq::CATEGORIES` as a const array rather than a separate DB table. For 5 fixed categories that change rarely, a migration + model + admin CRUD would be pure overhead.

**Minor deductions:**
- `OgImageController` (`app/Http/Controllers/OgImageController.php`) is ~190 lines of procedural image composition (gradient loops, dot grids, font placement). This is the most complex single file in the backend. While it works, it's tightly coupled to visual design choices (hex colours, pixel coordinates) and harder to reason about than a template-based approach. Consider whether a headless browser screenshot of an HTML template would be simpler long-term.
- `Post::sanitizeHtml()` (`app/Models/Post.php:79-123`) rebuilds the `HtmlSanitizerConfig` on every call. The config is static — it could be a class constant or cached property. Not a KISS violation per se, but creates 40+ lines of configuration noise in the model.

---

## 3. Laravel Best Practices — 4 / 5

**What's done well:**
- Casts defined via the `casts()` method (Laravel 12 style) rather than the `$casts` property — `Post.php:50`, `Partner.php:30`.
- Route model binding with scope override — `Post::resolveRouteBinding()` (`Post.php:65-68`) only resolves published posts, preventing draft access via URL manipulation. Clean pattern.
- Form request validation (`StoreEnquiryRequest`) with honeypot field (`website` max:0), custom messages, and proper `in:` rule referencing the model constant.
- Enum cast for `Partner.category` using a proper PHP 8.1 backed enum (`PartnerCategory`) with Filament's `HasLabel` contract.
- Model events via `booted()` for cache invalidation rather than observers. Appropriate for this scale.
- All test env overrides in `phpunit.xml` (array cache, sync queue, memory SQLite). No `.env.testing` file needed.

**Deductions:**
- `ContactController::submit()` (`app/Http/Controllers/ContactController.php:17`) calls `Mail::to(...)->send()` (synchronous) despite `EnquiryReceived` implementing `ShouldQueue`. The `send()` method bypasses the queue — it should be `Mail::to(...)->queue()` or use `Mail::send()` with a non-queued mailable. As-is, the `ShouldQueue` interface is misleading dead code.
- `Partner::scopeActive()` (`app/Models/Partner.php:54`) returns `void` while `Post::scopePublished()` (`Post.php:151`) returns `Builder`. Inconsistent scope return types — both patterns work, but the codebase should pick one.
- `Faq::CATEGORIES` is a model constant, but `Enquiry::ENQUIRY_TYPES` is also a model constant in the same pattern. Neither uses an Enum. For consistency with `PartnerCategory`, these could be enums too, but constants are acceptable for small fixed sets. The inconsistency is the issue, not the choice.
- `Category::badgeClass()` (plain method, not an accessor) computes UI-layer concerns (Tailwind classes) inside a model. This leaks presentation into the domain layer. Should be a Blade component or view helper.
- `HomeController` (`app/Http/Controllers/HomeController.php:15`) has a dense single-line cache call. Readable, but pushes against line-length norms.

---

## 4. Data Architecture — 4 / 5

**What's done well:**
- Schema is lean and normalised where it matters. Only one FK (`posts.category_id -> categories.id`) with cascade delete — correct for a blog.
- Composite index on `posts(is_published, published_at)` covers the most common query pattern (`scopePublished`).
- Composite index on `partners(category, is_active, sort_order)` covers the partners page query exactly.
- Soft deletes on content models (`Post`, `Faq`, `Testimonial`, `Partner`) but not on `Enquiry` (contact submissions are append-only). Good domain-aware decision.
- `sessions` table with index on `user_id` and `last_activity`. Standard and correct.

**Deductions:**
- FAQ categories are stored as raw strings. No index covers the `category` scope combined with `sort_order` for the frontend query `Faq::orderBy('sort_order')->groupBy('category')`. The existing single-column index on `category` helps, but a composite `(category, sort_order)` would serve the actual access pattern.
- No `fulltext` index on `posts.title` or `posts.body`. Blog search by keyword would require a full table scan. Not critical at current scale (<50 posts), but worth noting.
- Migration history shows columns added then dropped (`categories.color`, `enquiries.preferred_language`). The migrations themselves are fine (separate up/down), but this churn suggests the schema was designed iteratively rather than upfront. Not a flaw — just a sign of prototyping.
- `Enquiry` has no `read_at` or `status` column. As the business grows, there's no way to track which enquiries have been handled vs. new. This will be the first pain point.

---

## 5. Security — 4.5 / 5

**What's done well:**
- HTML sanitization via Symfony `HtmlSanitizer` with an explicit allowlist (`Post.php:79-123`). Only `https` for media, `https/http/mailto` for links. No `javascript:` URIs. Test coverage confirms XSS vectors are stripped (`ModelScopeTest`).
- Honeypot field on contact form (`StoreEnquiryRequest.php:30` — `'website' => ['max:0']`).
- Rate limiting on contact POST (`throttle:5,1`). Test confirms 429 on the 6th request.
- `Post::resolveRouteBinding()` prevents access to unpublished content.
- Filament admin gated by `canAccessPanel()` returning `$this->is_admin` + `AdminPolicy` on all models.
- Session encryption enabled in `.env.example` (`SESSION_ENCRYPT=true`), secure cookies (`SESSION_SECURE_COOKIE=true`).
- Architecture test (`ArchTest.php`) enforces no `env()` calls inside `App\` namespace — forces config-based access.
- Architecture test enforces controllers don't use `DB` facade (prevents raw SQL injection vectors).

**Minor deductions:**
- No CSRF exemption issues (all handled by Laravel's default middleware), but `ContactController` returns JSON without checking `Accept` header or wrapping in a try/catch. A mail transport failure would bubble as a 500 with a stack trace if `APP_DEBUG=true`.
- The `AdminPolicy` accepts a generic `Model` type hint. While functional, it means the policy would silently apply to any model passed through the Gate, including ones not explicitly registered. No real risk today, but loose typing.
- No Content Security Policy headers configured. The `robots.txt` explicitly invites AI crawlers — that's a business choice, not a security issue, but worth flagging.

---

## 6. Testing — 4.5 / 5

**What's done well:**
- 54+ tests covering all critical paths: smoke tests for all 27 static pages, blog CRUD, contact form validation (including honeypot and rate limiting), mail assertions, Filament admin for all 6 resources, model scopes, OG image generation, sitemap, and XSS sanitization.
- Architecture tests (`ArchTest.php`) enforce structural rules: no `DB` facade in controllers, no `env()` in app code, all models extend `Model`.
- Filament resource tests are thorough: create, update, delete, validation errors, search, bulk actions, and non-admin 403.
- `RefreshDatabase` applied globally to all Feature tests via `Pest.php`. Clean per-test state.
- Factory states mirror domain concepts (`published`, `draft`, `featured`, `active`, `inactive`).
- Realistic factory data (real FAQ content, real university names, real testimonial quotes) makes seeder output usable for demos.

**Minor deductions:**
- `tests/Unit/` is empty. While the app has little pure-logic code that warrants unit tests, `Post::sanitizeHtml()` is a pure static method that would benefit from dedicated unit tests covering edge cases (malformed HTML, nested scripts, encoded entities).
- No browser/E2E tests (no Dusk or Playwright test files). The JS-heavy frontend (GSAP animations, Alpine.js interactivity) is untested server-side.
- No test for the `OgImageController` cache path — existing tests only hit the generation path, not the "return cached image from disk" branch.

---

## 7. Caching Strategy — 4 / 5

**What's done well:**
- Event-driven invalidation via `booted()` model events. Post save/delete clears `sitemap:xml` and `home:latest-posts`. Testimonial save/delete clears `home:testimonials`. Partner save/delete clears `partners:all`. Correct granularity.
- 1-hour TTL on page-level caches (`Cache::remember('...', 3600, ...)`) is reasonable for content that changes via admin panel (minutes-to-hours between edits).
- OG images cached to disk with md5-hash filenames. Generated once, served as static files forever. Correct for immutable output.
- Sitemap generated on a cron schedule (`dailyAt('03:00')`) with fallback to on-demand generation if cache is cold.

**Deductions:**
- No cache warming on deploy. `bin/deploy.sh` runs `optimize:clear` which nukes the application cache, then `optimize` only caches config/routes/events. The first visitor after deploy hits cold caches for home page, partners, and sitemap simultaneously. Add `php artisan sitemap:generate` (already there) plus a warmup curl or artisan command for the other keys.
- Cache keys are bare strings (`'home:latest-posts'`, `'partners:all'`). No constants or central registry. If a key is renamed in the model event but not in the controller (or vice versa), invalidation silently breaks. Consider extracting cache keys to model constants (e.g., `Post::CACHE_KEY_LATEST`).
- The `GenerateSitemap` command uses a class constant `CACHE_KEY` for its key, but `Post`, `Testimonial`, and `Partner` use inline strings. Inconsistent pattern.
- Blog category filtering (`BlogController::index()`) is not cached. Every request with `?category=slug` runs a fresh query. Fine at current scale, but the home page and partners page are cached while this isn't — inconsistent caching boundaries.

---

## 8. Deployment Readiness — 3.5 / 5

**What's done well:**
- CI pipeline (`.github/workflows/ci.yml`) covers PHP setup, migrations, Pint style check, full test suite, and frontend build. Runs on push and PR to `main`.
- Deploy script (`bin/deploy.sh`) follows the correct Laravel deployment sequence: composer install (no-dev), migrate, build assets, clear caches, optimize, generate sitemap, restart queue workers. Uses `set -euo pipefail` for safety.
- `.env.example` is well-documented with comments explaining Gmail SMTP setup, WhatsApp config, etc.
- SQLite as default DB simplifies development and CI (no database server required).

**Deductions:**
- **No zero-downtime deployment strategy.** `bin/deploy.sh` runs `npm ci && npm run build` on the live server, which means a window where assets are being rebuilt. No atomic symlink deployment (like Envoyer, Deployer, or a custom symlink swap).
- **No health check beyond `/up`.** No readiness probe, no database connectivity check, no queue health monitoring.
- **No error tracking service configured.** No Sentry, Bugsnag, or Flare in `composer.json` or `config/`. Production errors go to the log file only. This is the single biggest operational gap.
- **No `storage:link` in the deploy script.** The public storage symlink (`public/storage -> storage/app/public`) isn't created. If deploying to a fresh server, uploaded partner logos and testimonial photos won't be served.
- **CI doesn't run `php artisan db:seed`** before tests, but tests use `RefreshDatabase` with factories, so this is actually fine. However, CI doesn't verify that seeding itself works — a broken seeder wouldn't be caught until manual deploy.
- **No staging environment** or environment-specific deploy configs mentioned.
- **No backup strategy** referenced. SQLite database is a single file — easy to back up, but nothing automates it.

---

## 9. Code Organisation — 4.5 / 5

**What's done well:**
- Flat, minimal directory structure. No premature `app/Services/`, `app/Actions/`, `app/Repositories/` directories. The app isn't complex enough to need them.
- Filament resources follow the v5 convention with separate `Schemas/`, `Tables/`, and `Pages/` subdirectories per resource.
- Config files are well-separated: `config/seo.php` for SEO, `config/nav.php` for navigation structure. Domain configs live alongside framework configs.
- Controllers are small and focused. The largest is `OgImageController` at 190 lines (image generation logic). Most are 15-50 lines.
- Single `AdminPolicy` avoids 6 identical policy files.
- Route file is well-organised with grouped routes by section (services, programs, about, etc.) and consistent naming conventions.

**Minor deductions:**
- `PageController::ROUTE_VIEW_MAP` duplicates knowledge that already exists in the route definitions. The route name and view path share a consistent pattern (`services.education.index` -> `pages.services.education.index`). A convention-based approach (`return view('pages.' . str_replace('.', '.', $routeName))`) would eliminate the 27-line constant. However, the explicit map is more readable and allows exceptions (e.g., `'showcase' => 'showcase'` breaks the pattern).
- `Post::sanitizeHtml()` is a static method on the model. If sanitization were needed elsewhere (e.g., FAQ answers), it would need to be duplicated or extracted. Currently only used by `Post`, so acceptable.

---

## 10. Maintainability — 4.5 / 5

**What's done well:**
- Consistent code style enforced by Pint in CI.
- PHPDoc type annotations on relationships (`@return BelongsTo<Category, $this>`), scope parameters (`@param Builder<Post> $query`), and array shapes.
- Factory data is realistic and domain-appropriate — not `Lorem ipsum`. New developers can seed the database and immediately see a believable marketing site.
- Seeder guards (`Testimonial::count() === 0`, `Partner::count() === 0`) prevent duplicate seeding.
- `BlogSeeder` with real post content from the legacy Wix site preserves actual content during development.
- Cache invalidation is co-located with the model it protects (in `booted()`), not scattered across controllers.

**Minor deductions:**
- No README or contributing guide for new developers (though `CLAUDE.md` is comprehensive for AI-assisted development).
- `PartnerCategory` enum has a case called `OvereastCollege` — likely a typo for "Overseas College". This will propagate into the database and Filament UI.
- The `composer.json` dev script runs 4 concurrent processes (`serve`, `queue:listen`, `pail`, `npm run dev`). If one crashes, the others continue running. No process supervisor or health monitoring for the dev environment.

---

## Priority Recommendations

### High Priority (fix before production)

1. **Fix `Mail::send()` vs queue discrepancy** — `ContactController.php:17` uses `Mail::to()->send()` but `EnquiryReceived` implements `ShouldQueue`. Either use `Mail::to()->queue()` or remove `ShouldQueue` from the mailable. As-is, mail is sent synchronously, blocking the HTTP response.

2. **Add error tracking** — Integrate Sentry, Flare, or Bugsnag. Production errors currently go to a log file with no alerting. This is the biggest operational risk.

3. **Add `php artisan storage:link`** to `bin/deploy.sh` — Without it, uploaded files (partner logos, testimonial photos) won't be publicly accessible on a fresh deployment.

4. **Fix `PartnerCategory::OvereastCollege` typo** — `app/Enums/PartnerCategory.php`. Should be `OverseasCollege`. Will require a migration to update existing database values.

### Medium Priority (improve before scaling)

5. **Extract cache keys to constants** — Scattered string literals (`'home:latest-posts'`, `'partners:all'`, etc.) across models and controllers. A mismatch between invalidation and retrieval would silently serve stale data.

6. **Add `Enquiry` status tracking** — Add a `status` enum column (`new`, `read`, `replied`) and/or `read_at` timestamp. Without it, the admin has no way to distinguish new from handled enquiries.

7. **Add zero-downtime deployment** — The current deploy script has a rebuild window. Consider Envoyer, Deployer, or atomic symlink deploys.

### Low Priority (nice-to-have)

8. **Move `Category::badgeClass()` to a Blade component** — Presentation logic doesn't belong in models.

9. **Add composite index `faqs(category, sort_order)`** — Covers the actual query pattern on the FAQ page.

10. **Consider unit tests for `Post::sanitizeHtml()`** — Pure function with security implications deserves edge-case coverage (malformed HTML, double-encoded entities, SVG payloads).

---

## Summary

This is a well-built Laravel marketing site that demonstrates disciplined restraint. The codebase avoids the common trap of over-engineering a content site with service layers, repository patterns, and premature abstractions. The `PageController` route-map pattern, generic `AdminPolicy`, and invokable controllers show a developer who understands that simplicity is a feature.

The data architecture is appropriate — normalised where it matters, denormalised where it doesn't (FAQ categories as strings, enquiry types as constants). Testing is comprehensive at 54+ tests with architecture enforcement.

The main gaps are operational: no error tracking, no zero-downtime deploys, and a mail dispatch bug. These are the items to address before production traffic arrives.
