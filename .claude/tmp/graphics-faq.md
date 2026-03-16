# FAQ Page Graphics

**Page**: `resources/views/pages/faq.blade.php`
**Route**: `/faq`

## Existing Images
- Hero: `images/heroes/faq.webp`
- Visual context: `images/faq/student-question.webp`, `images/faq/info-session.webp`

## Graphic Opportunities

### 1. Hero Image — `P2`
- **Location**: §1 Hero (centered variant)
- **Type**: Hero banner photograph
- **Current state**: `images/heroes/faq.webp` — "Help desk and information service"
- **Recommended graphic**: AUDIT — should convey "questions and answers" or "getting information" with DSLR-quality clarity and natural lighting. If replacing: a welcoming information desk scene, or diverse students in a Q&A session with a professional.
- **Stock search keywords**: "information desk help service", "student questions advisor session", "faq information session professional"
- **AI generation prompt**: "Information session scene in a bright modern office. Professional advisor at a desk answering questions from two international students. DSLR quality, shallow depth of field, natural lighting. Warm, approachable atmosphere, helpful and professional tone."
- **Dimensions**: 1920x640px

### 2. Visual Context Images — `P2`
- **Location**: Between hero and FAQ tabs — 2-column grid
- **Type**: Inline photographs (3:2)
- **Current state**: `faq/student-question.webp` + `faq/info-session.webp`
- **Recommended graphic**: AUDIT both for DSLR-quality clarity, natural lighting, and authentic feel. Should feel relatable — students seeking answers, real candid moments.
- **Stock search keywords**: "student asking question classroom", "education information presentation seminar"
- **AI generation prompt**: N/A if existing images pass audit
- **Dimensions**: 800x533px each

### 3. Tab Category Icons — `P3`
- **Location**: §2 FAQ Tabs — 5 filter buttons (Education, Migration, Career, Support, Fees)
- **Type**: Small SVG icons for tab buttons
- **Current state**: Text-only tab buttons — functional as-is
- **Recommended graphic**: At this size (16x16px), clean SVG icons are appropriate — see style guide in graphics-general.md. Small inline icons next to each tab label could improve visual scanning and UX:
  - Education: graduation cap
  - Migration: globe with airplane
  - Career: briefcase
  - Support: heart with shield
  - Fees: dollar sign
- **Stock search keywords**: N/A — Heroicons or custom SVG icon set
- **AI generation prompt**: N/A — SVG icons at this size should not be photographic
- **Dimensions**: 16x16px SVG each
