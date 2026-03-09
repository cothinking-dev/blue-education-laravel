# SEO Framework

## Overview

Config-driven SEO with sensible defaults that can be overridden per-page. No external packages — just `config/seo.php` and the `<x-seo>` Blade component.

## Configuration: `config/seo.php`

Three sections:

1. **`defaults`** — title, title_suffix, description, keywords, author, robots
2. **`og`** — Open Graph type, site_name, locale, default image
3. **`twitter`** — card type, site handle
4. **`organization`** — JSON-LD schema: name, address, phone, email, founding year

## How It Works

`<x-layout>` passes all SEO props through to `<x-seo>`, which renders:

- `<title>` — page title + suffix (e.g. "About Us — Blue Education")
- `<meta>` — description, keywords, author, robots, canonical
- **Open Graph** — og:title, og:description, og:type, og:url, og:image, og:site_name, og:locale
- **Twitter Card** — card type, title, description, image
- **JSON-LD** — `EducationalOrganization` schema on every page
- **Optional JSON-LD** — pass custom structured data via `jsonLd` prop

## Per-Page Usage

```blade
{{-- Minimal — inherits all defaults --}}
<x-layout>...</x-layout>

{{-- Override title + description --}}
<x-layout title="About Us" description="Learn about our 25 years of experience.">...</x-layout>

{{-- Full control --}}
<x-layout
    title="Home"
    :no-suffix="true"
    description="Custom description"
    keywords="custom, keywords"
    og-type="article"
    :json-ld="['@context' => 'https://schema.org', '@type' => 'FAQPage', ...]"
>...</x-layout>
```

## What Gets Rendered

```html
<title>About Us — Blue Education</title>
<meta name="description" content="...">
<meta name="keywords" content="...">
<meta name="author" content="Blue Education Pty Ltd">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://...">
<meta property="og:title" content="About Us">
<meta property="og:description" content="...">
<meta property="og:image" content="https://.../brand/logo-og.png">
<!-- ... Twitter tags, JSON-LD ... -->
```

## Adding New Pages

Just set `title` and optionally `description`. Everything else is handled:

```blade
<x-layout title="Student Visas" description="Expert guidance on Australian student visa applications.">
    <x-hero variant="left" title="Student Visas" ... />
    {{-- page content --}}
    <x-cta-banner />
</x-layout>
```
