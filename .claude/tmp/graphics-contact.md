# Contact Page Graphics

**Page**: `resources/views/pages/contact.blade.php`
**Route**: `/contact`

## Existing Images
- Hero: Light variant (no image)
- Visual context: `images/contact/office-reception.webp`, `images/contact/consultation-room.webp`, `images/contact/perth-cbd.webp`

## Graphic Opportunities

### 1. Hero Background Element — `P3`
- **Location**: §1 Hero — light variant, no image
- **Type**: Decorative background accent
- **Current state**: No image, light gradient
- **Recommended graphic**: A subtle decorative element — abstract communication icons (phone, envelope, chat bubble) floating at low opacity, or a Perth landmark silhouette. At this size and purpose, a clean SVG pattern or low-opacity PNG overlay is appropriate — see style guide in graphics-general.md
- **Stock search keywords**: "contact page background abstract", "communication icons pattern subtle", "get in touch abstract background"
- **AI generation prompt**: "Subtle abstract background for a contact page hero section. Floating communication icons (envelope, phone handset, chat bubble, map pin) at very low opacity (10%). Light blue and white tones. Clean, professional."
- **Dimensions**: 1920x400px PNG with transparency

### 2. Contact Method Card Icons — `P3`
- **Location**: §2 Contact Methods — 3 cards (Phone, Email, Office)
- **Type**: SVG icons
- **Current state**: Using Heroicons (phone, envelope, map-pin) — functional and appropriate at this size
- **Recommended graphic**: At this size (48x48px), clean SVG icons are appropriate — see style guide in graphics-general.md. Heroicons are fine here. Consider upgrading only if a custom icon set is developed for the whole site.
- **Stock search keywords**: N/A — Heroicons or custom SVG icon set
- **AI generation prompt**: N/A — SVG icons at this size should not be photographic
- **Dimensions**: 48x48px SVG each

### 3. Visual Context Images (3-column grid) — `P2`
- **Location**: Between §3 and §4 — 3 photos
- **Type**: Inline photographs (3:2 aspect)
- **Current state**:
  - `contact/office-reception.webp` — "Blue Education office reception area"
  - `contact/consultation-room.webp` — "Professional consultation room"
  - `contact/perth-cbd.webp` — "Perth CBD street view"
- **Recommended graphic**: AUDIT all three for DSLR-quality clarity, natural lighting, and authentic feel:
  - Reception: Should look warm, welcoming, professional — a real-looking reception desk
  - Consultation: Private meeting room, comfortable, professional
  - Perth CBD: Street-level photo near 33 Barrack St ideally, or Barrack St Perth generally
- **Stock search keywords**:
  - Reception: "modern office reception area welcoming", "professional lobby reception desk"
  - Consultation: "private meeting room professional office", "consultation room modern cozy"
  - Perth CBD: "perth barrack street", "perth cbd street view walking", "perth city center street"
- **AI generation prompt**:
  - Reception: "Welcoming professional office reception area. Clean white desk, indoor plants, modern decor. DSLR quality, shallow depth of field, natural lighting. A receptionist smiling at a visitor. Corporate but approachable feel."
  - Consultation: "Private consultation meeting room in a modern office. Two comfortable chairs across a small table. DSLR quality, shallow depth of field, natural lighting from a window. Warm tones, professional yet relaxed atmosphere."
  - Perth CBD: "Street view of Barrack Street in Perth CBD, Western Australia. Historic and modern buildings mixed, pedestrians walking, clear blue sky. DSLR quality, shallow depth of field, natural lighting. Daytime, warm and inviting city scene."
- **Dimensions**: 800x533px each (3:2)

### 4. Google Maps Thumbnail/Fallback — `P3`
- **Location**: §3 Contact Form — sidebar with Google Maps iframe
- **Type**: Map image fallback
- **Current state**: Google Maps iframe embed for 33 Barrack St — functional as-is
- **Recommended graphic**: A styled static map image as a loading placeholder or as a noscript fallback for the Google Maps iframe. Note: a clean, well-designed map graphic is the correct format here — this is a data visualisation, not a photographic subject.
- **Stock search keywords**: "perth map stylized", "custom map perth cbd"
- **AI generation prompt**: "Stylized map of Perth CBD area highlighting Barrack Street. Clean cartographic style, blue water (Swan River), light gray streets, subtle building footprints. Small red pin marker at 33 Barrack St. Modern clean design, professional."
- **Dimensions**: 600x260px

### 5. Book a Consultation Accent — `P3`
- **Location**: §4 Book a Consultation — bordered box with checklist
- **Type**: Decorative accent graphic
- **Current state**: No image — text only with checkmark list
- **Recommended graphic**: A small accent graphic next to or behind the consultation booking box — could be a calendar or booking visual. At this size (300x300px), a clean SVG icon or low-detail graphic is appropriate — see style guide in graphics-general.md
- **Stock search keywords**: "book appointment graphic modern", "consultation booking calendar", "schedule meeting graphic"
- **AI generation prompt**: "Clean graphic of a calendar with a highlighted booking slot and a small video camera icon, suggesting online or in-person consultation booking. Soft blue and white tones, modern style, transparent background."
- **Dimensions**: 300x300px PNG with transparency
