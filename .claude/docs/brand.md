# Brand & Design Tokens

## Colors

Sourced from `DOCS/wireframes/assets/tokens.css`, registered in `resources/css/app.css` as Tailwind `@theme` values.

| Token | Value | Usage |
|---|---|---|
| `primary-800` | `#1e3a8a` | Primary brand — nav CTA, headings, dark accents |
| `primary-500` | `#3b82f6` | Secondary brand — buttons, links, highlights |
| `primary-50` | `#eff6ff` | Light tint — card backgrounds, hover states |
| `primary-950` | `#0f1d3a` | Deepest — footer-level dark backgrounds |

All color tokens use **oklch** format in `resources/css/app.css` for better interpolation.

Use Tailwind classes: `bg-primary-800`, `text-primary-500`, `border-primary-200`, etc.

### Base Neutral Palette

Defined as `--color-base-50` through `--color-base-950` in `@theme`. Maps to Tailwind's default gray in oklch — swap the values in `app.css` to re-theme the entire site.

Use `base-*` classes (not `gray-*`): `bg-base-50`, `text-base-900`, `border-base-200`, etc.

### Hero Overlay Tokens

Defined in `:root` in `app.css`:
- `--hero-overlay-start` / `--hero-overlay-end` — brand-blue gradient with alpha
- `--hero-vignette` — edge darkening
- `--placeholder-stripe` — skeleton loading pattern

## Typography

- **Font:** Inter (Google Fonts), loaded in `<x-layout>` `<head>`
- Registered in Tailwind as `--font-sans` in `resources/css/app.css`
- Use `text-pretty` on all body copy for better wrapping

## Border Radii

| Token | Value | Tailwind class |
|---|---|---|
| `--radius-corner` | `0.5rem` | `rounded-corner` |
| `--radius-corner-lg` | `1rem` | `rounded-corner-lg` |

## Logo Assets

All in `public/brand/`:

| File | Dimensions | Use case |
|---|---|---|
| `Logo.avif` | native | Original source file |
| `logo.png` | 602×196 | Fallback, email, print |
| `logo.webp` | 602×196 | Web display (6KB) |
| `logo-sm.png` | 123×40 | Nav/header fallback |
| `logo-sm.webp` | 123×40 | Nav/header primary (1KB) |
| `logo-og.png` | 1200×630 | Open Graph / social sharing |

Nav/footer use `<picture>` with WebP + PNG fallback:
```blade
<picture>
    <source srcset="{{ asset('brand/logo-sm.webp') }}" type="image/webp">
    <img src="{{ asset('brand/logo-sm.png') }}" alt="Blue Education" class="h-10 w-auto">
</picture>
```

## Favicon Set

| File | Size | Purpose |
|---|---|---|
| `public/favicon.ico` | 16/32/48 | Browser tab (multi-size ICO) |
| `brand/favicon-16x16.png` | 16×16 | Small favicon |
| `brand/favicon-32x32.png` | 32×32 | Standard favicon |
| `brand/apple-touch-icon.png` | 180×180 | iOS home screen |
| `brand/android-chrome-192x192.png` | 192×192 | Android/PWA |
| `brand/android-chrome-512x512.png` | 512×512 | Android/PWA splash |
| `public/site.webmanifest` | — | PWA manifest (theme: `#1e3a8a`) |
