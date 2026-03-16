# About Page Graphics

**Page**: `resources/views/pages/about/index.blade.php`
**Route**: `/about`

## Existing Images

- Hero: `images/heroes/about.webp`
- Our Story: `images/home/history-perth-office.webp` (shared with home)
- Why Choose: `images/about/education-consulting.webp`, `images/about/perth-office.webp`, `images/about/student-support.webp`
- Credentials: 4 SVG logos in `images/credentials/`

---

## Graphic Opportunities

### 1. Hero Image — `P2`

- **Location**: S1 Hero (left-aligned variant, 440px height)
- **Type**: Hero banner photograph
- **Current state**: `images/heroes/about.webp` — "Professional team collaborating in a modern office environment"
- **Recommended graphic**: AUDIT — verify quality. Should show professional team in a modern, welcoming office with DSLR-quality clarity and natural lighting. If replacing: diverse professional team in a bright modern office, collaborative feel, Perth skyline through windows.
- **Stock search keywords**: "professional team modern office collaboration", "diverse business team office meeting", "corporate team planning multicultural"
- **AI generation prompt**: "Professional diverse team of 4-5 people collaborating around a meeting table in a modern bright office. DSLR quality, shallow depth of field, natural lighting. Mix of ethnicities, warm professional atmosphere, casual but professional dress. Laptops and documents on table. City view through large windows."
- **Dimensions**: 1920x900px

---

### 2. Our Story Image — `P2`

- **Location**: S2 Our Story — content-split component (image right, 40% width)
- **Type**: Inline photograph
- **Current state**: `images/home/history-perth-office.webp` — shared with homepage
- **Recommended graphic**: AUDIT — should this be a unique image for the About page? Consider: a heritage/nostalgic shot of Perth or a "since 1998" archival feel. The sharing with homepage dilutes impact.
- **Stock search keywords**: "perth office heritage building", "professional office exterior perth", "education office established", "vintage modern office contrast"
- **AI generation prompt**: "Professional education office exterior in Perth, Western Australia. Charming heritage building with modern touches. A brass nameplate reading 'Blue Education — Est. 1998'. DSLR quality, shallow depth of field, natural lighting. Warm golden hour light, established professional feel."
- **Dimensions**: 800x600px (4:3 aspect)

---

### 3. Values Section Custom Icons — `P3`

- **Location**: S3 Our Values — 5 value cards (Client-Centric, Honest, Quality-Driven, Professionally Qualified, Personalised)
- **Type**: SVG icons
- **Current state**: Using Heroicons (identification, check-circle, star, shield-check, identification) — note "identification" is duplicated
- **Recommended graphic**: At this size (48x48px), clean SVG icons are appropriate — see style guide in graphics-general.md. Heroicons are fine functionally; the main issue is the duplicated "identification" icon. Consider swapping to more visually distinctive Heroicons:
  - Client-Centric: `user-circle` or `user-group`
  - Honest: `hand-raised` or `eye`
  - Quality-Driven: `sparkles` or `trophy`
  - Professionally Qualified: `academic-cap` or `shield-check`
  - Personalised: `finger-print` or `puzzle-piece`
- **Stock search keywords**: N/A — Heroicons or custom SVG icon set
- **AI generation prompt**: N/A — SVG icons at this size should not be photographic
- **Dimensions**: 48x48px each, SVG preferred

---

### 4. "Why Choose" Section Images — `P2`

- **Location**: S5 Why Choose Blue Education — 3 rows with images
- **Type**: Inline photographs (40% width, 3:2 aspect)
- **Current state**:
  - Row 1: `about/education-consulting.webp` — "Education consultant reviewing options with a client in front of a world map"
  - Row 2: `about/perth-office.webp` — "Diverse professional team collaborating in a modern office environment"
  - Row 3: `about/student-support.webp` — "Mentor guiding a student through study materials at a desk"
- **Recommended graphic**: AUDIT all three photographs for quality and relevance. These are critical for the trust section. Each should have DSLR-quality clarity, natural lighting, and authentic feel:
  - Row 1 (One provider): Show a single advisor coordinating multiple domains — laptop with documents, warm
  - Row 2 (Perth HQ): Show an actual professional office in Perth — or a world map with Perth marked, representing global reach
  - Row 3 (Enrolment to PR): Show a graduation photo or journey completion moment
- **Stock search keywords**:
  - Row 1: "education consultant client meeting", "advisor laptop documents world map"
  - Row 2: "professional office perth australia", "world map business global team"
  - Row 3: "graduation celebration mentor", "student journey success pathway"
- **AI generation prompt**:
  - Row 1: "Professional education advisor and young international client reviewing a holistic plan on a laptop. World map visible on wall behind. DSLR quality, shallow depth of field, natural lighting. Modern office, trustworthy setting."
  - Row 2: "Modern professional office interior in a Perth CBD building. Glass windows with Perth city view. DSLR quality, shallow depth of field, natural lighting. Multicultural team visible in background. Professional and welcoming."
  - Row 3: "Young woman in graduation cap and gown hugging an advisor/mentor outside an Australian university. DSLR quality, shallow depth of field, natural lighting. Joyful moment, sunny day, modern university building in background."
- **Dimensions**: 800x533px each (3:2)

---

### 5. Credentials Section Enhancement — `P2`

- **Location**: S6 Professional Credentials — 4 credential cards
- **Type**: Logo/badge audit
- **Current state**: 4 SVG logos (QEAC, Migration Alliance, MIA, Australian Bar Association)
- **Recommended graphic**: AUDIT — verify SVG quality, consistent sizing, and visual weight. All 4 should feel like they belong together. These are official logos and complement the photographic style of the rest of the page.
- **Stock search keywords**: N/A — official logos
- **AI generation prompt**: N/A — DO NOT AI-generate
- **Dimensions**: Consistent height (~56px rendered)
- **Note**: If any logos look low quality, source higher quality versions from official websites
