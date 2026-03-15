# Blog Index Page Graphics

**Page**: `resources/views/pages/blog/index.blade.php`
**Route**: `/blog`

## Existing Images
- Hero: `images/heroes/blog.webp`
- Visual break: `images/blog/writing-blogging.webp`, `images/blog/library-reading.webp`
- Blog card images: 5 generic blog images in `images/blog/` (blog-01 through blog-05)

## Graphic Opportunities

### 1. Hero Image
- **Location**: §1 Hero (left variant)
- **Type**: Hero banner
- **Current state**: `images/heroes/blog.webp` — "Person reading on a laptop"
- **Recommended graphic**: AUDIT — should convey learning/reading/resources. If replacing: student reading articles on a laptop in a bright, modern space.
- **Stock search keywords**: "person reading blog laptop modern", "student reading articles laptop library", "education blog reading content"
- **AI generation prompt**: "Young person reading an article on a laptop in a bright, modern space with natural light. Coffee cup nearby, focused and engaged. Education-themed content visible on screen. Warm, inviting atmosphere."
- **Dimensions**: 1920x640px

### 2. Visual Break Images
- **Location**: Between posts grid and newsletter — 2-column grid
- **Type**: Inline photos (3:2)
- **Current state**: `writing-blogging.webp` + `library-reading.webp`
- **Recommended graphic**: AUDIT both. Should reinforce content/learning theme.
- **Stock search keywords**: "person writing blog laptop", "modern university library students"
- **AI generation prompt**: N/A if existing passes audit
- **Dimensions**: 800x533px each

### 3. Default Blog Featured Images
- **Location**: Blog cards across the site (via `<x-blog-card>`)
- **Type**: Article thumbnail images
- **Current state**: 5 generic blog images (blog-01 through blog-05)
- **Recommended graphic**: AUDIT all 5 and consider creating 2-3 more generic/thematic blog images for variety. Categories in the blog are likely: Education, Migration, Career, Life in Australia, Student Tips.
- **Stock search keywords**:
  - Education: "education advice international students", "university campus study"
  - Migration: "australia immigration journey", "new life australia visa"
  - Career: "job interview professional young", "career fair networking"
  - Life: "student life australia city", "daily life international student"
- **AI generation prompt**: "Set of 5 diverse blog thumbnail images for an education consultancy: (1) Two students reviewing university options, (2) Passport and boarding pass with Australian flag, (3) Young professional at a job interview, (4) Students walking through a vibrant city street, (5) Laptop screen showing IELTS score results with a coffee cup nearby. All photorealistic, warm tones, 16:10 aspect."
- **Dimensions**: 800x500px each (16:10)

### 4. Category Filter Visual Enhancement
- **Location**: §3 Category Filter — pill-shaped text buttons
- **Type**: Small category icons
- **Current state**: Text-only filter buttons
- **Recommended graphic**: Small icons next to each category label in the filter bar
- **Stock search keywords**: "blog category icon set simple", "content category icons minimal"
- **AI generation prompt**: "Set of 5 minimal icons for blog categories: book (Education), globe (Migration), briefcase (Career), heart (Life in Australia), lightbulb (Student Tips). Single color, 16px, consistent stroke style."
- **Dimensions**: 16x16px SVG each
