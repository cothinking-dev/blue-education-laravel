# Contact Page Graphics

**Page**: `resources/views/pages/contact.blade.php`
**Route**: `/contact`

## Existing Images
- Hero: Light variant (no image)
- Visual context: `images/contact/office-reception.webp`, `images/contact/consultation-room.webp`, `images/contact/perth-cbd.webp`

## Graphic Opportunities

### 1. Hero Background Element
- **Location**: §1 Hero — light variant, no image
- **Type**: Decorative background
- **Current state**: No image, light gradient
- **Recommended graphic**: A subtle decorative element — abstract communication icons (phone, envelope, chat bubble) floating at low opacity, or a Perth landmark silhouette
- **Stock search keywords**: "contact page background abstract", "communication icons pattern subtle", "get in touch abstract background"
- **AI generation prompt**: "Subtle abstract background for a contact page hero section. Floating communication icons (envelope, phone handset, chat bubble, map pin) at very low opacity (10%). Light blue and white tones. Clean, minimal, professional."
- **Dimensions**: 1920x400px PNG with transparency

### 2. Contact Method Card Icons
- **Location**: §2 Contact Methods — 3 cards (Phone, Email, Office)
- **Type**: Illustrated icons
- **Current state**: Using Heroicons (phone, envelope, map-pin) — functional but generic
- **Recommended graphic**: Consider upgrading to custom illustrated versions of these icons that match the rest of the site's visual language
- **Stock search keywords**: "phone email location icon set illustrated", "contact icons modern flat colorful", "communication icon set illustration"
- **AI generation prompt**: "Set of 3 contact icons: (1) phone handset with ringing lines, (2) open envelope with letter peeking out, (3) location pin on a small map. Consistent soft blue gradient style, rounded corners, modern flat illustration. Clean on transparent background."
- **Dimensions**: 48x48px SVG each

### 3. Visual Context Images (3-column grid)
- **Location**: Between §3 and §4 — 3 photos
- **Type**: Inline photos (3:2 aspect)
- **Current state**:
  - `contact/office-reception.webp` — "Blue Education office reception area"
  - `contact/consultation-room.webp` — "Professional consultation room"
  - `contact/perth-cbd.webp` — "Perth CBD street view"
- **Recommended graphic**: AUDIT all three:
  - Reception: Should look warm, welcoming, professional — a real-looking reception desk
  - Consultation: Private meeting room, comfortable, professional
  - Perth CBD: Street-level photo near 33 Barrack St ideally, or Barrack St Perth generally
- **Stock search keywords**:
  - Reception: "modern office reception area welcoming", "professional lobby reception desk"
  - Consultation: "private meeting room professional office", "consultation room modern cozy"
  - Perth CBD: "perth barrack street", "perth cbd street view walking", "perth city center street"
- **AI generation prompt**:
  - Reception: "Welcoming professional office reception area. Clean white desk, indoor plants, modern decor, warm lighting. A receptionist smiling at a visitor. Corporate but approachable feel."
  - Consultation: "Private consultation meeting room in a modern office. Two comfortable chairs across a small table. Natural light from a window, warm tones, professional yet relaxed atmosphere."
  - Perth CBD: "Street view of Barrack Street in Perth CBD, Western Australia. Historic and modern buildings mixed, pedestrians walking, clear blue sky. Daytime, warm and inviting city scene."
- **Dimensions**: 800x533px each (3:2)

### 4. Google Maps Thumbnail/Fallback
- **Location**: §3 Contact Form — sidebar with Google Maps iframe
- **Type**: Map image fallback
- **Current state**: Google Maps iframe embed for 33 Barrack St
- **Recommended graphic**: A styled static map image as a loading placeholder or as a noscript fallback for the Google Maps iframe
- **Stock search keywords**: "perth map illustration", "custom map perth cbd stylized"
- **AI generation prompt**: "Stylized minimal map of Perth CBD area highlighting Barrack Street. Clean cartographic style, blue water (Swan River), light gray streets, subtle building footprints. Small red pin marker at 33 Barrack St. Modern flat design, professional."
- **Dimensions**: 600x260px

### 5. Book a Consultation Illustration
- **Location**: §4 Book a Consultation — bordered box with checklist
- **Type**: Decorative accent illustration
- **Current state**: No image — text only with checkmark list
- **Recommended graphic**: A small illustration next to or behind the consultation booking box — could be a calendar, video call, or handshake illustration
- **Stock search keywords**: "book appointment illustration modern", "consultation booking illustration", "schedule meeting illustration flat"
- **AI generation prompt**: "Flat illustration of a calendar with a highlighted booking slot and a small video camera icon, suggesting online or in-person consultation booking. Soft blue and white tones, clean modern style, transparent background."
- **Dimensions**: 300x300px PNG with transparency
