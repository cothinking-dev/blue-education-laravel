# Project Architecture

Blue Education — a Laravel 12 marketing site for an international education consultancy in Perth, Western Australia.

## Directory Layout

```
├── app/                        # Standard Laravel 12 (slim structure)
├── config/
│   └── seo.php                 # SEO defaults, OG, Twitter, JSON-LD schema
├── public/
│   ├── brand/                  # Processed logo + favicon assets
│   ├── images/partners/        # Partner institution logos
│   ├── favicon.ico             # Multi-size ICO (16/32/48)
│   ├── site.webmanifest        # PWA manifest
│   └── build/                  # Vite output
├── resources/
│   ├── css/app.css             # Tailwind v4 + brand theme tokens
│   ├── js/app.js               # GSAP + ScrollTrigger
│   └── views/
│       ├── components/         # Blade components (see components.md)
│       ├── layouts/            # (reserved for future layouts)
│       ├── partials/           # (reserved for partials)
│       ├── showcase.blade.php  # Component showcase page
│       └── welcome.blade.php   # Default Laravel welcome
├── DOCS/
│   ├── wireframes/             # Client wireframes (HTML, not deployed)
│   │   ├── assets/tokens.css   # Design tokens source-of-truth
│   │   ├── _inc/               # Nav/footer wireframe includes
│   │   └── *.html              # 27 page wireframes
│   └── website-content/        # Content & team photos from client
└── .claude/
    ├── docs/                   # Architecture docs (this directory)
    └── skills/                 # copywriting, pest-testing
```

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | Laravel 12, PHP 8.5 |
| Frontend | Tailwind CSS v4, Alpine.js (CDN), GSAP + ScrollTrigger |
| Bundler | Vite 7 with `@tailwindcss/vite` plugin |
| Testing | Pest 4, PHPUnit 12 |
| Formatting | Laravel Pint |

## Key Design Decisions

- **Anonymous Blade components** for all UI elements (no class-based components needed yet)
- **`<x-layout>`** is the single base layout — wraps every page with SEO, favicons, nav, footer, Alpine, Vite
- **SEO is config-driven** — `config/seo.php` holds defaults, `<x-seo>` renders all tags, each page overrides via props
- **Alpine.js via CDN** — lightweight interactivity (dropdowns, mobile nav); no build step needed
- **GSAP via npm** — bundled with Vite for scroll animations and complex transitions
- **Design tokens** come from the wireframes (`DOCS/wireframes/assets/tokens.css`) and are mirrored in `resources/css/app.css` as Tailwind `@theme` values
- **Wireframes are the spec** — 27 HTML files in `DOCS/wireframes/` define page structure, sections, and copy. They are the source of truth for page builds until the client approves the final design.
