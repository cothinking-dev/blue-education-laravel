# Page Audit: Our Partners
**Route**: `/about/partners` | **File**: `resources/views/pages/about/partners.blade.php`
**Hero**: variant=light, height=320px (default)

## S1 Hero
component-driven -- see audit-components.md

## S2 Institutional Partners
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 4         | 4              | 4               | 4     |
**Score: 20/25**
- Finding: The section mixes `<x-section-heading>` with manually added `<h3>` sub-headings and `<p>` descriptions. The sub-headings use `text-xl font-semibold text-gray-800` which is fine but `mt-8` and `mt-10` spacing feels inconsistent between "Universities" and "TAFE & Training Providers" sub-sections.
- Finding: University logo grid uses inline `style="min-height:100px;"` instead of Tailwind classes (`min-h-[100px]`). Same for TAFE grid with `min-height:90px` vs `min-h-[90px]`.
- Finding: The `@if($uni['src'])` conditional check is unnecessary since all items in the `$waUnis` array have a `src` value.
- Finding: Logo images in the university grid lack `loading="lazy"` -- they are above the fold on desktop but could benefit from lazy loading on mobile.
- Fix: Replace inline `style` attributes with Tailwind `min-h-[100px]` and `min-h-[90px]`. Normalize spacing between sub-sections (`mt-10` for both). Add `loading="lazy"` to university logo images.

## S3 Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | N/A       | 4              | N/A             | 5     |
**Score: 13/15** (no typography or component to score, out of 15)
- Finding: Uses `py-10` instead of the site-standard `py-14`. Slightly reduced vertical rhythm compared to other visual break sections (which use `pt-14`).
- Fix: Consider `py-14` or `pt-14` for consistency with other pages' visual break sections.

## S4 Professional Credentials
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 4     |
**Score: 23/25**
- Finding: Well-structured credential cards with logo box + text. Uses `<x-section-heading>` correctly. Card layout is hand-rolled but the design is unique enough to justify it.
- Finding: Logo container uses fixed `w-[120px] h-[80px]` dimensions. Logos have `loading="lazy"`. The credential logos reference SVG files in `images/credentials/` -- need to verify these files exist.
- Fix: Verify all 4 credential logo SVGs exist at their referenced paths. No structural fixes needed.

## S5 International Offices
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 4     |
**Score: 24/25**
- Finding: Excellent layout -- split with map image left, `<x-data-table>` right. Uses `<x-section-heading>` and the link to team page is well-placed.
- Finding: The world map image references `images/about-partners/world-map.webp` -- need to verify this file exists. Aspect ratio `16/10` is appropriate for a world map.
- Fix: Verify world map image exists. Otherwise no issues.

## S6 CTA Banner
component-driven -- see audit-components.md
- Note: Both `primaryText` and `secondaryText` CTAs link to `route('contact')` which is redundant. Consider making secondary link go to a different page (e.g., team or about).

## Summary
**Average**: 19.2/21.6 (weighted) | Effective: **4.3/5 per category**
**Priority fixes**:
1. Replace inline `style="min-height:..."` with Tailwind classes in S2
2. Normalize sub-section spacing in S2 (consistent `mt-10`)
3. Verify credential logo SVGs and world map image exist
4. Align visual break padding (S3) with site standard
5. Fix redundant CTA links in S6 -- differentiate primary/secondary destinations
