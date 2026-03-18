# Page Audit: Fees & Costs
**Route**: `/fees` | **File**: `resources/views/pages/fees.blade.php`
**Hero**: variant=left, height=320px (default), image=yes, breadcrumbs=true

## S1 Hero (component-driven — see audit-components.md)
Left-aligned variant with background image. Breadcrumbs enabled. Clean.

## S2 Our Approach (component-driven — see audit-components.md)
Pure `<x-content-split>`. Title "Transparent pricing. Always." Two paragraphs + 3-item checkmark list. Image present. The checkmark list uses `&#10003;` with `text-primary-600 font-bold` — consistent with migration page's trust checklist pattern. Clean.

## S3 Cost Overview
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Standard container with `bg-gray-50`.
- `<x-section-heading>` with `:centered="false"`.
- `<x-data-table>` with 4-column data. 5 rows covering all cost categories.
- Clean, well-structured.
- No issues found.

## S4 What You'll Pay
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Standard container. `bg-white`.
- `<x-section-heading>` with `:centered="false"`.
- 5 items with `border-l-4 border-primary-600 pl-6` left-border accent pattern.
- Each item: `<h3>` at `font-bold text-gray-900`, description at `text-sm text-gray-600 leading-relaxed text-pretty`.
- Contextual link to student visas page within the Visa Application Fees item.
- Finding: The left-border cards are inline `<div>` elements. This pattern appears on the why-australia page as well (`<x-content-split>` alternative). Not a reusable component yet.
- Fix: Minor — could componentize the left-border card pattern if used on 3+ pages. Currently appears on 2 pages (fees, why-australia).

## S5 Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 3       | 5         | 3              | 4               | 4     |
**Score: 19/25**
- Container uses `pt-10` instead of `py-14` — inconsistent spacing, and significantly less top padding than standard.
- `bg-gray-50` background — same as S6 below.
- Single image: `aspect-[3/1] max-h-[240px]` — panoramic crop. `object-cover`, `rounded-corner-lg`, `loading="lazy"`.
- Finding (Spacing): `pt-10` deviates from `py-14` standard. No bottom padding. This section and S6 are both `bg-gray-50` with no visual separation — the image floats between two gray sections.
- Finding (Vis. Hierarchy): Panoramic image with no heading or context. Located between Cost Overview data and Additional Support Services — no clear content relationship.
- Finding (Image): `aspect-[3/1] max-h-[240px]` creates a very wide, thin image. The `max-h` constraint may cause cropping issues on wider screens.
- Fix:
  1. Change `pt-10` to `py-14` for spacing consistency.
  2. Merge this image into either S4 (above) or S6 (below) to eliminate the orphaned visual break.
  3. Alternatively, change background to `bg-white` to create visual separation from S6.

## S6 Additional Support Services
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Standard container with `bg-gray-50`.
- `<x-section-heading>` with `:centered="false"`.
- `<x-data-table>` with 2-column data. 5 rows.
- Clean, well-structured.
- No issues found.

## S7 What Students Budget Separately
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Standard container. `bg-white`.
- `<x-section-heading>` with `:centered="false"`.
- Subtitle paragraph with `mb-8`.
- 2-column grid of 5 items (4 regular + 1 spanning `sm:col-span-2`).
- Each item: `border border-gray-200 rounded-corner-lg p-5`, title at `font-bold text-gray-900`, description at `text-sm text-gray-600`.
- Finding: Inline card pattern — similar to value cards on about page. The `p-5` padding is slightly less than `<x-card>`'s `p-6`. Minor inconsistency.
- Fix: Normalize padding to `p-6` to match `<x-card>` component, or use `<x-card>` with description-only mode.

## S8 CTA (component-driven — see audit-components.md)
Pure `<x-cta-banner>`. Phone prop. Single primary action. Clean.

## Summary
**Average**: 23.4/25 | **Priority fixes**:
1. S5 Visual Break: Fix `pt-10` to `py-14` and add visual separation from S6 (both are `bg-gray-50`)
2. S5: Merge orphaned panoramic image into adjacent section or remove
3. S7: Normalize inline card padding from `p-5` to `p-6` to match `<x-card>` component
4. S4: Consider componentizing the left-border card pattern if used on more pages
