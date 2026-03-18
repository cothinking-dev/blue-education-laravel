# Page Audit: Student Visas
**Route**: `/services/migration/student-visas` | **File**: `resources/views/pages/services/migration/student-visas.blade.php`
**Hero**: variant=left, height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 What Is a Student Visa?
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 5               | 5     |
**Score: 24/25**
- Finding: Uses side-by-side layout (`flex-col lg:flex-row gap-12`) with text on the left and `<x-facts-table>` on the right -- excellent component usage. Matches Graduate Work page's S2 pattern.
- Finding: `<x-facts-table>` with 6 rows and a title -- renders with the primary-800 header bar.
- Finding: The OSHC footnote (`text-xs text-gray-500 mt-3`) includes a link to student support -- good cross-linking.
- Fix (minor): Heading uses raw `h2 text-3xl font-bold text-gray-900 mb-4` instead of `<x-section-heading>`. This is consistent with sibling migration pages that also use raw h2 when the heading sits inside a flex layout (where `<x-section-heading>` would add unwanted width constraints). Acceptable pattern.

## S3 How We Help
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: `<x-timeline>` with 5 steps and `<x-section-heading>` -- fully component-driven within the section.
- Finding: Post-timeline link to graduate work visas -- good progression linking.
- No issues found.

## S3b Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 4              | 4               | 5     |
**Score: 22/25**
- Finding: 2-image grid with `aspect-[3/2]` -- consistent with Graduate Work and Permanent Residence visual break patterns.
- Finding: Uses `pt-14` (no bottom padding) to flow into the next section seamlessly.
- Fix: The visual break section uses `bg-white` and the next section (S4) also uses `bg-white`, so they share the same background. The `pt-14` without `pb` creates an asymmetric gap. This is intentional to visually connect the images to the content below, but the pattern differs from the Graduate Work page where the visual break sits in `bg-gray-50` between different-colored sections.
- Fix (minor): No `data-animate` on the image grid -- could add `data-animate="stagger"` for consistency with other image sections.

## S4 Requirements Snapshot
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: Uses icon+text cards in a 2x2 grid -- consistent with a feature-list pattern.
- Finding: Icons use `w-10 h-10 rounded-corner bg-primary-50 text-primary-800` -- matches the icon style from Student Support page.
- Finding: Links within card text (English Proficiency links to English page, CoE links to education index) -- excellent contextual linking.
- Fix (minor): These icon+text cards are hand-rolled rather than using `<x-card>` with `icon` slot. The layout difference (horizontal icon+text vs vertical) justifies hand-rolling.

## S5 What Comes Next?
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: Uses linked cards (`<a>` elements styled as cards) with hover effects -- matches Graduate Work's S5 and Permanent Residence's S5 pattern exactly.
- Finding: `group-hover:text-primary-800 transition-colors` for the card heading -- consistent hover treatment.
- Fix (minor): Uses a 2-col grid where Graduate Work uses 3-col. This is appropriate for 2 items vs 3 -- not an inconsistency.

## S6 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 23.8/25 | **Priority fixes**:
1. S3b: Consider adding `data-animate="stagger"` to the visual break image grid
2. S3b: Evaluate whether `bg-white` for visual break should be `bg-gray-50` to match sibling migration pages
3. S2: Minor -- raw h2 is acceptable in flex layouts but could document this as a pattern exception
