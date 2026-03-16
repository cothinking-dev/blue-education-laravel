# Blog Index Page Graphics

**Page**: `resources/views/pages/blog/index.blade.php`
**Route**: `/blog`

## Existing Images
- Hero: `images/heroes/blog.webp`
- Visual break: `images/blog/writing-blogging.webp`, `images/blog/library-reading.webp`
- Blog card images: 5 generic blog images in `images/blog/` (blog-01 through blog-05)

## Graphic Opportunities

### 1. Hero Image — `P2`
- **Location**: §1 Hero (left variant)
- **Type**: Hero banner
- **Current state**: `images/heroes/blog.webp` — "Person reading on a laptop"
- **Recommended graphic**: AUDIT — should convey learning/reading/resources with DSLR-realistic quality. If replacing: a photograph of a student reading articles on a laptop in a bright, modern space, shot with shallow depth of field and natural lighting.
- **Stock search keywords**: "person reading blog laptop modern", "student reading articles laptop library", "education blog reading content"
- **AI generation prompt**: "DSLR quality photograph of a young person reading an article on a laptop in a bright, modern space with natural light streaming through a window. Coffee cup nearby, focused and engaged. Shallow depth of field with the person in sharp focus and the background softly blurred. Warm, inviting atmosphere."
- **Dimensions**: 1920x640px

### 2. Visual Break Images — `P2`
- **Location**: Between posts grid and newsletter — 2-column grid
- **Type**: Inline photos (3:2)
- **Current state**: `writing-blogging.webp` + `library-reading.webp`
- **Recommended graphic**: AUDIT both — should reinforce content/learning theme. Check for DSLR-realistic quality: sharp subject, natural lighting, shallow depth of field. Replace any that look generic or lack photographic depth.
- **Stock search keywords**: "person writing blog laptop", "modern university library students"
- **AI generation prompt**: N/A if existing passes audit — replacement images should match DSLR quality, shallow depth of field, natural lighting standard.
- **Dimensions**: 800x533px each

### 3. Default Blog Featured Images — `P2`
- **Location**: Blog cards across the site (via `<x-blog-card>`)
- **Type**: Article thumbnail photographs
- **Current state**: 5 generic blog images (blog-01 through blog-05)
- **Recommended graphic**: AUDIT all 5 for DSLR-realistic quality and variety, and consider creating 2-3 more thematic photographs for visual diversity. Categories in the blog are likely: Education, Migration, Career, Life in Australia, Student Tips. Each thumbnail should feel like an authentic candid photograph, not a stock composite.
- **Stock search keywords**:
  - Education: "education advice international students", "university campus study"
  - Migration: "australia immigration journey", "new life australia visa"
  - Career: "job interview professional young", "career fair networking"
  - Life: "student life australia city", "daily life international student"
- **AI generation prompt**: "Set of 5 diverse DSLR quality blog thumbnail photographs for an education consultancy: (1) Two students reviewing university options at a desk, shallow depth of field, (2) Passport and boarding pass with Australian flag, natural lighting close-up, (3) Young professional at a job interview, candid shallow depth of field portrait, (4) Students walking through a vibrant city street, natural street photography style, (5) Laptop screen showing IELTS score results with a coffee cup nearby, shallow depth of field tabletop shot. All photorealistic with natural lighting, warm tones, 16:10 aspect."
- **Dimensions**: 800x500px each (16:10)

### 4. Category Filter Icons — `P3`
- **Location**: §3 Category Filter — pill-shaped text buttons
- **Type**: Small SVG icons (complement the photographic style of the page)
- **Current state**: Text-only filter buttons (functional as-is)
- **Recommended graphic**: Small SVG icons next to each category label in the filter bar. Clean line-weight icons in brand blue that sit alongside the site's photographic content without clashing.
- **Stock search keywords**: "blog category icon set line style", "content category icons minimal stroke"
- **AI generation prompt**: N/A — source or hand-craft as SVG icons. Use a consistent 1.5px stroke weight in primary-600 blue, no fill, to complement the DSLR-quality photography used throughout the page.
- **Dimensions**: 16x16px SVG each
