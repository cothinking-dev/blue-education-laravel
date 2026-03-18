# Page Audit: Permanent Residence
**Route**: `/services/migration/permanent-residence` | **File**: `resources/views/pages/services/migration/permanent-residence.blade.php`
**Hero**: variant=left, height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 Pathways to Permanent Residence
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: 4 cards in a 2x2 grid, each with icon, subclass label, title, description, and "Best for" footer -- comprehensive and well-structured.
- Finding: Icons use `w-10 h-10 rounded-corner bg-primary-50 text-primary-800` -- consistent with Student Visas S4 and Student Support S2.
- Finding: The Skilled Migration card includes an amber callout box (`bg-amber-50 border-amber-200`) for honest messaging ("If your points are too low, we tell you") -- excellent trust-building visual hierarchy.
- Finding: "Best for" footers use `text-gray-500 text-xs` -- appropriately de-emphasized.
- Fix (minor): Cards are hand-rolled rather than `<x-card>`. Justified by the multi-part structure (icon + subclass label + title + body + callout + footer) which exceeds `<x-card>`'s prop interface.

## S2b Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 4              | 4               | 5     |
**Score: 22/25**
- Finding: Same 2-image grid pattern as Student Visas and Graduate Work visual breaks.
- Finding: `bg-gray-50` with `pt-14` -- transitions into S3 which is also `bg-gray-50`.
- Fix: Same issue as Graduate Work -- no bottom padding creates visual continuity with S3, but relies on S3's own `py-14` for spacing. This is a repeated pattern across migration pages, so it's arguably intentional.
- Fix (minor): No `data-animate` on images -- consistent omission across all migration visual breaks, so either add to all or none.

## S3 How It Works
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: `<x-timeline>` with 3 steps -- correct component.
- Finding: `<x-section-heading>` with `:centered="false"` -- consistent.
- Finding: Step descriptions are detailed and specific (e.g., "Invitations are valid for 60 days") -- good content quality.
- No issues found.

## S4 When It's More Complex Callout
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 2       | 4         | 4              | 3               | 5     |
**Score: 18/25**
- Finding: Same `<x-callout>` wrapper issue as English S4 and Graduate Work S4.
- Fix (critical): Wrap in a section with standard container padding. Currently a bare `<div>` between sections.
- Finding: Content includes a link to the contact page -- appropriate CTA for complex cases.

## S5 What Comes Next?
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: 2-col linked card grid -- matches Student Visas S5 pattern.
- Finding: Links to career services and contact page -- appropriate next steps.
- No issues found.

## S6 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 22.8/25 | **Priority fixes**:
1. **S4 (critical)**: `<x-callout>` needs a section wrapper with standard container padding -- same issue as 2 other pages
2. S2b: Add `data-animate="stagger"` to visual break images (or establish this as an intentional omission across all migration pages)
3. S2: Minor -- hand-rolled cards are justified but could benefit from a dedicated `<x-pathway-card>` component if reused
