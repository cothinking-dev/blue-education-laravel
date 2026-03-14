---
name: image-sourcing
description: >-
  Sources images for Blue Education pages via the Freepik API. Activates when
  finding, downloading, or generating images for page builds; resolving
  [IMAGE: ...] placeholders from wireframes; or when the user mentions image,
  photo, stock, Freepik, hero image, or asks to source visuals for a page.
---

# Image Sourcing via Freepik API

## When to Apply

Activate this skill when:

- Building a page that contains `[IMAGE: ...]` placeholders in its wireframe
- Sourcing stock photos or generating AI images for the site
- Optimising or converting downloaded images to WebP
- Replacing placeholder images with production assets

---

## Decision Tree: Search vs Generate

**ALWAYS search stock first.** Stock downloads are cheaper, faster, and do not consume generation credits.

1. **Search** with 2-3 keyword variations per image (e.g. "Perth skyline", "Australian city skyline", "modern city waterfront")
2. **Evaluate results** — relevant subject, high quality, appropriate aspect ratio
3. **Download the best match** if search returns good results
4. **Generate via Mystic only if:**
   - Search returns no relevant results after multiple keyword variations, OR
   - The image must be very specific (particular ethnicity, exact scenario, branded composition)
5. For generation, use model `realism` for photographic content

---

## Freepik API Reference

### Authentication

All requests require the header:

```
x-freepik-api-key: <key>
```

The key is stored in `.env` as `FREEPIK_API_KEY`. Read it with:

```bash
grep FREEPIK_API_KEY .env | cut -d= -f2
```

### Stock Search

```
GET https://api.freepik.com/v1/resources
```

Query parameters:

| Param | Type | Description |
|-------|------|-------------|
| `q` | string | Search query (required) |
| `page` | int | Page number (default 1) |
| `limit` | int | Results per page (default 20) |
| `order` | string | Sort order (e.g. `relevance`, `recent`) |
| `filters` | object | Additional filters (orientation, color, etc.) |

### Stock Download

```
GET https://api.freepik.com/v1/resources/{id}/download
```

Returns a download URL for the selected resource.

### AI Image Generation (Mystic)

**Create task:**

```
POST https://api.freepik.com/v1/ai/mystic
```

Request body:

```json
{
  "prompt": "descriptive prompt here",
  "model": "realism",
  "resolution": "2k",
  "aspect_ratio": "16:9"
}
```

Available models:

| Model | Best for |
|-------|----------|
| `realism` | Photographic content (default choice) |
| `super_real` | Ultra-realistic portraits and scenes |
| `editorial_portraits` | Professional headshots and editorial |
| `fluid` | Artistic, stylised imagery |
| `zen` | Calm, minimalist compositions |
| `flexible` | General-purpose generation |

**Poll task status:**

```
GET https://api.freepik.com/v1/ai/mystic/{task_id}
```

Poll every 3-5 seconds until status is `completed`. The response includes the generated image URL.

---

## Quota & Cost Awareness

| Operation | Cost |
|-----------|------|
| Stock search | Free API call |
| Stock download | 1 download credit per image |
| AI generation | Generation credits (more expensive than stock) |

Guidelines:

- Batch searches before generation to minimise API calls
- Check plan limits before bulk operations (e.g. sourcing images for an entire page)
- Prefer stock downloads over generation whenever possible
- If generating, combine similar needs into fewer prompts where appropriate

---

## File Naming & Optimisation

### Directory Structure

Save images to `public/images/{page-slug}/`:

```
public/images/home/
public/images/about/
public/images/programs-executive-internship/
public/images/resources-faq/
```

### Naming Convention

```
{section}-{descriptor}.{ext}
```

Examples:

- `hero-campus-diversity.webp`
- `testimonials-student-portrait.webp`
- `cta-perth-skyline.webp`
- `features-classroom-discussion.webp`

### Image Optimisation

After downloading or generating, convert to WebP and resize:

```bash
# Convert and resize to target dimensions
magick input.jpg -resize 1920x1080 -quality 80 output.webp

# Generate a smaller variant for mobile if needed
magick input.jpg -resize 768x432 -quality 80 output-mobile.webp

# Keep original format as fallback
magick input.jpg -resize 1920x1080 -quality 85 output.jpg
```

Always produce:

1. **WebP** (quality 80) as the primary format
2. **Original format fallback** (JPEG/PNG, quality 85) for browsers without WebP support

---

## Workflow per Page

### Step 1 — Identify image placeholders

Read the wireframe HTML from `DOCS/wireframes/{page}.html` and list every `[IMAGE: ...]` placeholder. Note the description, the section it belongs to, and the approximate dimensions needed.

### Step 2 — Plan search queries

For each placeholder, prepare 2-3 keyword variations. Consider:

- Direct description (e.g. "diverse university students studying")
- Broader terms (e.g. "college students group study")
- Location-specific (e.g. "Australian university campus")

### Step 3 — Search Freepik

Search for each image using the keyword variations. Review results for:

- Subject relevance
- Image quality and resolution
- Appropriate composition and aspect ratio
- Consistency with the site's visual tone

### Step 4 — Download or generate

- **Download** the best stock match for each placeholder
- **Generate** via Mystic only for images with no suitable stock results
- For generation, write a detailed prompt that specifies subject, setting, lighting, composition, and mood

### Step 5 — Optimise and save

- Resize to needed dimensions
- Convert to WebP (quality 80) + original format fallback
- Save to `public/images/{page-slug}/` using the naming convention
- Verify file sizes are reasonable (aim for under 200KB for WebP hero images)

### Step 6 — Update the Blade view

Replace placeholder references in the Blade template with the actual image paths:

```html
<img
    src="{{ asset('images/home/hero-campus-diversity.webp') }}"
    alt="Diverse group of international students on an Australian university campus"
    loading="lazy"
    width="1920"
    height="1080"
>
```

Use `loading="lazy"` for all images except the hero/above-the-fold image.

---

## Common Pitfalls

- Jumping straight to AI generation without searching stock first
- Using generic single-word searches instead of 2-3 keyword variations
- Forgetting to convert to WebP after download
- Saving images to the wrong directory or with inconsistent naming
- Missing alt text when updating Blade views
- Not checking generation credit balance before bulk AI generation
- Downloading oversized images without resizing (wastes bandwidth)
