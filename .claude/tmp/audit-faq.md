# Page Audit: FAQ
**Route**: `/faq` | **File**: `resources/views/pages/faq.blade.php`
**Hero**: variant=centered, height=320px (default), image=yes, breadcrumbs=true

## S1 Hero (component-driven — see audit-components.md)
Centered variant with background image. Breadcrumbs enabled. JSON-LD FAQ schema passed via `:json-ld` prop to layout. Clean.

Note: The `@php` block at the top of the file defines FAQ data in two forms — `$faqItems` (for JSON-LD) and separately inlined into accordion components. The data is **duplicated**: `$faqItems` is used only for the JSON-LD schema, while the accordion `items` arrays contain the same questions/answers re-typed inline. This is a maintainability concern.

## S2 Visual Context
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 3              | 4               | 5     |
**Score: 21/25**
- Container uses `pt-14` instead of `py-14` — no bottom padding. Merges into S3 below.
- 2-column image grid. Proper `aspect-[3/2]`, `object-cover`, `rounded-corner-lg`, `loading="lazy"`, descriptive alt.
- Finding (Spacing): `pt-14` without `pb-14` creates inconsistent spacing. The images sit flush against the FAQ tabs section below.
- Finding (Vis. Hierarchy): No heading or context. Two orphaned images between hero and FAQ content. Located inside `bg-white` while S3 is also `bg-white` — no visual separation.
- Fix: Either add `py-14` for full spacing, or merge these images into another section.

## S3 FAQ Tabs + Accordions
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 5              | 4               | 5     |
**Score: 23/25**
- Uses `max-w-4xl` instead of `max-w-7xl` — narrower content width for readability. Appropriate for FAQ content.
- Standard `px-8 lg:px-16 py-14`.
- 5 tab buttons using Alpine.js `x-data="{ tab: 'education' }"`. First tab active by default — matches spec.
- Tab buttons: `px-4 py-2 rounded-full text-sm font-medium` with conditional primary/gray styling.
- Each tab panel uses `<x-accordion>` component with `:items` array. First item in each tab has `'open' => true`.
- Rich HTML content in answers: tables, lists, links with `font-medium text-primary-800`.
- Finding (Spacing): `max-w-4xl` is intentionally narrower — good for reading. But `px-8 lg:px-16` on a `max-w-4xl` container creates generous side padding on small screens.
- Finding (Component Usage): Tab navigation is custom Alpine inline markup, not a `<x-tab-filter>` component. The `<x-tab-filter>` component exists in the component library. However, the FAQ tabs need `x-show` coordination with accordion panels, which `<x-tab-filter>` may not support out of the box.
- Finding: FAQ data duplication — the `$faqItems` array at the top and the accordion `:items` arrays contain the same content but written separately. If a question/answer changes, it must be updated in two places.
- Fix:
  1. Refactor to use a single data source: define all FAQ items in the `@php` block grouped by category, then reference them in both the JSON-LD schema and accordion components.
  2. Evaluate whether `<x-tab-filter>` can be extended for FAQ tab functionality.

## S4 CTA (component-driven — see audit-components.md)
Pure `<x-cta-banner>`. Phone prop passed. Single primary action. Clean.

## Summary
**Average**: 22.0/25 | **Priority fixes**:
1. Data duplication: Refactor FAQ data to single source of truth used by both JSON-LD schema and accordion components
2. S2 Visual Context: Fix `pt-14` to `py-14` for consistent spacing
3. S2: Add heading or context for visual break images, or remove section
4. S3: Evaluate `<x-tab-filter>` component for tab navigation instead of custom inline markup
