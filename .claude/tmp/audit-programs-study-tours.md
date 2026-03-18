# Page Audit: Study Tours
**Route**: `/programs/study-tours` | **File**: `resources/views/pages/programs/study-tours.blade.php`
**Hero**: variant=centered, height=320px (default)

## S1 Hero
component-driven -- see audit-components.md

## S2 Featured -- Culinary Study Tour
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: Well-structured split layout with image left, content right. Location badge in green provides context. CTA button uses correct primary styling. Image has `loading="lazy"`, alt text, aspect ratio, and `object-cover`.
- Finding: This section is essentially a manual `<x-content-split>` layout. The existing `<x-content-split>` component uses `py-16` while this section uses `py-14`. Minor inconsistency.
- Fix: Could use `<x-content-split>` component but the custom badge and CTA button placement justify the inline approach. No urgent fixes.

## S3 Short-Term Immersion Programs
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | N/A   |
**Score: 20/20** (no image, scored out of 20)
- Finding: Clean 2x2 grid of `<x-card>` components with icon slots. Uses `<x-section-heading>` and `data-animate="stagger"`. Fully consistent with site patterns.

## S4 Custom Group Tours
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 4               | 5     |
**Score: 23/25**
- Finding: Uses `bg-primary-50` background which is a nice variation for visual rhythm. Split layout with content left, image right.
- Finding: Uses raw `<h2>` with `text-3xl font-bold` and `data-animate="fade-up"` instead of `<x-section-heading>`. Inconsistent with S3 which uses the component.
- Fix: Replace inline `<h2>` with `<x-section-heading title="Custom Group Tours" :centered="false" />`.

## S5 Also Relevant
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 3              | 3               | N/A   |
**Score: 15/20** (no image, scored out of 20)
- Finding: Same sparse link pattern as other program pages. Two plain links, no heading. Minimal visual weight.
- Fix: Add a section heading. Consider richer link presentation with descriptions.

## S6 CTA Banner
component-driven -- see audit-components.md

## Summary
**Average**: 19.4/22.0 (weighted) | Effective: **4.4/5 per category**
**Priority fixes**:
1. Replace raw `<h2>` in S4 with `<x-section-heading>` for consistency
2. Improve S5 "Also Relevant" with heading and richer link presentation
3. Minor: align section padding (`py-14` vs `py-16` in content-split component)
