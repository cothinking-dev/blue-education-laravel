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
| `ogImage` | string | dynamic OG image | Open Graph image URL |
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

## Dynamic OG Images

Every page automatically gets a branded Open Graph image via `intervention/image` v3 (GD driver, Laravel Cloud compatible).

### How It Works

- **Route:** `GET /og-image/{path?}` — e.g. `/og-image/services/education`
- **Controller:** `App\Http\Controllers\OgImageController` (invokable)
- **Title resolution:** The controller matches the `{path}` against registered routes and reads the route's `defaults['label']` value. If no route matches, it humanizes the last path segment as a fallback.
- **SEO component integration:** When no explicit `ogImage` prop is passed to `<x-layout>`, the `<x-seo>` component auto-generates the OG URL from the current request path: `route('og-image', ['path' => trim(request()->path(), '/')])`

### Image Design (1200x630 PNG)

- **Background:** Vertical gradient from primary-800 (`#1e3a8a`) to primary-950 (`#0f1d3a`)
- **Texture:** Topographic contour pattern (concentric circles + quarter-arcs) at `0.015` opacity — matches the CTA banner texture
- **Logo:** White Blue Education logo (`public/brand/logo.png`), top-left, scaled to 260px wide
- **Divider:** Subtle white line between logo area and title
- **Title:** Inter Bold 52px, white, word-wrapped at 28 chars, positioned below divider
- **Domain:** `blueeducation.com.au` in Inter Medium 18px, bottom-right

### Fonts

Inter TTF font files for image rendering are stored in `resources/fonts/`:
- `Inter-Bold.ttf` — title text
- `Inter-Medium.ttf` — domain text
- `Inter-Regular.ttf` — available for subtitles if needed
- `Inter-SemiBold.ttf` — available for future use

### Override Behavior

- **Static pages:** OG image auto-generated from route path (no action needed)
- **Blog posts with featured image:** Pass `og-image` prop — the custom image is used instead
- **Blog posts without featured image:** Falls back to auto-generated dynamic image
- **Explicit override on any page:** Pass `ogImage` prop to `<x-layout>` to use a specific image

### GD Fallback

If the GD PHP extension is unavailable, the controller redirects to the static fallback image at `public/brand/logo-og.png`.

### Key Files

| File | Purpose |
|---|---|
| `app/Http/Controllers/OgImageController.php` | Image generation controller |
| `resources/fonts/Inter-*.ttf` | Font files for text rendering |
| `resources/images/og-texture.svg` | SVG texture asset (reference only, texture drawn in PHP) |
| `public/brand/logo.png` | Source logo placed on OG images |
| `public/brand/logo-og.png` | Static fallback OG image (1200x630) |

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
- **Includes:** all static routes + all published blog posts
- **Excludes:** `sitemap`, `showcase`, `og-image` routes

## Robots

`GET /robots.txt` is served via a route (no static file). It:

- Allows all crawlers with `User-agent: * / Allow: /`
- Explicitly welcomes AI agent crawlers: GPTBot, Google-Extended, ChatGPT-User, Claude-Web, Bytespider, CCBot, anthropic-ai, Perplexity-User, cohere-ai
- Includes the dynamic sitemap URL

## Adding New Pages

Just set `title` and optionally `description`. The dynamic OG image, breadcrumbs, and sitemap inclusion are all automatic:

```blade
<x-layout title="Student Visas" description="Expert guidance on Australian student visa applications.">
    <x-hero variant="left" title="Student Visas" ... />
    {{-- page content --}}
    <x-cta-banner />
</x-layout>
```

The route label (set via `->defaults('label', 'Student Visas')`) is used for both breadcrumb JSON-LD and the dynamic OG image title. Make sure the route has a label default.
