# Page Audit: Why Australia
**Route**: `/why-australia` | **File**: `resources/views/pages/why-australia.blade.php`
**Hero**: variant=centered, height=320px (default), image=yes, breadcrumbs=true

## S1 Hero (component-driven — see audit-components.md)
Centered variant with background image. Breadcrumbs enabled. Title: "Five things Australia gets right for international students." Clean.

## S2 Five Reasons
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 3         | 5              | 4               | 5     |
**Score: 22/25**
- Standard container. `bg-white`. Inner `space-y-14` for consistent spacing between the 5 reason blocks.
- Alternating layout: text-left/image-right (01, 03, 05), image-left/text-right (02, 04). Uses `flex-col lg:flex-row` and `lg:flex-row-reverse`.
- Large decorative number (`text-6xl font-bold text-primary-100`) precedes each heading.
- Headings: `h3 text-2xl font-bold text-gray-900 mt-2 mb-4`.
- All images: `aspect-[3/2]`, `object-cover`, `rounded-corner-lg`, `loading="lazy"`, descriptive alt.
- Reason 03 includes an embedded `<x-data-table>` for post-study work visa durations — excellent contextual data.
- Finding (Typography - CRITICAL): All 5 `<h3>` elements have closing `</h2>` tags instead of `</h3>`. This is an HTML nesting error. The opening tag is `<h3>` but the closing tag is `</h2>`. Example on line 20: `<h3 class="text-2xl...">Globally recognised qualifications</h2>`. Browsers may handle this gracefully but it's invalid HTML.
- Finding (Component Usage): The 5-block pattern is similar to the about page's "Why Choose" section. Both use inline flex layouts with alternating order. Not componentized — appropriate as a page-specific layout.
- Fix: **Critical** — Change all 5 closing `</h2>` tags to `</h3>` to fix the heading mismatch. Lines 20, 33, 45, 64, 76.

## S3 Perth & Western Australia
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Standard container with `bg-gray-50`.
- Kicker text: `text-sm font-semibold text-primary-800 mb-2` — "The Golden State of Education". Good visual anchoring.
- `<h2>` at `text-3xl font-bold` with `data-animate="fade-up"`.
- Two-column layout: descriptive paragraph left, `<x-facts-table>` right.
- `<x-facts-table>` with 6 rows of Perth advantages. Clean component usage.
- No issues found.

## S4 Multicultural by Design
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 4               | 3     |
**Score: 21/25**
- Standard container. `bg-white`.
- 3-column grid with `border-l-4 border-primary-600 pl-6` left-border accent pattern.
- Each item: `h3 font-bold text-gray-900`, description at `text-sm text-gray-600 leading-relaxed`.
- Finding (Vis. Hierarchy): No section heading. The 3 left-border items appear without context or a `<h2>`. The previous section (Perth) has a clear heading; this section needs one too.
- Finding (Image): No images in this section. After the rich image-text pairings in S2, this section feels visually sparse.
- Finding (Component Usage): Left-border card pattern appears here and on the fees page. Same inline pattern.
- Fix:
  1. Add a `<x-section-heading>` or `<h2>` like "Multicultural by Design" before the grid.
  2. Consider adding a supporting image or expanding this section to be more substantive.

## S5 CTA (component-driven — see audit-components.md)
Pure `<x-cta-banner>`. Primary and secondary actions. Clean.

## Summary
**Average**: 22.7/25 | **Priority fixes**:
1. **S2 CRITICAL**: Fix 5 closing `</h2>` tags that should be `</h3>` — invalid HTML
2. S4: Add section heading ("Multicultural by Design" or similar) for accessibility and visual hierarchy
3. S4: Add supporting image to break text-only monotony
4. Minor: Left-border card pattern could be componentized (appears here and on fees page)
