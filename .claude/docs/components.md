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
Horizontal stat counters with count-up animation on scroll (Alpine `x-intersect`). Variants: `dark`, `primary`, `light`.
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
Horizontal scroll on mobile with right-edge shadow indicator (Alpine-powered).
Props: `headers` (array), `rows` (array of arrays), `caption`, `striped`.

### `<x-logo-grid>` — Partner logo strip
Props: `logos` (array of `['src' => '...', 'alt' => '...']`), `title`, `grayscale`.

## People & Blog

### `<x-team-member>` — Team member card
Photo (WebP+PNG `<picture>`) with initials fallback. Name, role, credentials, bio, languages.
Props: `name`, `role`, `photo`, `bio`, `credentials`, `languages`.

### `<x-blog-card>` — Blog post card
Image, category badge (dynamic color), title (line-clamp-2), excerpt, date, read time.
Props: `title`, `excerpt`, `image`, `category`, `categoryColor`, `date`, `readTime`, `href`.

### `<x-featured-post>` — Featured blog card
Two-column layout (image left, content right). Same props as `<x-blog-card>`.

### `<x-credential-card>` — Credential/accreditation card
Logo + organization name + description. Falls back to shield icon.
Props: `name`, `logo`, `description`.

## Forms

### `<x-contact-form>` — Contact enquiry form
7 fields: full name*, email*, phone, country, enquiry type (select), preferred language (select), message. AJAX submit with Alpine, inline validation errors, success state.
Props: `action` (POST URL).

### `<x-contact-card>` — Contact info card
Icon + title + slot content for address/phone/email details.
Props: `title`, `icon` (raw SVG).

## Navigation & Pagination

### `<x-auto-breadcrumb>` — Auto-generated breadcrumbs
Builds breadcrumb trail from URL segments using route `->defaults('label', ...)` metadata.
Props: `dark`.

### `<x-pagination>` — Page navigation
Previous / numbered / next links. Wraps a Laravel paginator.
Props: `paginator` (Laravel paginator instance).

### `<x-whatsapp-widget>` — Floating WhatsApp button
Fixed bottom-right wa.me link. Included globally in `<x-layout>`.
