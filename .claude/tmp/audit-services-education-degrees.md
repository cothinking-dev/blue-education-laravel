# Page Audit: University Degrees
**Route**: `/services/education/degrees` | **File**: `resources/views/pages/services/education/degrees.blade.php`
**Hero**: variant=centered (default), height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 Programs
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 4               | 5     |
**Score: 23/25**
- Finding: The `<x-section-heading>` with `:centered="false"` emits `mb-10` (no subtitle), but the cards grid below uses `mb-8` before the footnote -- this is fine structurally.
- Finding: The three program cards use hand-rolled markup instead of `<x-card>`. Justified here because the card layout (key-value pairs with flex-between) is unique to this page and doesn't match `<x-card>` props.
- Finding: h3 uses `text-lg font-bold` which is consistent with sibling card headings.
- Finding: "Post-Study Work" value uses `font-bold text-primary-800` to draw the eye -- good visual hierarchy for the page's key selling point.
- Fix (minor): No `data-animate` on the footnote paragraph. Not critical but siblings animate.

## S3 Partner Universities
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 4               | 4     |
**Score: 22/25**
- Finding: Uses inline card markup rather than `<x-card>` -- justified because the logo+text horizontal layout doesn't match `<x-card>`'s vertical structure.
- Finding: University logos use `h-12 w-auto object-contain shrink-0 loading="lazy"` -- consistent and correct.
- Finding: The fifth card (Notre Dame) spans `sm:col-span-2` which is a deliberate visual break from the 2-col grid -- good hierarchy choice.
- Fix: The "View all partner institutions" link at the bottom has no `data-animate` attribute, unlike the card grid above. Minor consistency gap.
- Fix (minor): Logo files reference `.svg` and `.webp` and `.png` -- mixed formats. Not a code issue but could be noted for asset management.

## S4 Why Study in Western Australia?
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 5              | 4               | 5     |
**Score: 23/25**
- Finding: Uses alternating `flex-row` / `flex-row-reverse` layout for visual rhythm -- excellent pattern.
- Finding: Images use `aspect-[3/2] object-cover rounded-corner-lg loading="lazy"` -- fully compliant.
- Finding: Alt text is descriptive and audience-appropriate ("East Asian graduates celebrating...").
- Finding: The "Post-study work rights" subsection includes inline CTAs to sibling migration pages -- good cross-linking.
- Fix: The first two subsections use `mb-14` spacing, but the last one has no `mb`. This is correct (last child), but the `mb-14` between subsections is inconsistent with the standard `mb-10` from `<x-section-heading>`. Not a bug, but slightly non-standard.
- Fix (minor): Could use `<x-content-split>` component for these alternating text+image blocks. Current hand-rolled version uses `gap-12` and `items-center` which matches the component, but `<x-content-split>` uses `py-16` not `py-14`. The inline version here fits the section's `py-14` better, so inline is arguably correct.

## S5 Fees & Costs
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 4              | 5               | 5     |
**Score: 23/25**
- Finding: Uses `max-w-4xl` instead of `max-w-7xl` -- intentional for a text-only centered section. Matches `<x-cta-banner>` pattern.
- Finding: `<x-section-heading>` is centered (default) which fits the centered container.
- Fix: Uses `py-14` which is the site standard, but the narrower `max-w-4xl` combined with `text-center` means this section could feel cramped on mobile. No actual issue observed.
- No image needed for this section -- text-only is appropriate.

## S6 Admission Requirements
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: Uses `<x-data-table>` correctly with headers and rows.
- Finding: Below-table content provides pathway links to English and VET pages -- excellent internal linking.
- Finding: The `mt-6` below the table gives proper breathing room.
- No issues found.

## S7 How to Apply
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: `<x-timeline>` with 5 steps -- component handles layout automatically.
- Finding: Section heading uses `:centered="false"` consistent with all other non-centered sections on this page.
- No issues found.

## S8 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 23.5/25 | **Priority fixes**:
1. S4: Consider extracting alternating text+image blocks into `<x-content-split>` invocations if the `py-16` vs `py-14` difference is resolved
2. S2: Add `data-animate` to the footnote paragraph for animation consistency
3. S3: Add `data-animate` to the "View all partner institutions" link
