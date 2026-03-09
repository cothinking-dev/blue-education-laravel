# Component Reference

All components are anonymous Blade files in `resources/views/components/`.
Preview them all at `/showcase`.

## Layout & Structure

### `<x-layout>` — Base page wrapper
Every page uses this. Includes SEO head, favicons, fonts, Vite, nav, footer, Alpine.
```blade
<x-layout title="Page Title" description="Meta description">
    {{-- page content --}}
    <x-slot:head>{{-- extra head tags --}}</x-slot:head>
    <x-slot:scripts>{{-- footer scripts --}}</x-slot:scripts>
</x-layout>
```
SEO props passthrough: `title`, `description`, `keywords`, `ogImage`, `ogType`, `robots`, `canonical`, `noSuffix`, `jsonLd`.

### `<x-nav>` — Main navigation
Responsive. Desktop dropdowns via Alpine.js `x-data`. Mobile drawer via custom event `toggle-mobile-nav`.

### `<x-footer>` — Site footer
5-column grid, partner credentials, legal row. Copyright year auto-updates.

### `<x-seo>` — Meta/OG/Twitter/JSON-LD
Reads defaults from `config/seo.php`. Override per-page via props. Renders: `<title>`, meta description/keywords/robots, canonical, Open Graph, Twitter Card, JSON-LD Organization schema, optional extra JSON-LD.

### `<x-favicon>` — Favicon tags
All link/meta tags for the full favicon set (ICO, PNG sizes, apple-touch-icon, webmanifest, theme-color).

## Content Sections

### `<x-hero>` — Page hero
Three variants:
- `variant="centered"` — Full-width bg image, centered overlay text (Home, Contact)
- `variant="left"` — Full-width bg image, left-aligned text (Service overviews)
- `variant="split"` — No bg image, text left + image right (About, Programs)

Props: `title`, `subtitle`, `image`, `overlay`, `breadcrumbs`, `badge`, `variant`, `height`.

### `<x-content-split>` — Two-column 55/45
Text on one side, image placeholder on the other. Flip with `reverse`.
Props: `title`, `reverse`, `image`.

### `<x-stat-block>` — Statistics strip
Horizontal stat counters. Variants: `dark`, `primary`, `light`.
Props: `stats` (array of `['value' => '...', 'label' => '...']`), `variant`.

### `<x-section-heading>` — Section title + subtitle
Props: `title`, `subtitle`, `centered` (default true).

### `<x-cta-banner>` — Call-to-action footer banner
Dark primary background, centered. Used at bottom of every page.
Props: `title`, `subtitle`, `primaryText`, `primaryHref`, `secondaryText`, `secondaryHref`, `phone`.

## Cards & Content Blocks

### `<x-card>` — Versatile card
Icon card or image card. Supports badge, description, link arrow.
Props: `title`, `description`, `icon` (raw SVG), `image`, `badge`, `href`, `linkText`.

### `<x-testimonial>` — Quote card
Props: `quote`, `name`, `credential`, `initials`.

### `<x-callout>` — Highlight box
Variants: `primary`, `info`, `success`, `warning`.
Props: `title`, `variant`, `icon`.

### `<x-newsletter>` — Email signup
Props: `title`, `description`, `placeholder`, `buttonText`.

## Navigation & UI

### `<x-breadcrumb>` — Breadcrumb trail
Props: `items` (array of `['label' => '...', 'href' => '...']`), `dark`.

### `<x-btn>` — Button/link
Renders `<a>` if `href` set, `<button>` otherwise.
Variants: `primary`, `secondary`, `outline`, `ghost`, `white`. Sizes: `sm`, `md`, `lg`.

### `<x-tab-filter>` — Category pill buttons
Props: `tabs` (array of `['label' => '...']`), `active`.

### `<x-accordion>` — FAQ/collapsible
Native `<details>` elements. Props: `items` (array of `['question' => '...', 'answer' => '...', 'open' => bool]`).

### `<x-timeline>` — Process steps
Numbered circles with connector lines. Props: `steps` (array of `['title' => '...', 'description' => '...']`).

## Data Display

### `<x-facts-table>` — Key-value table
Blue header, alternating rows. Props: `title`, `rows` (array of `['key' => '...', 'value' => '...']`).

### `<x-data-table>` — Full data table
Props: `headers` (array), `rows` (array of arrays), `caption`, `striped`.

### `<x-logo-grid>` — Partner logo strip
Props: `logos` (array of `['src' => '...', 'alt' => '...']`), `title`, `grayscale`.
