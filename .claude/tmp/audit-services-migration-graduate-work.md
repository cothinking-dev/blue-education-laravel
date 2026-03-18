# Page Audit: Graduate & Work Visas
**Route**: `/services/migration/graduate-work` | **File**: `resources/views/pages/services/migration/graduate-work.blade.php`
**Hero**: variant=centered (default), height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 Post-Study Work Visa (Subclass 485)
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: Excellent layout -- left column with text, `<x-facts-table>`, and `<x-data-table>`; right column with a styled checklist box (`bg-primary-50 rounded-corner-lg p-6`).
- Finding: Uses both `<x-facts-table>` (for Graduate Work Stream's 2-row key-value) and `<x-data-table>` (for Post-Study Work Stream's 3-row table with headers) -- correct component selection for different data structures.
- Finding: The checklist uses `&#10003;` checkmarks with `text-primary-600` -- consistent with the migration index page's trust checklist pattern.
- Finding: Heading uses raw `h2 text-3xl font-bold text-gray-900 mb-4` -- acceptable in flex layout context (same pattern as Student Visas S2).
- No issues found.

## S2b Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 4              | 4               | 5     |
**Score: 22/25**
- Finding: 2-image grid on `bg-gray-50` with `pt-14` only -- same visual break pattern as migration index and permanent residence pages.
- Finding: Images use `aspect-[3/2] object-cover rounded-corner-lg loading="lazy"` -- fully compliant.
- Fix: Uses `pt-14` without bottom padding, and the next section (S3) also uses `bg-gray-50`. This creates a continuous gray background with asymmetric vertical spacing. The visual break flows into S3 without a gap, which works but relies on S3's own `py-14` for the bottom separation.
- Fix (minor): No `data-animate` on images.

## S3 Employer Sponsored Visas
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: 2-col grid of hand-rolled cards with subclass labels (`text-xs font-semibold text-primary-800 mb-2`) above the card title -- good visa identification pattern.
- Finding: The ENS card includes a link to permanent residence -- appropriate progression.
- Fix (minor): These cards are hand-rolled rather than `<x-card>`. The subclass label above the title is a unique pattern not supported by `<x-card>`'s `badge` prop (which renders below the icon, above the title). Hand-rolling is justified.

## S4 For Employers: SBS Callout
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 2       | 4         | 4              | 3               | 5     |
**Score: 18/25**
- Finding: Same issue as English page S4 -- `<x-callout>` is a bare `<div>` with no section wrapper. It will render edge-to-edge without standard container padding.
- Fix (critical): Wrap in `<section class="bg-white"><div class="max-w-7xl mx-auto px-8 lg:px-16 py-14"><x-callout ... /></div></section>`.
- Finding: Content uses bullet points with `&bull;` character entities -- not styled as a proper list. This matches the callout component's internal styling (`text-sm leading-relaxed opacity-90`).

## S5 What Comes Next?
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: 3-col grid of linked cards -- exactly matches the pattern from Student Visas S5 and Permanent Residence S5.
- Finding: All three cards link to relevant sibling pages with appropriate hover effects.
- Finding: `bg-gray-50` section with `<x-section-heading>` -- consistent.
- No issues found.

## S6 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 22.8/25 | **Priority fixes**:
1. **S4 (critical)**: `<x-callout>` needs a section wrapper with standard container padding -- currently renders edge-to-edge
2. S2b: Add `data-animate="stagger"` to visual break images
3. S2b: Consider adding `pb-0` or adjusting spacing for visual break to S3 transition
