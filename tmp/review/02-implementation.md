# Implementation Review — Categories 4-7

## 4. Backend Code Quality — 8/10

**Justification:** Models are well-structured with typed return types, proper relationship annotations, and consistent use of casts via the `casts()` method (Laravel 12 convention). Controllers are lean, validation is extracted to a Form Request, and the mailable correctly implements `ShouldQueue`. Naming is descriptive throughout. Minor gaps exist in PHPDoc coverage on some computed attributes and the Enquiry model is notably bare (no scopes, no relationships, no casts).

**Evidence:**
- [app/Models/Post.php:84] — Relationship annotations use proper generic syntax `@return BelongsTo<Category, $this>`, which is exemplary.
- [app/Models/Post.php:57] — `resolveRouteBinding()` enforces published-only for route model binding, a smart security pattern.
- [app/Models/Post.php:33-37] — Cache invalidation on save/delete via `booted()` is clean and well-placed.
- [app/Models/Category.php:35] — `posts()` has proper return type and PHPDoc annotation.
- [app/Http/Controllers/ContactController.php:13] — Controller is appropriately thin; validation in `StoreEnquiryRequest`, mail dispatch is a single line.
- [app/Mail/EnquiryReceived.php:13] — Implements `ShouldQueue` correctly with constructor property promotion.
- [app/Models/Enquiry.php:8-22] — Model is very minimal: no casts, no scopes, no relationships. The `enquiry_type` column could benefit from an enum cast or at least string validation is consistent (it is validated in the Form Request).
- [app/Http/Requests/StoreEnquiryRequest.php:19-31] — Return type on `rules()` is annotated with array shape. Validation rules use array syntax consistently. Custom messages are provided for required fields.
- [app/Models/Post.php:66-68] — `sanitizedBody()` attribute lacks a PHPDoc `@return` tag on the `Attribute` return explaining the resolved type (string).
- [app/Models/Faq.php:16] — `CATEGORIES` constant is well-typed with PHPDoc `@var` but is never used in validation — the FAQ category in the form request is not validated against it (though FAQs are admin-only via Filament, so this is a minor concern).

**Recommendations:**
- Add a `casts()` method to the `Enquiry` model (even if minimal) for consistency with other models.
- Consider extracting the `enquiry_type` options (`Education`, `Migration`, etc.) into a shared constant or enum, since they appear in both `StoreEnquiryRequest` and the Blade `contact-form` component independently.

## 5. Frontend Code Quality — 8/10

**Justification:** The component architecture is mature and well-organized. Blade components use `@props` with sensible defaults, support multiple variants (hero, btn, card), and compose cleanly. Tailwind usage is excellent — design tokens (`primary-*`, `base-*`, `success-*`, custom radii) are used consistently instead of raw hex values. Alpine.js usage in the contact form is appropriately scoped. GSAP integration is robust with proper `prefers-reduced-motion` handling in both CSS and JS. Minor concerns: the SEO component has heavy route-matching PHP logic that belongs in a service, and the home page has some inline card markup that could be componentized.

**Evidence:**
- [resources/css/app.css:9-47] — Full design token system via `@theme` with oklch colors, custom radii, success palette. Production-quality.
- [resources/css/app.css:64-72] — `prefers-reduced-motion` media query ensures animated elements remain visible, preventing content hiding for users with motion sensitivity.
- [resources/js/app.js:14,27-28] — Reduced-motion check gates all GSAP animations. The `gsap-ready` class on `<html>` is a progressive enhancement pattern that ensures content is visible without JS.
- [resources/js/app.js:70-72] — `ScrollTrigger.refresh()` on window load prevents stale trigger positions from layout shifts caused by lazy-loaded images.
- [resources/views/components/hero.blade.php:1-15] — Well-defined props with 4 variants (`centered`, `left`, `light`, `split`). Variant system is clean using a lookup array.
- [resources/views/components/btn.blade.php:9-24] — 7 button variants and 3 sizes, composed via lookup arrays. Clean and extensible.
- [resources/views/components/contact-form.blade.php:8-34] — Alpine.js `x-data` handles form state, submission, error display, and network error handling all in a single self-contained scope. The complexity is appropriate for a contact form.
- [resources/views/components/nav.blade.php:27] — Skip-to-content link is properly implemented with sr-only + focus styles.
- [resources/views/components/layout.blade.php:58] — `<main id="main-content">` landmark is present, good for accessibility.
- [resources/views/components/layout.blade.php:67] — Alpine.js loaded via CDN with SRI hash, pinned to exact version — secure and reproducible.
- [resources/views/components/seo.blade.php:90-127] — Heavy route-matching logic for breadcrumbs lives in a Blade component. This iterates all registered routes on every request. Should be in a service class or middleware.
- [resources/views/pages/home.blade.php:5-30] — Home hero does not use the `<x-hero>` component; it's hand-rolled with similar but slightly different markup. This creates maintenance risk if the hero component evolves.
- [resources/views/components/footer.blade.php:1] — Uses `role="contentinfo"` semantic landmark. Links use `route()` helper consistently.

**Recommendations:**
- Extract the breadcrumb route-matching logic from `seo.blade.php` into a dedicated service or view composer to improve performance and testability.
- Refactor the home page hero (lines 5-30) to use the existing `<x-hero>` component, or document why a custom variant is needed.
- The home page "Why Western Australia" section (lines 164-237) has 6 manually built cards with repeated markup. Consider a data-driven approach or a dedicated component.

## 6. Database Architecture — 6/10

**Justification:** Schema design is generally sound with appropriate column types and nullable usage. A dedicated migration adds indexes for frequently queried columns, which is good. However, there is a critical bug: three models (`Post`, `Testimonial`, `Faq`) use Laravel's `SoftDeletes` trait but no migration ever creates the `deleted_at` column. The `drop_team_members_partners_and_subscribers` migration has an empty `down()` method, making it irreversible. Foreign key usage is limited to a single relationship (posts to categories).

**Evidence:**
- [app/Models/Post.php:17] — Uses `SoftDeletes` trait.
- [app/Models/Testimonial.php:11] — Uses `SoftDeletes` trait.
- [app/Models/Faq.php:11] — Uses `SoftDeletes` trait.
- [database/migrations/2026_03_09_100530_create_posts_table.php] — No `$table->softDeletes()` column defined. This will cause a database error on any delete operation.
- [database/migrations/2026_03_09_100531_create_testimonials_table.php] — No `$table->softDeletes()` column defined.
- [database/migrations/2026_03_09_100531_create_faqs_table.php] — No `$table->softDeletes()` column defined.
- [database/migrations/2026_03_16_133118_add_indexes_to_frequently_queried_columns.php] — Good: composite index on `[is_published, published_at]`, individual indexes on `is_featured`, `category`, and `is_active`. Proper `down()` method to reverse.
- [database/migrations/2026_03_09_100530_create_posts_table.php:16] — `cascadeOnDelete()` on `category_id` foreign key is correct — deleting a category removes its posts.
- [database/migrations/2026_03_22_051503_drop_team_members_partners_and_subscribers_tables.php:22-24] — Empty `down()` method makes this migration irreversible. The tables cannot be recreated on rollback.
- [database/migrations/2026_03_19_083706_add_is_admin_to_users_table.php:19-21] — Data migration (updating `is_admin` based on email domain) is embedded in a schema migration. This couples schema changes with data changes and will run on every fresh migration.
- [database/factories/PostFactory.php:80-112] — Excellent factory with `published()`, `featured()`, and `draft()` states. Realistic markdown body generation.
- [database/factories/FaqFactory.php:15-82] — Outstanding: domain-specific FAQ pool with real content per category and a `forCategory()` state. This is reference-quality factory design.
- [database/factories/TestimonialFactory.php:19-69] — Good: realistic quotes, credentials, and countries relevant to the business domain. `active()` and `inactive()` states provided.
- [database/seeders/DatabaseSeeder.php:18-21] — Uses `firstOrCreate` for idempotent admin user creation, but uses `bcrypt()` directly instead of the factory's `Hash::make()` pattern (minor inconsistency).

**Recommendations:**
- **Critical:** Add a migration to create `deleted_at` columns on `posts`, `testimonials`, and `faqs` tables, or remove the `SoftDeletes` trait from these models if soft deletes are not needed.
- Add a proper `down()` method to the `drop_team_members_partners_and_subscribers` migration, or add a comment explaining why rollback is intentionally unsupported.
- Move the data migration (setting `is_admin` by email domain) out of the schema migration into a seeder or a separate data migration.
- Consider adding an index on `enquiries.created_at` for admin dashboard sorting/filtering.

## 7. Testing Quality — 7/10

**Justification:** The test suite provides solid coverage of the most critical paths: all public pages are smoke-tested, the contact form has thorough happy/unhappy path testing (including honeypot and rate limiting), model scopes are individually verified, and the Filament admin is tested for access control. Architecture tests enforce important conventions. However, there are gaps: no tests for the blog controller's filtering/pagination, no tests for the FAQ page's category filtering, no edge case tests for the SEO/OG component, and no tests for the sitemap content beyond basic route inclusion. The test count (~40 tests) is reasonable for the application size.

**Evidence:**
- [tests/Feature/PageSmokeTest.php:16-46] — Dataset-driven smoke test covers 24 static pages, ensuring none return errors. Clean pattern.
- [tests/Feature/ContactFormTest.php:15-116] — Comprehensive: valid submission, minimal fields, missing name, missing email, invalid email, invalid enquiry type, honeypot rejection, rate limiting, and mail dispatch verification. This is the strongest test file.
- [tests/Feature/ContactFormTest.php:90-92] — `Mail::assertQueued` verifies the mail is queued (not just sent), correctly matching the `ShouldQueue` implementation.
- [tests/Feature/ModelScopeTest.php:17-79] — Tests all scopes (`published`, `featured`, `active`, `category`) and computed attributes (`seo_description`, `seo_image`). Good use of factory states.
- [tests/Feature/ArchTest.php:12-23] — Three architecture rules: no `DB` facade in controllers, models extend Eloquent, no `env()` in app code. Concise and valuable.
- [tests/Feature/FilamentAdminTest.php:20-52] — Tests guest redirect, login page, admin access, non-admin denial, and all 5 list pages. Good authorization coverage.
- [tests/Feature/PageSmokeTest.php:84-96] — Tests 404 for nonexistent slug, draft posts, and non-local showcase. Good edge cases.
- [tests/Pest.php:14-16] — `RefreshDatabase` applied to all feature tests. Correct setup.
- Tests are missing for: blog category filtering, blog pagination, FAQ page rendering with category tabs, the `resolveRouteBinding` published-only behavior (tested implicitly via the 404 draft test but not explicitly), and the `Post::booted()` cache invalidation.
- No tests verify that the soft delete functionality works (and given the missing migration columns, it would actually fail).

**Recommendations:**
- Add tests for blog listing with category filtering and pagination boundaries.
- Add a test for FAQ page rendering that verifies category-specific questions appear correctly.
- Add a test that explicitly verifies `Post::resolveRouteBinding` returns null for unpublished posts (the existing 404 test does this implicitly but an explicit unit test would be clearer).
- Add a test for the sitemap that verifies blog post URLs are included (currently only static routes are checked).
- Consider adding a test for the `Post::booted()` cache invalidation behavior.
- Once the soft delete migration issue is fixed, add tests verifying soft delete behavior (trashed posts not appearing in public queries, etc.).
