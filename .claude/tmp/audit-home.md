# Page Audit: Home
**Route**: `/` | **File**: `resources/views/pages/home.blade.php`
**Hero**: variant=centered (default), height=460px (custom override from default 320px)

## S1 Hero (component-driven — see audit-components.md)
Slot content: two `<x-btn>` elements in a flex row. Clean usage, correct props.

## S2 Social Proof Bar (component-driven — see audit-components.md)
Pure `<x-stat-block>` invocation with 5 stats, default `dark` variant.

## S3 What We Do
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 5               | 5     |
**Score: 24/25**
- Standard `py-14 px-8 lg:px-16 max-w-7xl mx-auto` spacing. Correct.
- Uses `<x-section-heading>` with `:centered="false"`.
- 4 `<x-card>` instances with images, alt text, named route hrefs, and descriptive linkText.
- Finding: 2-column grid uses `sm:grid-cols-2` — on medium screens all 4 cards stack into 2 rows which is fine, but no `lg:` breakpoint upgrade. Cards are image cards so this is acceptable for content density.
- Fix: None required. Minor consideration: could add `md:grid-cols-2` for semantic clarity but `sm:` already covers it.

## S4 How We Care (component-driven — see audit-components.md)
Pure `<x-content-split>` invocation with `$before` slot (logo image) and paragraph content. Class `bg-gray-50` passed via attributes. Uses `text-sm` for paragraphs — slightly small for a key selling section but consistent with the component's `text-gray-600 leading-relaxed` inner styling.

Note: The manual link at the bottom (`<a href="{{ route('about.index') }}"`) uses inline styles rather than `<x-btn>`. This is intentional as a text-style link, not a button CTA, and matches the pattern used elsewhere.

## S5 Featured Programs
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 5               | 3     |
**Score: 22/25**
- Standard container spacing. Correct.
- Uses `<x-section-heading>` and 2 `<x-card>` with badges, no images.
- "See all programmes" link is centered below the grid, consistent pattern.
- Finding: Cards have no images — text-only with badge. This is fine for featured callouts but creates visual imbalance compared to S3 which has rich image cards.
- Fix: Consider adding images to these cards for visual weight parity, or use a distinct card variant (e.g., icon cards) to signal they are a different tier.

## S6 Why Western Australia
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 4              | 3               | 2     |
**Score: 18/25**
- Standard container spacing. Correct.
- Uses `<x-section-heading>` for the title.
- 5 inline cards in a 2-row bento layout (2+3 grid pattern). All use `h3` at `text-lg font-bold`, `p` at `text-sm`.
- Finding (Typography): The `h3` elements are `text-lg font-bold` which is identical to `<x-card>` title styling — good consistency.
- Finding (Component Usage): These 5 cards are built inline with raw `<div>` elements rather than using `<x-card>` component. The card component supports text-only cards (no image, no icon). Inline construction duplicates the border/rounded/padding pattern.
- Finding (Image): No images anywhere in this section. Five text-only bento boxes feel heavy on a homepage.
- Fix: Refactor inline cards to use `<x-card>` component. Consider adding at least one supporting image (Perth skyline, campus, etc.) to break the text monotony. The "See why Western Australia" link uses `text-sm` while S5's equivalent link does not — normalize.

## S7 Testimonials
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 4     |
**Score: 24/25**
- Standard container. 3-column grid.
- Uses `<x-section-heading>` and `<x-testimonial>` component properly.
- Dynamically renders from `$testimonials` Eloquent collection.
- Finding: `$testimonials->take(3)` — if fewer than 3 testimonials exist, the grid will have gaps. No empty-state handling.
- Fix: Add `@if($testimonials->isNotEmpty())` guard similar to S9's blog pattern.

## S8 Partners (component-driven — see audit-components.md)
Pure `<x-logo-grid>` with marquee enabled. 5 partner logos. Title string passed. Clean.

## S9 Latest From the Blog
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 4         | 5              | 5               | 5     |
**Score: 23/25**
- Standard container spacing.
- Blog heading uses inline `<h2>` at `text-3xl font-bold` instead of `<x-section-heading>` — because it has a flex layout with the "View all" link on the right side. This is a justified deviation.
- `<x-blog-card>` used with full props.
- Empty state handled: "Blog posts coming soon."
- Mobile "View all" link shown via `sm:hidden`, desktop one via `hidden sm:inline`. Good responsive pattern.
- Finding (Spacing): `mb-10` on the heading row deviates from `<x-section-heading>`'s `mb-10` (same value, so actually consistent).
- Finding (Typography): The `<h2>` bypasses `<x-section-heading>` component. The `data-animate="fade-up"` is applied correctly.
- Fix: Minor — the mobile "View all" link wrapper has `mt-6` while `<x-section-heading>` components use `mb-10`. This is fine since it's a footer link, not a heading.

## S10 Final CTA (component-driven — see audit-components.md)
Pure `<x-cta-banner>` invocation. Has both primary and secondary actions. Secondary uses `tel:` href. No `phone` prop passed — so the default phone number will render via the component. Wait: looking at the component, `phone` defaults to `'+61 8 6381 0030'` and the secondary already covers the call link. The `secondaryText` is "Call +61 8 6381 0030" with a `tel:` secondaryHref, while `phone` is not passed, so it gets the default — this means the phone number appears TWICE (once as secondary button, once as "Or call us" text). This is redundant.

Fix: Either pass `phone=""` (falsy, will suppress the footer phone line) or remove the `secondaryText`/`secondaryHref` phone link.

## Summary
**Average**: 22.2/25 | **Priority fixes**:
1. S6 Why WA: Refactor inline cards to `<x-card>` component; add at least one image to break text density
2. S10 CTA: Phone number appears twice — suppress duplicate via `:phone="null"` or remove secondary phone link
3. S5 Featured Programs: Add images to cards for visual weight parity with S3
4. S7 Testimonials: Add empty-state guard for fewer than 3 testimonials
5. S6 vs S5: Normalize "See all" link `text-sm` usage across sections
