# University Degrees Page Graphics

**Page**: `resources/views/pages/services/education/degrees.blade.php`
**Route**: `/services/education/degrees`

## Existing Images
- Hero: `images/heroes/services-education-degrees.webp`
- Why study: `images/services-education-degrees/global-recognition.webp`, `industry-connections.webp`, `post-study-work.webp`
- University logos: via `images/partners/`

## Graphic Opportunities

### 1. Hero Image — `P2`
- **Location**: §1 Hero (default centered variant)
- **Type**: Hero banner
- **Current state**: `images/heroes/services-education-degrees.webp` — "University graduation ceremony with students in caps and gowns"
- **Recommended graphic**: AUDIT — graduation imagery is perfect for this page. Should be high quality, diverse, and DSLR-realistic.
- **Stock search keywords**: "university graduation ceremony diverse students", "graduation cap gown celebration", "australian university graduation day"
- **AI generation prompt**: N/A if existing passes audit. If replacing: "DSLR quality, shallow depth of field, natural lighting. Diverse university graduates celebrating at a graduation ceremony. Cap and gown, warm sunlight, joyful expressions. Sharp focus on foreground graduates with soft bokeh on the crowd behind."
- **Dimensions**: 1920x640px

### 2. Degree-Level Accent Images — `P3`
- **Location**: §2 Programs — 3 cards (Bachelor, Master, Doctoral)
- **Type**: Card accent images
- **Current state**: Text-only cards with key stats
- **Recommended graphic**: At 80px, consider small circular-cropped DSLR close-ups: open textbook (Bachelor), lab microscope (Master), leather-bound thesis with seal (Doctoral). These maintain the photographic style even at small sizes.
- **Stock search keywords**: "open textbook close up study", "lab microscope scientific research", "leather bound thesis dissertation seal"
- **AI generation prompt**:
  - Bachelor: "DSLR quality, shallow depth of field, natural lighting. Extreme close-up of an open textbook with highlighted passages, soft warm light. Intended for circular crop at 80px."
  - Master: "DSLR quality, shallow depth of field, natural lighting. Close-up of a lab microscope with soft bokeh of a research laboratory behind. Intended for circular crop at 80px."
  - Doctoral: "DSLR quality, shallow depth of field, natural lighting. Close-up of a leather-bound thesis with an embossed university seal, warm desk lamp light. Intended for circular crop at 80px."
- **Dimensions**: 160x160px each (for 2x retina, displayed at 80x80px in circular crop)

### 3. Why Study Images — `P2`
- **Location**: §4 Why Study in WA — 3 alternating rows
- **Type**: Inline photos (40% width, 3:2)
- **Current state**:
  - `global-recognition.webp` — "Diverse group of international students celebrating at a university graduation ceremony"
  - `industry-connections.webp` — "Young professionals networking and discussing ideas in a modern office setting"
  - `post-study-work.webp` — "Young professional woman working confidently on a laptop in a modern office"
- **Recommended graphic**: AUDIT all 3 for DSLR-realistic quality:
  - Global recognition: Should show diverse graduates, internationally flavored, natural lighting
  - Industry connections: Should show networking/mentoring with shallow depth of field, not just chatting
  - Post-study work: Should show a graduate confidently working in Australia, natural office light
- **Stock search keywords**:
  - Recognition: "diverse graduates university ceremony celebration"
  - Industry: "professional networking event young graduate", "industry mentoring session"
  - Work: "young professional confident working laptop office"
- **AI generation prompt**: N/A if existing pass audit. If replacing any:
  - Recognition: "DSLR quality, shallow depth of field, natural lighting. Diverse international graduates celebrating together outside a university. Warm sunlight, confetti, genuine joy."
  - Industry: "DSLR quality, shallow depth of field, natural lighting. Young graduate being mentored by a senior professional at a networking event. Modern venue, warm ambient light, sharp focus on the pair with soft bokeh crowd behind."
  - Work: "DSLR quality, shallow depth of field, natural lighting. Young professional woman working confidently on a laptop in a modern Perth office. Natural window light, clean desk, soft background bokeh."
- **Dimensions**: 800x533px each
