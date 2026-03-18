# Page Audit: VET & TAFE
**Route**: `/services/education/vet-tafe` | **File**: `resources/views/pages/services/education/vet-tafe.blade.php`
**Hero**: variant=left, height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 What is VET/TAFE? (component-driven -- see audit-components.md)

## S3 Is VET Right for You?
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: Uses `<x-card>` with `icon` slot in a 3-col grid -- exactly matches English page's "Course Types" pattern.
- Finding: `<x-section-heading>` with `:centered="false"` -- consistent.
- Finding: Middle card links to career services via `:href` and `linkText` -- good cross-linking.
- No issues found.

## S4 What You Can Study
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 4               | 4     |
**Score: 22/25**
- Finding: Banner image uses `aspect-[3/1] max-h-[240px]` -- consistent with School page's S4 pattern.
- Finding: Industry tags use `bg-primary-50 text-primary-800 text-sm font-medium px-4 py-2 rounded-full` -- well-styled pill badges.
- Fix: The `<x-section-heading>` appears after the banner image (`mb-8`). The image has its own `mb-8` wrapper. This creates: image -> `mb-8` -> heading -> `mb-10` -> paragraph -> `mb-8` -> pills. The spacing stacks well but the heading's `mb-10` gap before the short intro paragraph is generous. Minor.
- Fix (minor): The pills list uses `flex flex-wrap gap-3` which is appropriate, but has no `data-animate` attribute unlike the card grids on this page.

## S5 Qualification Levels
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: `<x-data-table>` with 4 columns used correctly.
- Finding: Footnote uses `text-sm text-gray-500 mt-4` -- consistent with degree page's footnote pattern.
- Finding: `<x-section-heading>` with `:centered="false"` -- consistent.
- No issues found.

## S6 Why VET?
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: Uses `border-l-4 border-primary-600 pl-6` accent bars for 3 value propositions -- distinctive visual treatment not seen elsewhere. Not a component -- hand-rolled.
- Finding: `gap-8` instead of `gap-6` used elsewhere -- slightly wider, but appropriate for the border-left cards which need more visual breathing room.
- Finding: The third item includes a link to graduate work visas -- good cross-linking.
- Fix (minor): Could consider extracting this border-left card pattern into a reusable component if used on more pages. Currently unique to this page.

## S7 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 24.0/25 | **Priority fixes**:
1. S4: Add `data-animate` to the industry pills container for animation consistency
2. S6: Consider whether border-left card pattern should be a component (low priority -- only used here)
