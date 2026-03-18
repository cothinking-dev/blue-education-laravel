# Page Audit: Admission Requirements
**Route**: `/admission-requirements` | **File**: `resources/views/pages/admission-requirements.blade.php`
**Hero**: variant=left, height=320px (default), image=yes, breadcrumbs=true

## S1 Hero (component-driven — see audit-components.md)
Left-aligned variant with background image. Breadcrumbs enabled. Title is lowercase-styled "Admission requirements." with a period. Clean.

## S2 English Language Requirements
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Standard `py-14 px-8 lg:px-16 max-w-7xl mx-auto`. `bg-white`.
- Inline `<h2>` at `text-3xl font-bold` with `data-animate="fade-up"`.
- Two context paragraphs: main at default size, footnote at `text-sm text-gray-500`.
- `<x-data-table>` with 3 columns, 7 rows. Comprehensive IELTS requirements.
- Finding: Uses inline `<h2>` instead of `<x-section-heading>`. This is because there's a multi-paragraph intro before the table — `<x-section-heading>` only supports title + single subtitle.
- No issues found.

## S3 Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 3              | 4               | 5     |
**Score: 21/25**
- Container uses `pt-14` instead of `py-14` — no bottom padding. Merges into S4 below.
- `bg-gray-50` — same as S4.
- 2-column image grid. Proper `aspect-[3/2]`, `object-cover`, `rounded-corner-lg`, `loading="lazy"`, descriptive alt.
- Finding (Spacing): `pt-14` without bottom padding. S3 and S4 are both `bg-gray-50`, so they merge visually, but the image grid sits tight against the Academic Requirements heading below.
- Finding (Vis. Hierarchy): No heading or context. Orphaned images between English and Academic requirements.
- Fix: Change to `py-14` or merge images into an adjacent section.

## S4 Academic Requirements
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Standard container. `bg-gray-50`.
- `<x-section-heading>` with `:centered="false"`.
- `<x-data-table>` with 2 columns, 6 rows.
- Clean, well-structured.
- No issues found.

## S5 Pathway Options
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Standard container. `bg-white`.
- Inline `<h2>` with a conversational title: "If you don't meet direct entry requirements".
- Subtitle paragraph with `mb-8`.
- Two-column layout: `<x-data-table>` left (pathway options), dark CTA card right.
- Contextual links: "English & Foundation programmes" and "VET Diploma pathway".
- Amber warning callout for professional fields — `bg-amber-50 border border-amber-200 rounded-corner p-4`.
- Dark CTA card (`bg-primary-800 rounded-corner-lg p-6 text-white`) with assessment CTA and secondary link.
- Finding: The amber callout uses `rounded-corner` (not `rounded-corner-lg`). This is the only instance of `rounded-corner` without `-lg` suffix on this page. Likely intentional as it's a smaller element.
- Finding: The dark CTA sidebar card is a custom construction — could use `<x-callout>` but the dark primary-800 styling is unique. Appropriate as a one-off.
- No critical issues.

## S6 CTA (component-driven — see audit-components.md)
Pure `<x-cta-banner>`. Phone prop. Single primary action. Clean.

## Summary
**Average**: 24.0/25 | **Priority fixes**:
1. S3 Visual Break: Fix `pt-14` to `py-14` for consistent spacing
2. S3: Add context heading or merge visual break images into adjacent section
3. Minor: Verify `rounded-corner` vs `rounded-corner-lg` usage on amber callout is intentional
