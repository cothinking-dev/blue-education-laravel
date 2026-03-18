# Page Audit: Executive Internship Programme
**Route**: `/programs/executive-internship` | **File**: `resources/views/pages/programs/executive-internship.blade.php`
**Hero**: variant=left, height=320px (default)

## S1 Hero
component-driven -- see audit-components.md

## S2 What It Is
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 5               | N/A   |
**Score: 19/20** (no image, scored out of 20)
- Finding: Uses a raw `<h2>` with `text-3xl font-bold` instead of `<x-section-heading>` component. Functionally identical but inconsistent with sibling sections on this page (S4-S7 all use `<x-section-heading>`).
- Fix: Replace the inline `<h2>` on line 18 with `<x-section-heading title="What It Is" :centered="false" />` for consistency.

## S3 The Six-Phase EBP Process
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 4               | N/A   |
**Score: 18/20** (no image, scored out of 20)
- Finding: Uses a raw `<h2>` instead of `<x-section-heading>`. The subtitle paragraph (`text-gray-600 mb-10`) is manually added -- `<x-section-heading>` supports a `subtitle` prop that would handle this.
- Finding: Six-phase cards are hand-rolled (`border border-gray-200 rounded-corner-lg p-6 bg-white`). This pattern is identical to the `<x-card>` component without an image. Could use `<x-card>` for consistency.
- Fix: Use `<x-section-heading title="The Six-Phase EBP Process" subtitle="The Employability Booster Programme..." :centered="false" />`. Consider using `<x-card>` for the phase cards.

## S4 Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | N/A       | 4              | N/A             | 5     |
**Score: 13/15** (no typography or component to score, out of 15)
- Finding: Same pattern as SCSA page -- uses `pt-14` with no bottom padding. Images have proper `loading="lazy"`, alt text, aspect ratio, and `object-cover`. Consistent with site visual break pattern.
- Fix: Minor -- consider self-contained padding for maintainability.

## S5 What You Gain
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | N/A   |
**Score: 20/20** (no image, scored out of 20)
- Finding: Clean use of `<x-section-heading>` and `<x-card>` with icon slots. 3-column grid with `data-animate="stagger"`. Fully consistent.

## S6 Programme Partners
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 4               | 3     |
**Score: 21/25**
- Finding: Partner cards use initial-letter avatars (`w-14 h-14 rounded-full bg-primary-100`) instead of actual photos. Acceptable if photos are unavailable but visually underwhelming.
- Finding: Partner cards are hand-rolled instead of using `<x-card>` or a dedicated partner component.
- Fix: Source actual partner photos or logos if available. If not, the initial-letter avatar approach is functional. Consider creating an `<x-partner-card>` or `<x-team-member>` variant.

## S7 For Host Employers
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | N/A   |
**Score: 19/20** (no image, scored out of 20)
- Finding: Bullet points use HTML entities (`&#8226;` and `&#10003;`) instead of actual SVG icons or Heroicons. Works but is less polished than the icon-based approach used elsewhere.
- Finding: The inline link at line 150 uses `text-sm` which reduces its visibility as a CTA.
- Fix: Replace HTML entity bullets with Heroicons for consistency. Consider making the employer CTA link more prominent.

## S8 How to Apply
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | N/A   |
**Score: 20/20** (no image, scored out of 20)
- Finding: Clean use of `<x-section-heading>` and `<x-timeline>` component. No issues.

## S9 Also Relevant
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 3              | 3               | N/A   |
**Score: 15/20** (no image, scored out of 20)
- Finding: Same sparse link section pattern as SCSA page. Three plain links, no heading, no descriptions. Minimal visual weight.
- Fix: Add a section heading. Consider descriptions or card-based links. Same fix as SCSA.

## S10 CTA Banner
component-driven -- see audit-components.md

## Summary
**Average**: 17.8/19.4 (weighted) | Effective: **4.2/5 per category**
**Priority fixes**:
1. Replace raw `<h2>` tags in S2 and S3 with `<x-section-heading>` for consistency
2. Source partner logos/photos for S6 or improve avatar treatment
3. Improve S9 "Also Relevant" with heading and richer link presentation
4. Replace HTML entity bullets in S7 with Heroicons
5. Consider using `<x-card>` for the six-phase cards in S3
