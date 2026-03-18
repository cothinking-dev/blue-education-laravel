# Page Audit: Buddy Programme
**Route**: `/programs/buddy-programme` | **File**: `resources/views/pages/programs/buddy-programme.blade.php`
**Hero**: variant=left, height=320px (default), badge="14-Day Immersion . Anglican Schools"

## S1 Hero (component-driven -- see audit-components.md)
Note: Uses `badge` prop -- one of the few pages to use this. Good for programme-type pages to surface key facts in the hero.

## S2 What Is the Buddy Programme?
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 5               | 5     |
**Score: 24/25**
- Finding: Side-by-side layout with text left and `<x-facts-table>` right -- exactly matches Student Visas S2 and this is the correct component for key-value programme metadata.
- Finding: `<x-facts-table>` with title "Programme Summary" and 6 rows -- well-structured.
- Finding: Standard container padding -- compliant.
- Fix (minor): Heading uses raw `h2 text-3xl font-bold text-gray-900 mb-4` instead of `<x-section-heading>`. Same pattern as migration pages -- acceptable in flex layout context.

## S3 Your 14 Days
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: 2-col grid comparing Morning vs Afternoon activities. Left card uses `bg-primary-50 border-primary-200` and right uses `bg-white border-gray-200` -- effective visual distinction.
- Finding: Morning card's bullet points use `text-primary-600 font-bold` bullets while Afternoon uses `text-gray-400 font-bold` -- intentional contrast between the two halves of the day.
- Finding: `<x-section-heading>` with `:centered="false"` -- consistent.
- Fix (minor): Hand-rolled card markup. The dual-card comparison pattern is unique and not suitable for `<x-card>` which doesn't support the internal bullet list structure natively. Hand-rolling is justified.

## S4 Beyond the Classroom
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: 3-col grid of image-top cards. Each card has an image with `aspect-[3/2]`, followed by `p-5` content area.
- Finding: Images use `rounded-corner-lg` but are inside `overflow-hidden` containers -- the container's border-radius clips the image, so the image's own `rounded-corner-lg` is redundant (double rounding). Minor, no visual impact.
- Finding: Cards use `border border-gray-200 rounded-corner-lg overflow-hidden` -- matches `<x-card>` structure.
- Fix (minor): These cards are structurally identical to `<x-card>` with `image` prop. Could use `<x-card>` instead of hand-rolling. The `<x-card>` component already handles image+title+description layout.

## S5 Why It Matters
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: 6 numbered items in a 3x2 grid using `w-8 h-8 rounded-full bg-primary-100 text-primary-800` number circles -- matches Career page S2 numbering pattern.
- Finding: `<x-section-heading>` with `:centered="false"` -- consistent.
- Finding: Content is concise and action-oriented -- good UX writing.
- Fix (minor): Uses `flex items-start gap-4` per item rather than card-style containers. This is lighter visually which suits a reasons/benefits list. No border/background means it's visually distinct from the heavier card sections above -- good hierarchy.

## S6 Also Relevant
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 4         | 3              | 3               | 5     |
**Score: 19/25**
- Finding: Same minimal link-list pattern as Student Support S7. Three bare text links with no heading.
- Fix: Lacks a section heading -- inconsistent with all other sections on this page.
- Fix: Consider converting to linked cards (matching "What Comes Next?" pattern from migration pages) for visual weight.
- Fix: `py-14` for 3 text links is disproportionate. Consider reducing or combining with the CTA.

## S7 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 23.0/25 | **Priority fixes**:
1. S6: Convert "Also Relevant" to linked cards or add a section heading -- same issue as Student Support S7
2. S4: Consider using `<x-card>` with `image` prop instead of hand-rolled image cards for consistency
3. S4: Remove redundant `rounded-corner-lg` from images inside `overflow-hidden` containers
