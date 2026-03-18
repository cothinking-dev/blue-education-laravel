# Page Audit: Student Support
**Route**: `/services/student-support` | **File**: `resources/views/pages/services/student-support.blade.php`
**Hero**: variant=centered, height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 What's Included (Support Services)
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: 6 service cards in a 3x2 grid, each with icon + title + description. Uses `w-10 h-10 rounded-corner bg-primary-50 text-primary-800` icon containers -- consistent with Student Visas S4 and Permanent Residence S2.
- Finding: Standard container padding -- compliant.
- Finding: `<x-section-heading>` with `:centered="false"` -- consistent.
- Finding: Only the Accommodation card includes a link (to Buddy Programme) -- the others are standalone descriptions. This is appropriate since not all services have dedicated pages.
- Fix (minor): Cards are hand-rolled rather than `<x-card>`. The icon+title+description pattern is close to `<x-card>` with `icon` slot, but these cards lack the hover shadow effect (`hover:shadow-lg transition-shadow`) that `<x-card>` provides. If hover effects are desired, switching to `<x-card>` would be more consistent.

## S3 Orientation & Onboarding (component-driven -- see audit-components.md)

## S4 For Parents (component-driven -- see audit-components.md)
Note: Uses `<x-content-split>` with `reverse` prop and `class="bg-gray-50"` -- correct usage of all props.

## S5 Your Support Journey
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: `<x-timeline>` with 3 steps -- correct component.
- Finding: `<x-section-heading>` with `:centered="false"` -- consistent.
- Finding: Concise step descriptions that match the pre-arrival, arrival, ongoing support narrative arc.
- No issues found.

## S6 Cost Considerations
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: `<x-data-table>` with 2 columns (Item, Notes) -- correct component for tabular cost data.
- Finding: Footnote uses `text-sm text-gray-500 mt-4` -- consistent with degree and VET page footnote patterns.
- Finding: Link to fees page uses `text-primary-800 font-semibold text-sm` -- consistent CTA link styling.
- No issues found.

## S7 Also Relevant
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 4         | 3              | 3               | 5     |
**Score: 19/25**
- Finding: A minimal section with just 2 text links -- Buddy Programme and Student visa support.
- Fix: This section lacks a heading. All other sections on this page have headings via `<x-section-heading>`. The bare link list feels unfinished.
- Fix: The links use `text-primary-800 font-semibold` but lack `text-sm` used on other inline links. Slightly larger text than expected.
- Fix: Consider converting to linked cards (like Student Visas S5 or Graduate Work S5) for visual consistency with the "What Comes Next?" pattern used on other service pages. The current implementation is visually weak for a navigation section.
- Fix: The section uses `bg-white` and `py-14` which creates a full section's worth of vertical space for just 2 links -- disproportionate.

## S8 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 23.3/25 | **Priority fixes**:
1. S7: Convert "Also Relevant" section to linked cards pattern (matching "What Comes Next?" on sibling pages) or add a section heading
2. S2: Consider switching hand-rolled icon cards to `<x-card>` with icon slot for hover effects
3. S7: Reduce section padding or combine with CTA section if content is too sparse
