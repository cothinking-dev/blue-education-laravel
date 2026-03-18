# Page Audit: SCSA Associate
**Route**: `/programs/scsa-associate` | **File**: `resources/views/pages/programs/scsa-associate.blade.php`
**Hero**: variant=left, height=320px (default)

## S1 Hero
component-driven -- see audit-components.md

## S2 What Is SCSA
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 5               | 4     |
**Score: 23/25**
- Finding: The credential card text for WA Department of Education repeats the name as both title and description ("WA Department of Education" / "Western Australian Department of Education") -- redundant copy, not a UI bug per se.
- Finding: Credential logo images lack `loading="lazy"` attribute.
- Fix: Add `loading="lazy"` to both credential card `<img>` tags (lines 30, 35). Write a distinct description for the WA Dept of Education card.

## S3 For International Schools
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | N/A   |
**Score: 19/20** (no image in section, scored out of 20)
- Finding: Numbered steps are hand-rolled inline markup (flex + rounded-full number badge). This pattern appears on multiple pages; could be extracted to a reusable `<x-step-list>` component for consistency.
- Fix: Consider extracting to a shared component, but current implementation is clean and consistent.

## S4 Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | N/A       | 4              | N/A             | 5     |
**Score: 13/15** (no typography or component usage to score, out of 15)
- Finding: Uses `pt-14` with no bottom padding, relying on the next section's `py-14` for spacing. This is intentional (visual break flows into next section) but breaks self-contained section spacing convention.
- Fix: Minor -- consider `py-10` or `py-14` for self-contained spacing. Not urgent.

## S5 How It Works
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | N/A   |
**Score: 20/20** (no image, scored out of 20)
- Finding: Clean use of `<x-timeline>` component with 5 steps. Section heading via `<x-section-heading>`. No issues.

## S6 For Students
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | N/A   |
**Score: 19/20** (no image, scored out of 20)
- Finding: The Premier's Bursary card uses a highlighted amber border/bg (`border-2 border-amber-200 bg-amber-50/30`) which is a good visual hierarchy choice. However, the four cards are hand-rolled divs rather than `<x-card>` components.
- Fix: Consider using `<x-card>` for the first three standard cards. The bursary card's special styling justifies custom markup.

## S7 Who This Is For
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | N/A   |
**Score: 20/20** (no image, scored out of 20)
- Finding: Clean 3-column grid using `<x-card>` with icon slots. Correct component usage. No issues.

## S8 Also Relevant
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 3              | 3               | N/A   |
**Score: 15/20** (no image, scored out of 20)
- Finding: Just two plain links with no heading or context. Feels sparse and lacks visual weight. No section heading to indicate purpose.
- Fix: Add a heading like "Also Relevant" or "Explore More" using `<x-section-heading>`. Consider using `<x-link-list>` or similar pattern with descriptions. The `sm:flex-row` layout works but the section feels like an afterthought.

## S9 CTA Banner
component-driven -- see audit-components.md

## Summary
**Average**: 18.7/21.4 (weighted across scored sections) | Effective: **4.4/5 per category**
**Priority fixes**:
1. Add `loading="lazy"` to credential card images in S2
2. Improve S8 "Also Relevant" with a section heading and richer link presentation
3. Consider extracting numbered step pattern (S3) to a shared component
4. Add distinct description text for WA Dept of Education credential card
