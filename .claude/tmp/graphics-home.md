# Home Page Graphics

**Page**: `resources/views/pages/home.blade.php`
**Route**: `/`

## Existing Images

- Hero: `images/heroes/home.webp`
- Content-split: `images/home/student-consultation.webp`
- Partner logos: 5 logos in `images/partners/`

---

## Graphic Opportunities

### 1. Hero Image

- **Location**: S1 Hero (full-width, overlay, 460px height)
- **Type**: Hero banner
- **Current state**: `images/heroes/home.webp` — "International students walking across an Australian university campus"
- **Recommended graphic**: AUDIT — verify the current image is high quality (1920px+ wide), shows diverse international students, and feels warm/inviting. If replacing: diverse group of international students walking through a sunlit Australian university campus with modern architecture. Must feel aspirational and real, not staged.
- **Stock search keywords**: "international students university campus walking", "diverse students australian campus", "multicultural students campus sunshine", "university campus students lifestyle"
- **AI generation prompt**: "Diverse group of five international students (Asian, African, European, Middle Eastern) walking together across a modern Australian university campus on a sunny day. Golden hour lighting, green grass, contemporary university buildings in background. Natural candid feel, warm and inviting. High resolution, photorealistic."
- **Dimensions**: 1920x900px minimum (crops to 460px height via CSS)

---

### 2. "What We Do" Card Images

- **Location**: S3 What We Do — 4 cards (Education, Migration, Career, Student Support)
- **Type**: Card images (16:10 aspect)
- **Current state**: Icons only (Heroicons) — no card images used despite the component supporting `image` prop
- **Recommended graphic**: Add a relevant photo to each card:
  - **Education Services**: Student browsing university options on a laptop with an advisor
  - **Migration & Visas**: Passport and visa documents with Australian flag element
  - **Career Services**: Professional handshake in a modern office
  - **Student Support**: Advisor helping a student with documents, warm supportive setting
- **Stock search keywords**:
  - Education: "education advisor student laptop", "university program selection"
  - Migration: "visa passport australia", "immigration documents consultation"
  - Career: "job interview professional handshake", "career advice office meeting"
  - Support: "student advisor support meeting", "mentor helping student"
- **AI generation prompt**:
  - Education: "Young Asian student and professional education advisor reviewing university options on a laptop screen in a bright, modern office. Warm natural lighting, professional but approachable setting."
  - Migration: "Close-up of passport, visa application form, and Australian landmark (Opera House or similar) in background. Clean, organized desk setting with soft natural lighting."
  - Career: "Two professionals shaking hands across a desk in a modern Perth office. One younger graduate, one experienced mentor. Warm professional atmosphere."
  - Support: "Kind advisor helping an international student with paperwork in a welcoming office. Supportive body language, warm lighting, multicultural setting."
- **Dimensions**: 800x500px each (16:10 ratio)

---

### 3. Featured Programs Card Images

- **Location**: S5 Featured Programs — 2 cards (Buddy Programme, SCSA Associate)
- **Type**: Card images
- **Current state**: No images, badges only ("14-Day Immersion", "International Curriculum")
- **Recommended graphic**:
  - **Buddy Programme**: High school students in Australian school uniforms exploring outdoors
  - **SCSA Associate**: Classroom with diverse students studying/writing
- **Stock search keywords**:
  - Buddy: "high school students outdoor australia", "students field trip nature australia"
  - SCSA: "international school classroom students", "students writing exam classroom"
- **AI generation prompt**:
  - Buddy: "Group of 4-5 high school students in casual attire (14-16 years old, diverse nationalities) exploring nature in Western Australia. Beautiful bushland setting, sunny day, excited expressions, sense of adventure."
  - SCSA: "Modern international school classroom with diverse students (16-17 years old) engaged in study. Teacher at whiteboard, natural light from large windows, organized and contemporary learning environment."
- **Dimensions**: 800x500px each

---

### 4. Why Western Australia Section Image

- **Location**: S6 Why Western Australia — currently 5 text-only cards in a grid
- **Type**: Inline accent photo
- **Current state**: No images at all — just text cards
- **Recommended graphic**: A stunning Perth skyline or Elizabeth Quay photo that could span the top of this section or sit alongside the grid, adding visual appeal to what's currently a text-heavy area
- **Stock search keywords**: "perth skyline sunset", "elizabeth quay perth panorama", "perth city western australia", "perth skyline swan river"
- **AI generation prompt**: "Perth city skyline panorama at golden hour. Elizabeth Quay in foreground with modern buildings reflecting in the Swan River. Clear sky, warm tones, sophisticated cityscape. Wide panoramic format."
- **Dimensions**: 1200x400px (panoramic banner within the section)

---

### 5. Testimonials Section Background/Accent

- **Location**: S7 What Our Clients Say — 3 testimonial cards
- **Type**: Decorative background or accent image
- **Current state**: Plain white section with no visual enhancement
- **Recommended graphic**: Either a subtle background pattern (world map dots, connection lines) or a decorative accent that adds warmth to the testimonials area
- **Stock search keywords**: "world map dots abstract background", "global connection network subtle", "testimonial background pattern subtle"
- **AI generation prompt**: "Very subtle world map made of small dots on a white background. Extremely low opacity (10-15%), just barely visible. Global connection theme with thin lines connecting dots. Education and migration motif. Clean, modern."
- **Dimensions**: 1920x600px PNG with transparency
