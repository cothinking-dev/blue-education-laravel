# Page Audit: Programs
**Route**: `/programs` | **File**: `resources/views/pages/programs/index.blade.php`
**Hero**: variant=centered, height=320px (default), image=yes, breadcrumbs=true

## S1 Hero (component-driven — see audit-components.md)
Centered variant with background image. Breadcrumbs enabled. Clean.

## S2 Programs Grid
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 4              | 4               | 5     |
**Score: 22/25**
- Standard `py-14 px-8 lg:px-16 max-w-7xl mx-auto` container. `bg-white`.
- 2-column grid with `sm:grid-cols-2 gap-6`.
- 3 `<x-card>` instances (Buddy Programme, Study Tours, SCSA Associate) with images, badges, alt text, named routes.
- 4th card (Executive Internship) is a **custom inline card** with `border-2 border-primary-200 bg-primary-50/30` highlight treatment.
- Finding (Component Usage): The Executive Internship card is built inline instead of using `<x-card>`. It has a "Premium Program" badge, title, description, and link — all of which `<x-card>` supports. The only unique feature is the highlighted border/background, which could be handled via a card variant or custom class override.
- Finding (Typography): The inline card's heading is `h3 text-lg font-bold` while `<x-card>` uses `h3 text-lg font-semibold` — weight mismatch (`font-bold` vs `font-semibold`).
- Finding (Vis. Hierarchy): No `<x-section-heading>` above the grid. The section jumps straight into cards after the hero. Other index pages (education, migration) have a heading or intro text before the grid.
- Fix:
  1. Add `<x-section-heading>` or intro text above the grid for consistency with sibling index pages.
  2. Use `<x-card>` for Executive Internship with a class override for the highlight treatment: `class="border-2 border-primary-200 bg-primary-50/30"`.
  3. Normalize font weight to `font-semibold` to match the card component.

## S3 Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 4               | 5     |
**Score: 23/25**
- Standard container with `bg-gray-50` alternation. Full `py-14`.
- 2-column image grid. Proper `aspect-[3/2]`, `object-cover`, `rounded-corner-lg`, `loading="lazy"`, descriptive alt.
- Finding: No heading or context text. Two images as a visual break.
- Fix: Minor — same pattern as other pages. Consider if these add value or could be removed. They're consistent with the site-wide "visual break" pattern.

## S4 CTA (component-driven — see audit-components.md)
Pure `<x-cta-banner>`. Phone prop passed. Single primary action. Clean.

## Summary
**Average**: 22.5/25 | **Priority fixes**:
1. S2: Add `<x-section-heading>` or intro paragraph above program cards for consistency with sibling index pages
2. S2: Refactor Executive Internship inline card to use `<x-card>` component with class override
3. S2: Fix font weight mismatch — inline card uses `font-bold`, component uses `font-semibold`
