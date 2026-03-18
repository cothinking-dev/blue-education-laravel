# Page Audit: School Programs
**Route**: `/services/education/school` | **File**: `resources/views/pages/services/education/school.blade.php`
**Hero**: variant=left, height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 The Australian School System
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 3         | 4              | 5               | 5     |
**Score: 22/25**
- Finding: Uses `<x-data-table>` correctly for the school stages table.
- Finding: Standard container padding `max-w-7xl mx-auto px-8 lg:px-16 py-14` -- compliant.
- Fix: Heading uses raw `h2 text-3xl font-bold text-gray-900 mb-6` instead of `<x-section-heading>`. The `mb-6` is inconsistent with the component's `mb-10` (no subtitle). Should use `<x-section-heading title="The Australian School System" :centered="false" />`.
- Finding: The intro text "Australia's school system spans 13 years:" uses `mb-8` before the table -- good spacing.
- Finding: Footer content (`mt-6 space-y-2 text-sm text-gray-600`) with SCSA link is well-placed.

## S3 What We Handle -- Before Arrival
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 5               | 5     |
**Score: 24/25**
- Finding: Uses `bg-primary-50` for visual distinction -- effective for a key action section.
- Finding: `<x-timeline>` with 3 steps -- correct component.
- Fix (minor): Heading uses raw `h2 text-3xl font-bold text-gray-900 mb-4` instead of `<x-section-heading>`. The `mb-4` before the intro text is acceptable since there's a subtitle-like paragraph, but `<x-section-heading>` would be more consistent.
- Finding: The intro paragraph "Before Arrival -- sequential steps..." with `mb-10` matches the section-heading component's subtitle spacing.

## S4 Once They're There
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 5               | 4     |
**Score: 23/25**
- Finding: Uses `<x-card>` correctly for 4 support services in a 2-col grid.
- Finding: Banner image at top uses `aspect-[3/1] max-h-[240px]` -- consistent with VET page's similar banner image pattern.
- Fix: Heading uses raw `h2 text-2xl font-bold` instead of `text-3xl`. This is a lower visual weight than sibling section headings on this page. Intentional to feel subordinate to S3, or inconsistency? The lower weight is arguably correct since this is a continuation of "What We Handle", but it breaks the `text-3xl` convention used everywhere else.
- Finding: `<x-card>` components use `linkText` and `:href` props correctly. The last card (School Transfer) omits the link -- intentional, no external page for it.
- Fix (minor): The banner image uses `rounded-corner-lg` but also sits inside `mb-8` -- consistent with VET page.

## S5 For Parents (component-driven -- see audit-components.md)

## S6 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 23.0/25 | **Priority fixes**:
1. S2: Replace raw h2 with `<x-section-heading>` for consistency (fixes `mb-6` to `mb-10`)
2. S4: Consider using `text-3xl` for heading to match sibling sections, or document the intentional downgrade
3. S3: Replace raw h2 with `<x-section-heading>` for structural consistency
