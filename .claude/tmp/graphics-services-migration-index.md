# Migration & Visas Index Page Graphics

**Page**: `resources/views/pages/services/migration/index.blade.php`
**Route**: `/services/migration`

## Existing Images
- Hero: `images/heroes/services-migration.webp`
- Visual break: `images/services-migration/visa-consultation.webp`, `migration-pathway.webp`
- Credential logos: 3 SVGs (Migration Alliance, MIA, QEAC)

## Graphic Opportunities

### 1. Hero Image — P2
- **Location**: §1 Hero (default centered variant)
- **Type**: Hero banner
- **Current state**: `images/heroes/services-migration.webp` — "Australian city skyline at dusk"
- **Recommended graphic**: AUDIT — a city skyline is okay but doesn't directly communicate "migration/visa." Consider replacing with: a passport with Australian visa stamp, or a diverse family arriving in Australia, or an advisor reviewing documents with a client. DSLR-quality photography with natural lighting preferred.
- **Stock search keywords**: "australia visa application passport", "migration advisor client meeting", "family arriving australia airport", "australian skyline passport overlay"
- **AI generation prompt**: "DSLR quality, shallow depth of field, natural lighting. Professional migration advisor reviewing visa documents with a client across a modern desk. Australian flag subtly visible in background. Warm professional atmosphere, documents and laptop on table. Trust and expertise conveyed. Photorealistic, shot on Canon 5D Mark IV."
- **Dimensions**: 1920x640px

### 2. Migration Pathway Stage Icons — P3
- **Location**: §2 The Migration Pathway — 4-stage visual pathway
- **Type**: Stage icons (currently using Heroicons in circles)
- **Current state**: Heroicon circles (book-open, check-circle, briefcase, home) in primary-100 bg
- **Recommended graphic**: At 64px, SVG icons per style guide are appropriate and complement the photographic style used elsewhere on the page. The current Heroicons work but are generic. Consider custom SVG icon versions with slightly more detail:
  - Study: Student at desk with book
  - Graduate: Mortarboard cap
  - Work: Professional at laptop
  - Settle: House with family silhouette
- **Note**: At this size, circular-cropped DSLR photos could work as an upgrade if a more photographic feel is desired — each stage depicted with a real photograph cropped into a 64px circle.
- **Dimensions**: 64x64px SVG each

### 3. Visual Break Images — P2
- **Location**: Between §3 and §4 — 2-column grid
- **Type**: Inline photos (3:2)
- **Current state**: `visa-consultation.webp` + `migration-pathway.webp`
- **Recommended graphic**: AUDIT both — ensure DSLR-realistic photography quality:
  - Consultation: Should show a genuine migration advisor meeting, natural lighting, shallow depth of field on the advisor-client interaction
  - Pathway: Should visualize the journey/transition concept with authentic photography
- **Stock search keywords**: "migration advisor consultation office", "new life australia journey concept"
- **AI generation prompt**: N/A if existing passes audit
- **Dimensions**: 800x533px each

### 4. Credential Grid Enhancement — P3
- **Location**: §4 Why Trust Us — 4-card credential grid
- **Type**: Logo cards
- **Current state**: 3 SVG logos + 1 "28yr" text card
- **Recommended graphic**: The "28yr" card is text-only — could add a small anniversary seal or badge to make it feel like a credential card too. This is a polish item that adds visual consistency to the credential grid.
- **Stock search keywords**: "years experience badge professional", "anniversary seal corporate"
- **AI generation prompt**: "Professional anniversary badge showing '28 Years'. Circular seal design with laurel wreath, gold and navy tones. 'Since 1998' subtitle. Elegant, prestigious, corporate. Clean vector style suitable for credential display."
- **Dimensions**: 100x100px PNG with transparency
