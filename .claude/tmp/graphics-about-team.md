# About — Team Page Graphics

**Page**: `resources/views/pages/about/team.blade.php`
**Route**: `/about/team`

## Existing Images
- Hero: Light variant (no image)
- Visual context: `images/about-team/office-exterior.webp`, `images/about-team/team-meeting.webp`, `images/about-team/international-operations.webp`
- Team photos: 15 members in `images/team/` (WebP + PNG pairs)

## Graphic Opportunities

### 1. Hero Background Element
- **Location**: §1 Hero — light variant, no image
- **Type**: Decorative background illustration
- **Current state**: No image, light gradient
- **Recommended graphic**: Subtle decorative element — could be an abstract team/people illustration, world map dotted pattern suggesting global reach, or professional workspace silhouette
- **Stock search keywords**: "team silhouette abstract background", "global team network illustration", "people diversity abstract background", "professional team illustration subtle"
- **AI generation prompt**: "Subtle abstract illustration of diverse professional silhouettes connected by thin lines, suggesting a global team network. Very low opacity (10-15%), light blue tones on white background. Modern, clean, wide format."
- **Dimensions**: 1920x400px PNG with transparency

### 2. Visual Context Images (3-column grid)
- **Location**: Visual context section — 3 photos in a grid
- **Type**: Inline photos (3:2 aspect)
- **Current state**:
  - `office-exterior.webp` — "Blue Education Perth office exterior"
  - `team-meeting.webp` — "Professional team meeting"
  - `international-operations.webp` — "International operations network"
- **Recommended graphic**: AUDIT all three:
  - Image 1: Should be an actual photo of the Blue Education office if available, or a convincing Perth office exterior
  - Image 2: Team in a meeting — should feel genuine, not stock-y. Diverse team, collaborative
  - Image 3: International operations — could show a video conference or global network visual
- **Stock search keywords**:
  - Office: "modern office exterior perth", "professional office building entrance"
  - Meeting: "diverse team meeting round table office", "multicultural business team brainstorming"
  - International: "video conference global team", "international business meeting screen", "remote team collaboration"
- **AI generation prompt**:
  - Office: "Modern professional office building entrance in Perth, Australia. Clean facade, glass doors, professional signage area. Warm afternoon light, well-maintained landscaping. Approachable and established."
  - Meeting: "Diverse team of 5-6 professionals in a bright conference room. Round table, laptops open, whiteboard with plans. Natural light, engaged expressions, collaborative atmosphere. Mix of ages and ethnicities."
  - International: "Split screen video conference call showing team members from different countries. Modern laptop screen showing a grid of 6 faces from different ethnicities. Clean desk setup, professional backgrounds."
- **Dimensions**: 800x533px each (3:2)

### 3. Team Member Photos
- **Location**: §2 Australian Team + §3 International Operations — grid of team-member components
- **Type**: Portrait photos
- **Current state**: 15 team members have both .webp and .png versions at 400x400px
- **Recommended graphic**: AUDIT — verify all 15 photos are:
  - Consistent in framing (head and shoulders)
  - Similar background treatment
  - Good lighting and color balance
  - Professional quality
  - If any look noticeably different from the set, re-process them for consistency
- **Stock search keywords**: N/A — these are real team photos
- **AI generation prompt**: N/A — real team photos
- **Dimensions**: 400x400px (1:1 square)
- **Note**: These are real people — never replace with stock or AI photos

### 4. Team Member Fallback/Placeholder
- **Location**: Team grid, for any future team members added via Filament CMS without a photo
- **Type**: Placeholder avatar
- **Current state**: Unknown — the team-member component may not have a fallback
- **Recommended graphic**: A branded placeholder avatar showing a silhouette on the brand blue background, or initials display
- **Stock search keywords**: "professional avatar placeholder icon", "person silhouette avatar modern"
- **AI generation prompt**: "Professional avatar placeholder for a team member card. Soft blue gradient background (matching brand blue). Clean white person silhouette, head and shoulders. Rounded square frame, modern minimal design."
- **Dimensions**: 400x400px
