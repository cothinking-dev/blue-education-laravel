# Page Audit: English & Foundation Programs
**Route**: `/services/education/english` | **File**: `resources/views/pages/services/education/english.blade.php`
**Hero**: variant=centered (default), height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 ELICOS Courses (content-split + inline table section)

### S2a Content-Split
(component-driven -- see audit-components.md)

### S2b Course Durations Table
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 4              | 5               | 5     |
**Score: 23/25**
- Finding: Uses `<x-data-table>` correctly with 3 columns.
- Finding: Standard `bg-gray-50` section with `py-14 px-8 lg:px-16 max-w-7xl mx-auto` -- fully compliant.
- Fix: The heading `h3 text-xl font-semibold text-gray-800 mb-6` breaks hierarchy convention. Sibling sections use `<x-section-heading>` (which produces `h2 text-3xl font-bold text-gray-900 mb-10`). This sub-section heading should either use `<x-section-heading>` or be justified as a subsection under S2. Since this is a continuation of the ELICOS topic, the `h3` is semantically correct, but the visual weight (`text-xl` vs `text-3xl`) creates an inconsistency with how other standalone sections look.
- Fix: `mb-6` after heading is tight compared to `<x-section-heading>`'s `mb-10`. Consider `mb-8` for visual consistency.
- No image needed -- table section.

## S3 Course Types
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Finding: Uses `<x-card>` with `icon` slot correctly -- 3-card grid matching sibling pages (e.g., VET "Is VET right for you?").
- Finding: "Academic English" card uses `badge="Most Common"` -- good use of the badge prop for visual priority.
- Finding: `<x-section-heading>` with `:centered="false"` -- consistent.
- No issues found.

## S4 Teaching English Callout (component-driven -- see audit-components.md)
Note: `<x-callout>` is a `<div>`, not wrapped in a `<section>`. It appears between two sections. The callout component lacks standard section padding -- it will inherit no outer padding unless the previous/next sections provide it. Checking the callout component: it has `p-6` internal padding and `border rounded-corner-lg` but no `max-w-7xl mx-auto px-8 lg:px-16` wrapper.

| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 2       | 4         | 4              | 3               | 5     |
**Score: 18/25**
- Finding: The `<x-callout>` component is a bare `<div>` with no section wrapper. When placed at the page level between sections, it will be full-width with only `p-6` internal padding -- no `max-w-7xl mx-auto px-8 lg:px-16` container.
- Fix (critical): Wrap in a section with standard padding: `<section class="bg-white"><div class="max-w-7xl mx-auto px-8 lg:px-16 py-14"><x-callout ... /></div></section>` or the callout will bleed edge-to-edge with inconsistent padding.
- Finding: The TESOL/CELTA/EfTC badges use hand-rolled pill markup that could be a reusable component, but this is the only instance -- acceptable.

## S5 Foundation Studies (component-driven -- see audit-components.md)

## S6 Your Pathway
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 3         | 4              | 5               | 5     |
**Score: 22/25**
- Finding: Uses `<x-timeline>` with 3 steps -- correct component choice.
- Fix: The heading uses raw `h2 text-3xl font-bold text-gray-900 mb-4` instead of `<x-section-heading>`. Since the section has intro text (`mb-10` after intro paragraph), this could use `<x-section-heading title="Your Pathway" :centered="false" />` for consistency. Currently the `mb-4` gap between heading and intro text is fine, but it means the heading is not animated with `data-animate="fade-up"` -- wait, it does have `data-animate="fade-up"`. The inconsistency is purely structural: raw h2 vs component.
- Fix: The intro paragraph uses `mb-10` which matches the component's subtitle spacing -- good.

## S7 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 22.0/25 | **Priority fixes**:
1. **S4 (critical)**: `<x-callout>` needs a section wrapper with standard container padding -- currently renders edge-to-edge
2. S2b: Consider using `<x-section-heading>` or at least `mb-8` for the "Course Durations" heading
3. S6: Replace raw h2 with `<x-section-heading>` for structural consistency
