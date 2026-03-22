# Architecture Review: Categories 1-3

## 1. KISS Compliance (Keep It Simple, Stupid) -- 9/10

**Justification:** The codebase is remarkably lean for a marketing site. There are zero service layers, repositories, DTOs, or action classes. Controllers are thin -- most are single-method invocables or have at most two methods. The `PageController` route-to-view map is an elegant pattern that collapses ~25 static pages into a single controller with a const lookup. The admin authorization model uses a simple `is_admin` boolean on the User model with a single reusable `AdminPolicy`, which is the right call for a site with one admin role.

**Evidence:**
- [app/Http/Controllers/PageController.php:10-37] -- ROUTE_VIEW_MAP const elegantly maps 26 route names to views in a single controller, avoiding 26 individual controller methods
- [app/Http/Controllers/ContactController.php:13-20] -- Entire form submission in 3 lines: validate via FormRequest, create, mail
- [app/Http/Controllers/HomeController.php:11-17] -- Single invocable method, two queries, no abstractions
- [app/Http/Controllers/BlogController.php:1-46] -- Slightly more complex but still only 2 methods, both under 15 lines
- [app/Models/User.php:53-56] -- `canAccessPanel()` uses simple `$this->is_admin` boolean
- [app/Policies/AdminPolicy.php:1-49] -- Single policy reused for all 5 models, every method returns `$user->is_admin`
- No `app/Services/`, `app/Repositories/`, `app/DTOs/`, or `app/Actions/` directories exist
- No custom middleware exists in `app/Http/Middleware/`

**Recommendations:**
- [app/Http/Controllers/AboutController.php:9-12] -- `AboutController::team()` is a one-liner that returns a view, which is exactly what `PageController::show()` already does. This route could be added to the ROUTE_VIEW_MAP and `AboutController` deleted entirely, reducing the controller count by one. The route `about.team` in `routes/web.php:63` would change from `[AboutController::class, 'team']` to `[PageController::class, 'show']`.

## 2. YAGNI Compliance (You Aren't Gonna Need It) -- 8/10

**Justification:** The codebase shows active pruning discipline. The pending migration `drop_preferred_language_from_enquiries_table` (visible in git status as untracked) proves the team is removing unused columns rather than letting them accumulate. There are no empty controller methods, no unused routes, and no speculative abstractions. The OG image controller is the most complex piece, but it serves a real purpose (dynamic social sharing images). Minor deductions for a few items that could be simplified.

**Evidence:**
- [database/migrations/2026_03_22_045219_drop_preferred_language_from_enquiries_table.php:14] -- Active pruning: dropping `preferred_language` column that was no longer used in the Enquiry model or form
- [app/Models/Enquiry.php:14-21] -- Clean `$fillable` with only 6 fields, no unused columns
- [app/Http/Requests/StoreEnquiryRequest.php:22-30] -- Rules match the model's fillable fields exactly, plus a honeypot field (`website` with `max:0`)
- [routes/web.php:98-101] -- Showcase route properly gated behind `app()->isLocal()`, not shipped to production
- [config/nav.php] -- Every nav item maps to an existing route; no dead links
- All 6 models (User, Post, Category, Enquiry, Testimonial, Faq) have corresponding factories

**Recommendations:**
- [app/Http/Controllers/OgImageController.php:1-190] -- At 190 lines with gradient rendering, dot-grid textures, and logo placement, this is the most complex controller by far. For a marketing site that may rarely generate new OG images, consider whether a static pre-made OG image per page (or a simple template via an external service) would suffice. The caching mitigates runtime cost, but the code maintenance cost remains.
- [config/seo.php:47] -- `twitter.site` defaults to `@BlueEducationAU` via `env('TWITTER_HANDLE')`. If this handle never changes per-environment, the `env()` wrapper is unnecessary (though it is correctly placed in a config file).

## 3. Laravel Best Practices -- 9/10

**Justification:** The codebase is exemplary in its adherence to Laravel 12 conventions. `bootstrap/app.php` uses the streamlined Laravel 12 structure. Models use the `casts()` method (not the deprecated `$casts` property). `env()` is never called outside config files. Form Requests are used for validation. Eloquent relationships have proper PHPDoc return types with generics. Route model binding is used correctly for blog posts with slug binding. Policies are registered explicitly in `AppServiceProvider`. Factories exist for every model.

**Evidence:**
- [bootstrap/app.php:7-18] -- Clean Laravel 12 structure: `Application::configure()->withRouting()->withMiddleware()->withExceptions()->create()`
- [bootstrap/providers.php:3-6] -- Only two providers registered, no bloat
- [app/Http/Requests/StoreEnquiryRequest.php:1-44] -- Proper FormRequest with typed rules array, custom messages, and honeypot field
- [app/Models/Post.php:42-49] -- Uses `casts()` method, not `$casts` property
- [app/Models/User.php:44-51] -- Uses `casts()` method with proper return type
- [app/Models/Testimonial.php:30-35] -- Uses `casts()` method
- [app/Models/Post.php:84-89] -- `category()` relationship with `@return BelongsTo<Category, $this>` generic PHPDoc
- [app/Models/Category.php:33-38] -- `posts()` relationship with `@return HasMany<Post, $this>` generic PHPDoc
- [routes/web.php:78] -- Route model binding with slug: `Route::get('/{post:slug}', ...)`
- [app/Models/Post.php:57-60] -- `resolveRouteBinding()` scoped to published posts only, preventing access to draft posts via URL
- [app/Providers/AppServiceProvider.php:29-33] -- All 5 policies registered via `Gate::policy()`
- [app/Models/Post.php:97-101] -- Query scopes with proper `Builder<Post>` generic PHPDoc
- [routes/web.php:83] -- Rate limiting on contact form: `->middleware('throttle:5,1')`
- No `env()` calls found anywhere in `app/` directory

**Recommendations:**
- [app/Models/Faq.php] -- Missing `casts()` method. While there are no columns that strictly need casting, the `sort_order` field could benefit from an `integer` cast for consistency with how other models handle their typed attributes.
- [app/Models/Category.php] -- Same as above: no `casts()` method defined, though `sort_order` could use an integer cast.
