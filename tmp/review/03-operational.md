# Code Review: Categories 8-10 (Operational)

## 8. Security — 7/10

**Justification:** The application demonstrates solid security fundamentals: CSRF protection on the AJAX form submission, server-side validation via a dedicated FormRequest, rate limiting on the contact endpoint, a honeypot field for bot prevention, and proper admin panel access control via Filament's `canAccessPanel` gate. However, the HTML sanitization approach for blog content relies on `strip_tags` which is insufficient against XSS in allowed tags (e.g., `<a href="javascript:...">` or `<img onerror="...">`), and there is no SRI hash on the Google Fonts stylesheet loaded from a CDN.

**Evidence:**
- [routes/web.php:83] — Rate limiting applied to contact POST route: `->middleware('throttle:5,1')` (5 requests per minute). Appropriate threshold for a contact form.
- [app/Http/Requests/StoreEnquiryRequest.php:22-30] — All form inputs validated with type constraints, max lengths, and an `in` rule for enquiry_type. Honeypot field validated with `'max:0'`.
- [resources/views/components/contact-form.blade.php:24] — CSRF token sent via `X-CSRF-TOKEN` header on AJAX fetch. Good.
- [app/Models/User.php:53-56] — `canAccessPanel()` gates admin access on `is_admin` boolean. Combined with Filament's `Authenticate` middleware in `AdminPanelProvider.php:55-57`.
- [app/Models/Post.php:63-68] — `sanitizedBody()` uses PHP's `strip_tags()` with an allowlist. This does NOT sanitize attributes within allowed tags. An `<a href="javascript:alert(1)">` or `<img onerror="alert(1)">` would pass through. A proper HTML sanitizer (e.g., `HTMLPurifier` or `symfony/html-sanitizer`) is needed.
- [resources/views/components/accordion.blade.php:13] — FAQ answers also use `strip_tags` with an allowlist and `{!! !!}` — same XSS concern.
- [resources/views/components/layout.blade.php:67] — Alpine.js CDN script has SRI integrity hash. Good.
- [resources/views/components/layout.blade.php:44-45] — Google Fonts CSS loaded from CDN without SRI hash. Lower risk since fonts are non-executable, but still a supply chain vector.
- [resources/views/errors/404.blade.php:1] — Error page uses `robots="noindex, nofollow"` and does not leak stack traces or internal details. Clean.
- [resources/views/errors/500.blade.php:1] — Same — generic messaging, no information leakage.
- [bootstrap/app.php:13-15] — No custom middleware configuration. Relies on Laravel defaults which include CSRF verification globally. Appropriate.
- [app/Providers/Filament/AdminPanelProvider.php:44-53] — Full middleware stack including `VerifyCsrfToken`, `AuthenticateSession`, `EncryptCookies`. Solid.

**Recommendations:**
- Replace `strip_tags()` with a proper HTML sanitizer like `symfony/html-sanitizer` or `HTMLPurifier` for blog body and FAQ answer output. `strip_tags` does not filter dangerous attributes on allowed tags.
- Consider adding a newsletter subscription endpoint with its own rate limiting (currently no `StoreSubscriberRequest` or `NewsletterController` exists despite being listed as expected files).
- Add SRI hashes to Google Fonts stylesheet, or self-host the font files to eliminate the third-party dependency.

---

## 9. Performance — 7/10

**Justification:** The application handles performance well in several areas: eager loading is consistently used on list pages, the sitemap is cached with model-event-driven invalidation, Vite is properly configured with Tailwind v4, and the deploy script includes route/config/view caching. The mail is queued via `ShouldQueue`. However, the blog index executes two separate queries for the featured post and the paginated list (the featured post could appear in both), there is no caching on the home page queries, and Google Fonts are loaded from a CDN rather than self-hosted which adds an extra DNS lookup and render-blocking potential.

**Evidence:**
- [app/Http/Controllers/HomeController.php:14-15] — Uses `->with('category')` eager loading on both posts and testimonials. Prevents N+1. No caching though — these queries run on every home page load.
- [app/Http/Controllers/BlogController.php:16-26] — Blog index eager-loads category. Two separate queries for featured post and paginated list — the featured post could duplicate in the paginated results.
- [app/Http/Controllers/BlogController.php:36-43] — Blog show loads related posts with eager loading. Good.
- [app/Http/Controllers/SitemapController.php:13-18] — Sitemap served from cache, with fallback regeneration. Clean pattern.
- [app/Models/Post.php:34-36] — Cache invalidation on `saved` and `deleted` events clears `sitemap:xml`. Correct cache key management.
- [vite.config.js:7-9] — Standard Laravel Vite config with Tailwind v4 plugin. CSS and JS properly bundled.
- [resources/js/app.js:1-3] — GSAP and ScrollTrigger imported and tree-shaken via Vite. Only necessary plugins loaded.
- [resources/js/app.js:14,27-28] — Respects `prefers-reduced-motion` — skips all animations. Good for performance and accessibility.
- [resources/views/components/hero.blade.php:77] — Hero images use `fetchpriority="high"`. LCP optimization.
- [resources/views/components/hero.blade.php:27-30] — Preload link support for hero images via `preloadImage` prop. But the home page hero (`pages/home.blade.php:7-10`) builds its own hero section and does NOT use this preload mechanism.
- [resources/views/components/layout.blade.php:42-45] — Google Fonts: `preconnect` and `preload as="style"` applied. Good optimization but self-hosting would be faster.
- [bin/deploy.sh:20-21] — Deploy script runs `php artisan optimize` and `php artisan view:cache`. Route/config/view caching covered.
- [bin/deploy.sh:25] — Sitemap pre-generated at deploy time. Avoids cold-cache penalty.
- [app/Mail/EnquiryReceived.php:13] — Implements `ShouldQueue` — mail sending does not block the HTTP response. Good.
- [app/Http/Controllers/AboutController.php:9-12] — Returns a static view with no queries. Appropriate.

**Recommendations:**
- Add caching to the home page controller for `latestPosts` and `testimonials` queries, invalidated on model events (similar to sitemap pattern).
- In `BlogController::index`, exclude the featured post from the paginated query to prevent duplicate display, or combine into a single query.
- Self-host Inter font files to eliminate the `fonts.googleapis.com` and `fonts.gstatic.com` DNS lookups and improve TTFB.
- Add `<link rel="preload">` for the home page hero image (currently the home hero is hand-built and misses the `preloadImage` mechanism in the `<x-hero>` component).

---

## 10. UI/UX & Accessibility — 8/10

**Justification:** The application demonstrates strong attention to accessibility and UX patterns. There is a skip-to-content link, semantic landmark roles (`role="banner"`, `role="contentinfo"`), proper ARIA attributes on interactive elements (dropdowns, navigation, breadcrumbs), keyboard-focusable elements with visible focus rings, and comprehensive SEO markup including JSON-LD for Organization, BreadcrumbList, and BlogPosting schemas. Design tokens are consistently used throughout via the Tailwind theme configuration. The main gaps are the lack of `aria-label` on some dropdown menus in mobile nav, and the WhatsApp widget potentially overlapping content on small screens.

**Evidence:**
- [resources/views/components/nav.blade.php:27] — Skip link present: `<a class="sr-only focus:not-sr-only ...">Skip to content</a>`. Targets `#main-content`. Correct implementation.
- [resources/views/components/layout.blade.php:58] — `<main id="main-content">` provides the skip-link target. Good.
- [resources/views/components/nav.blade.php:20] — `<header role="banner">` — explicit landmark role.
- [resources/views/components/footer.blade.php:1] — `<footer role="contentinfo">` — explicit landmark role.
- [resources/views/components/nav.blade.php:29] — `<nav aria-label="Main navigation">` — labeled navigation landmark.
- [resources/views/components/nav.blade.php:45-46] — Desktop dropdown buttons have `:aria-expanded` binding that toggles with state. Good.
- [resources/views/components/nav.blade.php:48] — Chevron icon has `aria-hidden="true"`. Decorative element correctly hidden.
- [resources/views/components/nav.blade.php:70] — CTA button has visible focus styles: `focus:ring-2 focus:ring-primary-300`. Keyboard accessible.
- [resources/views/components/nav.blade.php:73-74] — Hamburger button has `aria-label="Open navigation menu"`. Good.
- [resources/views/components/auto-breadcrumb.blade.php:30] — `<nav aria-label="Breadcrumb">` with `aria-current="page"` on the last item. Follows WAI-ARIA breadcrumb pattern.
- [resources/views/components/contact-form.blade.php:56-61] — Form fields have proper `<label>` elements with `for` attributes, required indicators (`*`), and inline error messages that display validation errors. Good UX.
- [resources/views/components/contact-form.blade.php:36-39] — Success state replaces the form entirely with a thank-you message. Clear feedback.
- [resources/views/components/contact-form.blade.php:42-44] — Network error state shows a distinct red banner. Good error recovery UX.
- [resources/views/components/contact-form.blade.php:47-50] — Honeypot field uses `aria-hidden="true"` and `tabindex="-1"`. Correctly hidden from assistive tech and keyboard nav.
- [resources/views/components/seo.blade.php:31-35] — Page title, meta description, robots, and canonical URL on every page. Comprehensive.
- [resources/views/components/seo.blade.php:37-47] — Full Open Graph tags including `og:image:alt`. Good.
- [resources/views/components/seo.blade.php:56-62] — Twitter card meta tags present.
- [resources/views/components/seo.blade.php:64-86] — JSON-LD Organization schema on all pages. Type `EducationalOrganization`. Rich.
- [resources/views/components/seo.blade.php:88-142] — JSON-LD BreadcrumbList auto-generated from URL segments. Matches visual breadcrumb.
- [resources/views/pages/blog/show.blade.php:3-24] — JSON-LD BlogPosting schema with headline, dates, author, publisher, and image.
- [resources/views/errors/404.blade.php] — Styled consistently with the main site layout. Helpful CTAs to home and contact. `robots="noindex, nofollow"`.
- [resources/views/errors/500.blade.php] — Same consistent styling and helpful messaging.
- [resources/css/app.css:9-46] — Design tokens defined in `@theme` block: primary palette, base neutrals, success greens, corner radii. Used consistently across all components.
- [resources/css/app.css:64-72] — `prefers-reduced-motion` media query ensures animated elements remain visible when motion is reduced. Accessibility-conscious.
- [resources/views/components/whatsapp-widget.blade.php:1-9] — Has `aria-label="Chat on WhatsApp"`, `rel="noopener noreferrer"`, focus ring styles. Accessible. Fixed positioning at `bottom-6 right-6`.
- [resources/views/components/hero.blade.php:75-77] — Hero images include `width` and `height` attributes to prevent CLS. Good.
- [resources/views/pages/home.blade.php:5-10] — Home hero image has descriptive `alt` text. Images throughout the page have meaningful alt text.
- [resources/views/components/nav.blade.php:89-93] — Mobile dropdown buttons lack `aria-expanded` attribute (desktop buttons at line 45 have it, but mobile at line 89 does not).
- [resources/views/components/footer.blade.php:70-89] — Credentials section uses text-only display at very small sizes (`text-[10px]`). Potentially below WCAG minimum font size recommendation, though not a strict violation.

**Recommendations:**
- Add `:aria-expanded` to mobile nav accordion buttons (line 89 of `nav.blade.php`) to match the desktop dropdown pattern.
- Consider adding `aria-label` to the mobile navigation drawer container for screen reader context.
- Evaluate the WhatsApp widget's fixed position on very small screens — it may overlap page content or interfere with scrolling. Consider hiding it or repositioning it at narrow breakpoints.
- The credentials text at `text-[10px]` in the footer may be difficult to read. Consider bumping to at least `text-xs` (12px).
