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

## Core Workflow

**ALWAYS search stock first.** Stock is cheaper, faster, and more natural. Only fall back to AI generation when stock fails.

### Phase 1 — Stock Search (3 queries)

1. Write **3 different keyword queries** for the image needed. Vary phrasing, specificity, and angle. Example for a hero image:
   - `"East Asian students walking Australian university campus"`
   - `"Asian college students outdoor campus sunny"`
   - `"international students university grounds Perth"`
2. Run all 3 searches via the Freepik API (photos only, landscape by default)
3. Collect the top results from each search

### Phase 2 — Evaluate Stock Results

Score each candidate against these criteria:

| Criterion | What to check |
|-----------|---------------|
| **Subject relevance** | Does it match the section's purpose? |
| **Target audience** | East Asian subjects front-and-center (primary requirement) |
| **Quality** | Professional, high-res, no obvious stock-photo cheesiness |
| **Composition** | Fits the layout (hero = wide, card = 4:3-ish, etc.) |
| **Tone** | Warm, optimistic, genuine — consistent with Blue Education brand |

A candidate **passes** if it meets all 5 criteria. If 2+ candidates pass, note the best fit.

### Phase 3 — Present to User

Show the user the candidates that passed (or best near-misses if none passed), including:

- Thumbnail/preview URL from the API response (`data[].image.source.url`)
- Resource ID
- Brief note on why it fits or doesn't

**Wait for user approval before downloading.**

### Phase 4 — AI Generation Fallback

Only if **no stock result passes** after all 3 searches:

1. Write **3 different prompts** for Mystic generation. Each prompt must:
   - Describe the exact scene, subjects, setting, and lighting
   - Include photography cues: "professional photography, natural lighting, shot on Canon EOS R5"
   - Specify East Asian subjects when people are in the scene
2. Generate all 3 via the Mystic API using `super_real` model
3. Poll for completion
4. Evaluate the 3 generated images against the same criteria
5. Present passing candidates to user with preview URLs
6. **Wait for user approval before downloading**

### Phase 5 — Download, Optimise & Save

After user approves an image:

1. Download the approved image
2. Convert to WebP (quality 80) + original format fallback (quality 85)
3. Resize to needed dimensions (context-dependent)
4. Save to `public/images/{page-slug}/` with proper naming
5. Update the Blade template with the image path

---

## Freepik API Reference

### Authentication

All requests require:

```
x-freepik-api-key: <key>
```

Read the key:

```bash
grep FREEPIK_API_KEY .env | cut -d= -f2
```

### Stock Search

```
GET https://api.freepik.com/v1/resources
```

| Param | Type | Description |
|-------|------|-------------|
| `term` | string | Search query (required) |
| `page` | int | Page number (default 1) |
| `limit` | int | Results per page (max 200) |
| `order` | string | `relevance` (default), `recent` |
| `filters[content_type][photo]` | 0/1 | Photos only — **always set to 1** |
| `filters[orientation][landscape]` | 0/1 | Landscape — **default 1 unless specified** |
| `filters[orientation][portrait]` | 0/1 | Portrait |
| `filters[orientation][square]` | 0/1 | Square |
| `filters[people][ethnicity]` | string | `east-asian`, `south-asian`, `black`, `white`, etc. |
| `filters[people][age]` | string | `young-adult`, `adult`, `teen`, etc. |
| `filters[people][include]` | 0/1 | Must include people |
| `filters[ai-generated][excluded]` | 0/1 | Exclude AI-generated stock |

Example curl:

```bash
curl -s "https://api.freepik.com/v1/resources?term=east+asian+students+university&filters[content_type][photo]=1&filters[orientation][landscape]=1&limit=10&order=relevance" \
  -H "x-freepik-api-key: $KEY"
```

Response shape (key fields):

```json
{
  "data": [
    {
      "id": 15667327,
      "title": "...",
      "image": {
        "type": "photo",
        "orientation": "horizontal",
        "source": {
          "url": "https://img.freepik.com/free-photo/...",
          "size": "740x640"
        }
      }
    }
  ],
  "meta": { "current_page": 1, "total": 50 }
}
```

- `data[].id` — resource ID (for download)
- `data[].image.source.url` — thumbnail/preview URL (show to user)
- `data[].title` — description

### Stock Download

```
GET https://api.freepik.com/v1/resources/{id}/download
```

| Param | Type | Description |
|-------|------|-------------|
| `image_size` | string | `small` (1000px), `medium` (1500px), `large` (2000px), `original` |

Response:

```json
{
  "data": {
    "url": "https://downloadscdn5.freepik.com/...",
    "filename": "image.zip"
  }
}
```

Download the file from `data.url`. May be `.zip` or `.jpg`.

### AI Generation (Mystic)

**Create task:**

```
POST https://api.freepik.com/v1/ai/mystic
```

Request body:

```json
{
  "prompt": "Professional photo of East Asian university students ..., natural lighting, Canon EOS R5",
  "model": "super_real",
  "engine": "magnific_sharpy",
  "resolution": "2k",
  "aspect_ratio": "widescreen_16_9",
  "creative_detailing": 33,
  "hdr": 25,
  "filter_nsfw": true
}
```

**Models for photorealism (in order of preference):**

| Model | Use case |
|-------|----------|
| `super_real` | **Default.** Most camera-like for scenes, environments, groups |
| `editorial_portraits` | Close-up portraits and headshots |
| `realism` | Fallback if `super_real` looks too processed |

**Key settings for realism:**

- `engine`: `magnific_sharpy` — sharpest, most detailed
- `hdr`: `25` — lower = more natural, less HDR glow
- `creative_detailing`: `33` — moderate detail without artifacts

**Aspect ratios:** Use whatever fits the layout context. Common options:

- `widescreen_16_9` — heroes, banners
- `classic_4_3` — cards, content images
- `standard_3_2` — general photography
- `square_1_1` — profile images, thumbnails

Response:

```json
{
  "data": {
    "task_id": "046b6c7f-...",
    "status": "CREATED",
    "generated": []
  }
}
```

**Poll task status:**

```
GET https://api.freepik.com/v1/ai/mystic/{task_id}
```

Poll every 3-5 seconds until `status` is `COMPLETED`. Timeout at 120 seconds.

Completed response:

```json
{
  "data": {
    "task_id": "046b6c7f-...",
    "status": "COMPLETED",
    "generated": [
      "https://ai-statics.freepik.com/image_1.jpg",
      "https://ai-statics.freepik.com/image_2.jpg"
    ]
  }
}
```

---

## File Naming & Optimisation

### Directory Structure

```
public/images/{page-slug}/
```

Examples: `public/images/home/`, `public/images/about/`, `public/images/programs-executive-internship/`

### Naming Convention

```
{section}-{descriptor}.{ext}
```

Examples: `hero-campus-diversity.webp`, `cta-perth-skyline.webp`

### Conversion

```bash
# WebP (primary)
magick input.jpg -resize 1920x1080 -quality 80 output.webp

# Original format fallback
magick input.jpg -resize 1920x1080 -quality 85 output.jpg
```

Always produce both WebP and a fallback format. Aim for under 200KB for hero WebP images.

---

## Quota & Cost Awareness

| Operation | Cost |
|-----------|------|
| Stock search | Free |
| Stock download | 1 download credit |
| AI generation | Generation credits (more expensive) |

- Batch searches before generation to minimise API calls
- Prefer stock downloads over generation whenever possible
- Check credit balance before bulk operations

---

## Common Pitfalls

- Jumping to AI generation without exhausting stock search
- Using a single keyword query instead of 3 variations
- Downloading without user approval
- Forgetting to convert to WebP after download
- Missing alt text when updating Blade views
- Using `realism` model when `super_real` produces better camera-like results
- Setting `hdr` too high (makes images look artificial)
