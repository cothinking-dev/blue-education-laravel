# General / Site-Wide Graphics

Graphics that apply across the entire site — visual style guide, icon sets, shared textures, patterns, decorative elements, responsive strategy, and optimization pipeline.

---

## Visual Style Guide

All graphics on this site must follow a single visual language: **photorealistic, DSLR-quality stock photography**.

### Photography Standard

| Attribute | Requirement |
|-----------|-------------|
| **Realism** | Must look like it was shot with a DSLR (Canon 5D / Nikon D850 tier). Natural depth of field, real lighting, real textures. No flat illustration, no cartoon, no vector art for anything larger than 64px. |
| **Lighting** | Natural or studio-natural. Golden hour preferred for outdoor/lifestyle. Soft diffused light for indoor/office. No harsh flash, no HDR glow. |
| **Color grading** | Warm and approachable. Slight warmth in skin tones. Whites should be clean, not blue-shifted. Consistent across the site — if one image is warm and another is cold/corporate, they clash. |
| **Subjects** | Real people (diverse, international), real environments (Australian campuses, Perth landmarks, offices). Candid > posed. Active > static. Avoid obvious stock cliches (pointing at screens, fake laughing at salads). |
| **Composition** | Leave breathing room for text overlays (heroes). Rule of thirds. No center-punched compositions unless the subject demands it. Avoid busy backgrounds that fight with UI. |
| **Target Audience** | **Primary audience is East Asian students (Japanese, Chinese, Korean).** East Asian subjects must be prominently featured in hero images, card photos, and key conversion pages. Use Freepik filter `filters[people][ethnicity]=east-asian` when searching. Diversity is still important — don't make it exclusively East Asian — but East Asian representation must be front-center. |
| **Diversity** | Every multi-person image should reflect the international student demographic with **East Asian students as the primary focus**, alongside African, South Asian, Middle Eastern, European, Latin American representation. No tokenism — groups should look natural. |

### When Photos Aren't Possible (Small UI Elements)

For elements under 64px (icons, tag pills, tab indicators), photos don't work. These elements should:

- Use clean, minimal SVG line icons (2px stroke, rounded joins)
- Match the site's existing Heroicon style as a baseline
- Never use cartoonish, flat-illustration, or 3D-rendered icon styles
- Remain functional and secondary — the photography carries the visual identity, icons just aid navigation

**This means**: Heroicons are acceptable at small sizes. The plan's recommendation to replace them with "custom icon sets" is downgraded to P3 — only pursue if a Freepik search surfaces a realistic, cohesive set that genuinely outperforms Heroicons. Don't force it.

### Infographics and Diagrams

For items like pathway flowcharts, points system breakdowns, and visa stream comparisons:

- Use **photo-composite infographics** — real photo backgrounds with clean typography and simple overlays
- Or **data-visualization style** — clean charts/bars/timelines on white, using the site's brand colors
- Never use flat/cartoon illustration style for infographics
- These will likely need to be custom-designed (Figma/Canva) rather than stock-sourced

### Decorative Backgrounds and Textures

For CTA banners, hero light variants, and section accents:

- Use **real photo textures** shot with shallow depth of field (blurred campus, bokeh city lights, abstract architecture)
- Or **photographic abstracts** — real-world surfaces (marble, linen, concrete) at very low opacity
- Never use geometric/abstract vector patterns

---

## Responsive Image Strategy

| Breakpoint | Hero Images | Inline Photos | Card Images |
|------------|------------|---------------|-------------|
| **Desktop** (1280px+) | Full 1920px wide, CSS-cropped to section height | Rendered at stated dimensions | 800x500 or as stated |
| **Tablet** (768–1279px) | Same source, CSS handles crop — ensure subject isn't cropped out at center | Stack to full-width if in side-by-side layout | May stack to full-width |
| **Mobile** (<768px) | Same source, but art-direct: ensure key subject is in center-third of frame so it survives aggressive horizontal crop | Full-width, maintain aspect ratio | Consider hiding card images on mobile if they push content below the fold (use `hidden sm:block` on `<img>`) |

**Key rule**: Every hero image must have its primary subject in the **center third** of the frame. Edges are expendable. This ensures the image works at every breakpoint without needing separate mobile crops.

For `<x-content-split>` images: these stack on mobile (image above text). Keep them — they provide visual relief in long scrolls.

---

## Image Optimization Pipeline

Every image added to the site must pass through this pipeline before deployment:

| Step | Tool | Target |
|------|------|--------|
| **1. Format** | Convert to WebP | All raster images served as `.webp` |
| **2. Resolution** | Resize to stated dimensions | Never serve a 4000px image in an 800px slot |
| **3. Compression** | WebP quality 80-85 | Heroes: < 150KB. Inline photos: < 80KB. Card images: < 50KB. Icons/SVGs: < 5KB |
| **4. Lazy loading** | `loading="lazy"` on all images below the fold | Already in most blade templates |
| **5. Alt text** | Descriptive, specific to the actual image content | Already specified in blade templates |
| **6. Naming** | `{page-folder}/{descriptive-name}.webp` | Follow existing `public/images/` structure |

**File size budget per page**: Aim for < 500KB total image weight above the fold, < 1.5MB total for the full page including lazy-loaded images.

---

## Site-Wide Graphic Entries

### 1. CTA Banner Background Texture — `P3`

- **Location**: Every page has a `<x-cta-banner>` component — currently solid bg-primary-800 with no visual texture
- **Type**: Photographic texture overlay
- **Current state**: Solid dark blue (primary-800) background
- **Recommended graphic**: A real photograph shot with extreme shallow depth of field — blurred campus hallway, city lights bokeh, or abstract architectural glass — darkened and overlaid at 10-15% opacity on the existing primary-800 background. Should add depth without competing with CTA text.
- **Stock search keywords**: "blurred university hallway dark", "city lights bokeh dark blue", "abstract architecture glass reflection dark", "dark blue building abstract background"
- **AI generation prompt (fallback)**: "Photograph of a modern university building hallway shot with extreme shallow depth of field, everything blurred into abstract shapes. Dark blue color grading, very low key lighting. DSLR quality, natural bokeh. For use as a dark background texture overlay."
- **Dimensions**: 1920x400px, WebP, < 60KB

---

### 2. Section Divider — `P3`

- **Location**: Between major sections on content-heavy pages (About, Career, Programs)
- **Type**: Subtle decorative separator
- **Current state**: Sections alternate between bg-white and bg-gray-50 — no decorative dividers
- **Recommended graphic**: A thin, elegant SVG wave or curved line. This is one case where a simple SVG line (not a photo) is the right tool — keep it minimal, single stroke, brand blue or gray.
- **Stock search keywords**: "wave section divider SVG", "subtle curve divider web design", "thin wave separator modern"
- **AI generation prompt**: N/A — this should be hand-drawn in Figma or sourced as an SVG asset. A 2px curved line is not something to photograph or AI-generate.
- **Dimensions**: 1920x60px SVG
- **Note**: This is a UI element, not photography. Keep it minimal.

---

### 3. Testimonial Quote Mark — `P3`

- **Location**: Home testimonials section, used in `<x-testimonial>` component
- **Type**: Decorative typographic element
- **Current state**: No visual quote mark, just text-based testimonial cards
- **Recommended graphic**: Large opening quotation mark in a subtle brand blue tone. This is a typographic element, not a photo — render it from a serif font (e.g., Georgia or Playfair Display) at high resolution.
- **Stock search keywords**: "decorative quote mark typography", "large quotation symbol elegant"
- **AI generation prompt**: N/A — render from font at high resolution
- **Dimensions**: 120x100px SVG or PNG
- **Note**: Typographic element — render from a font, don't source as stock.

---

### 4. Newsletter Section Background — `P3`

- **Location**: Blog index page — `<x-newsletter>` component
- **Type**: Photographic background texture
- **Current state**: Component has a simple colored background
- **Recommended graphic**: A real photograph of an open laptop on a desk with a coffee cup, shot from above with shallow depth of field. Heavily blurred and overlaid at 8-10% opacity as a background texture. Should whisper "content" without being identifiable.
- **Stock search keywords**: "laptop desk coffee overhead blurred", "workspace flat lay blurred abstract", "desk work from above shallow depth of field"
- **AI generation prompt (fallback)**: "Overhead flat-lay photograph of a clean desk with laptop, coffee cup, and notebook. Shot with DSLR, shallow depth of field so everything is slightly blurred. Warm natural light from a window. For use as a very low-opacity background texture."
- **Dimensions**: 1920x400px, WebP, < 40KB (heavy compression since it's a bg texture)

---

### 5. WhatsApp Widget Custom Icon — `P3`

- **Location**: Floating WhatsApp button (site-wide via `<x-whatsapp-widget>`)
- **Type**: Chat widget icon
- **Current state**: Default WhatsApp icon or styled button
- **Recommended graphic**: Keep the standard WhatsApp brand icon — users recognize it instantly. If customizing, only adjust the container (shadow, shape) not the icon itself.
- **Stock search keywords**: N/A — use official WhatsApp brand icon
- **AI generation prompt**: N/A
- **Dimensions**: 56x56px
- **Note**: Don't over-design this. Brand recognition > brand customization for a chat widget.

---

### 6. Footer Background Texture — `P3`

- **Location**: Site-wide footer component
- **Type**: Photographic texture
- **Current state**: Solid dark background
- **Recommended graphic**: Real photograph of Perth skyline at dusk, heavily darkened (multiply blend at 5-8% opacity on the dark charcoal background). Should be barely perceptible — a subtle nod to Perth, not a visible image.
- **Stock search keywords**: "perth skyline dusk panorama", "perth city night skyline", "perth elizabeth quay sunset panoramic"
- **AI generation prompt (fallback)**: "Panoramic photograph of Perth city skyline at dusk from across the Swan River. Elizabeth Quay and Bell Tower visible. DSLR quality, natural twilight colors, wide panoramic composition. For use as an extremely low-opacity dark footer background."
- **Dimensions**: 1920x300px, WebP, < 30KB (extreme compression, it's barely visible)

---

### 7. Blog Card Placeholder Image — `P2`

- **Location**: Blog cards across the site when `featured_image` is missing
- **Type**: Placeholder/fallback image
- **Current state**: May show broken or missing image if no featured_image is set
- **Recommended graphic**: A real photograph of an open book or notebook on a desk with soft natural light. Clean, minimal, warm. Not branded — just a pleasant neutral image that says "article."
- **Stock search keywords**: "open book desk natural light minimal", "notebook pen desk soft light", "reading desk warm light clean"
- **AI generation prompt (fallback)**: "Close-up photograph of an open hardcover book on a clean wooden desk. Soft natural window light. Shallow depth of field, pages slightly blurred. Warm tones, minimal composition. DSLR quality."
- **Dimensions**: 800x500px (16:10), WebP, < 40KB

---

### 8. Partner Institution Logos — `P1`

- **Location**: Home page logo marquee, About Partners page, Degrees page
- **Type**: Official institution logos
- **Current state**: Have: UWA (SVG), Curtin (WebP), Murdoch (SVG), ECU (PNG), NM TAFE (SVG), Notre Dame (SVG). Missing: South Metropolitan TAFE, other national partner institutions
- **Recommended graphic**: Source official logos from university/TAFE media/brand pages.
- **Stock search keywords**: N/A — official sources only
- **AI generation prompt**: N/A — DO NOT AI-generate institution logos
- **Dimensions**: Match existing (h-10 to h-12 rendered height)
- **Note**: Official logos only. Download from institution media/brand pages.

---

### 9. SCSA & WA Dept of Education Logos — `P1`

- **Location**: Programs > SCSA Associate page — currently using placeholder text boxes
- **Type**: Official government logos
- **Current state**: Plain text in bordered boxes ("Official SCSA Associate", "WA Department of Education"), no actual logos
- **Recommended graphic**: Source the official SCSA (School Curriculum and Standards Authority) logo and the WA Department of Education logo from government websites.
- **Stock search keywords**: N/A — official government logos only
- **AI generation prompt**: N/A — DO NOT AI-generate government logos
- **Dimensions**: SVG preferred, ~120x80px rendered
- **Note**: Must be sourced from official WA government websites. This is the most visible gap on the entire site.

---

### 10. 404 / Error Page Graphic — `P2`

- **Location**: Error pages (404, 500, etc.)
- **Type**: Hero/feature image
- **Current state**: Not audited in original plan (gap identified in rubric)
- **Recommended graphic**: A real photograph with a "lost" or "searching" theme — person looking at a map, empty airport terminal, or compass on a table. Warm, not frustrating. Should make the error page feel intentional, not broken.
- **Stock search keywords**: "person looking at map lost", "compass table adventure", "empty airport terminal quiet", "searching direction travel"
- **AI generation prompt (fallback)**: "Photograph of a young person standing at a crossroads, looking at a paper map with a slightly puzzled but optimistic expression. Outdoor setting, soft natural light, shallow depth of field blurring the background. DSLR quality, warm tones."
- **Dimensions**: 800x600px, WebP
