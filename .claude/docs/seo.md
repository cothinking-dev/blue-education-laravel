# SEO Framework

## Overview

Config-driven SEO with sensible defaults that can be overridden per-page. Uses `config/seo.php`, the `<x-seo>` Blade component, and `spatie/laravel-sitemap` for sitemap generation.

## Configuration: `config/seo.php`

Four sections:

1. **`defaults`** — title, title_suffix, description, author, robots
2. **`og`** — Open Graph type, site_name, locale, default image + dimensions
3. **`twitter`** — card type, site handle
4. **`organization`** — JSON-LD schema: name, address, phone, email, founding year

## How It Works

`<x-layout>` passes all SEO props through to `<x-seo>`, which renders:

- `<title>` — page title + suffix (e.g. "About Us — Blue Education")
- `<meta>` — description, author, robots, canonical
- **Open Graph** — og:title, og:description, og:type, og:url, og:image, og:site_name, og:locale
- **Article OG** — article:published_time, article:modified_time (when passed)
- **Twitter Card** — card type, title, description, image
- **JSON-LD** — `EducationalOrganization` schema on every page
- **Optional JSON-LD** — pass custom structured data via `jsonLd` prop

## Available Props

| Prop | Type | Default | Description |
|---|---|---|---|
| `title` | string | config default | Page title (auto-suffixed) |
| `description` | string | config default | Meta description |
| `ogImage` | string | default logo | Open Graph image URL |
| `ogType` | string | `website` | OG type (`website`, `article`) |
| `robots` | string | `index, follow` | Robots directive |
| `canonical` | string | current URL | Canonical URL |
| `noSuffix` | bool | false | Skip title suffix |
| `jsonLd` | array | null | Custom JSON-LD structured data |
| `articlePublishedTime` | string | null | ISO 8601 publish date (articles) |
| `articleModifiedTime` | string | null | ISO 8601 modified date (articles) |

## Per-Page Usage

```blade
{{-- Minimal — inherits all defaults --}}
<x-layout>...</x-layout>

{{-- Override title + description --}}
<x-layout title="About Us" description="Learn about our 25 years of experience.">...</x-layout>

{{-- Blog post with full article SEO --}}
<x-layout :title="$post->title"
          :description="$post->seo_description"
          og-type="article"
          :og-image="$post->seo_image"
          :article-published-time="$post->published_at?->toIso8601String()"
          :article-modified-time="$post->updated_at?->toIso8601String()"
          :json-ld="$blogPostingSchema">
```

## Blog SEO

The `Post` model has two SEO accessors:

- `$post->seo_description` — excerpt, or first 160 chars of body if no excerpt
- `$post->seo_image` — absolute URL to featured image, or null

Blog show view passes full article OG tags + `BlogPosting` JSON-LD automatically.

Published-only scoping: `Post::resolveRouteBinding()` enforces the `published` scope, so unpublished posts return 404 on public routes.

## Structured Data

- **EducationalOrganization** — on every page (automatic via `<x-seo>`)
- **BlogPosting** — on blog post pages (via `jsonLd` prop)
- **FAQPage** — on `/faq` (via `jsonLd` prop)

## Sitemap

Dynamic sitemap using `spatie/laravel-sitemap`:

- **Route:** `GET /sitemap.xml` — serves cached XML, regenerates if cache is empty
- **Command:** `php artisan sitemap:generate` — builds sitemap and caches it
- **Schedule:** runs daily at 3:00 AM
- **Cache invalidation:** Post model `saved`/`deleted` events clear the cache
- **Includes:** all 28 static routes + all published blog posts

## Robots

`GET /robots.txt` is served via a route (no static file) that dynamically includes the sitemap URL.

## Adding New Pages

Just set `title` and optionally `description`. Everything else is handled:

```blade
<x-layout title="Student Visas" description="Expert guidance on Australian student visa applications.">
    <x-hero variant="left" title="Student Visas" ... />
    {{-- page content --}}
    <x-cta-banner />
</x-layout>
```
