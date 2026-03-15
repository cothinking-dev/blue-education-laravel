# General / Site-Wide Graphics

Graphics that apply across the entire site — icon sets, shared textures, patterns, decorative elements.

---

## 1. Custom Icon Set (Services)

- **Location**: Used across Home (What We Do cards), Education Index, Migration Index, Student Support, Career pages
- **Type**: Icon illustrations (replace generic Heroicons)
- **Current state**: Using Heroicon outline icons (book-open, globe-alt, briefcase, heart, home, shield-check, phone, paper-airplane, document-text, etc.)
- **Recommended graphic**: A cohesive custom icon set of 12-15 icons matching the education/migration theme. Clean line style, consistent stroke weight. Icons needed: graduation cap, globe/world, briefcase, heart/care, home, shield, phone, airplane, document, calendar, book, certificate, handshake, family, compass
- **Stock search keywords**: "education icon set line", "migration travel icon collection", "flat line icon education set", "business education icon pack"
- **AI generation prompt**: "Minimalist line icon set of 15 icons for an education consultancy website. Icons: graduation cap, globe, briefcase, heart, home, shield, phone, airplane, document, calendar, open book, certificate, handshake, family silhouette, compass. Clean consistent 2px stroke weight, rounded corners, single color, SVG-ready flat design on transparent background"
- **Dimensions**: 64x64px SVG each

---

## 2. CTA Banner Background Pattern

- **Location**: Every page has a `<x-cta-banner>` component — currently solid bg-primary-800 with no visual texture
- **Type**: Subtle background pattern/texture
- **Current state**: Solid dark blue (primary-800) background
- **Recommended graphic**: A subtle abstract geometric pattern or wave texture that adds visual depth to the CTA sections without competing with the text. Translucent overlay.
- **Stock search keywords**: "abstract geometric pattern dark blue", "subtle wave texture dark background", "blue gradient abstract background", "dark blue subtle pattern overlay"
- **AI generation prompt**: "Subtle abstract geometric wave pattern for a dark blue background banner. Very low opacity, barely visible swirling lines and dots creating gentle texture. Dark navy blue base (#1e3a5f). Seamless tileable pattern. Corporate and professional feel."
- **Dimensions**: 1920x400px, tileable

---

## 3. Section Divider / Decorative Element

- **Location**: Between major sections on content-heavy pages (About, Career, Programs)
- **Type**: Decorative separator
- **Current state**: Sections alternate between bg-white and bg-gray-50 — no decorative dividers
- **Recommended graphic**: A subtle wave or curved line divider that can sit between sections. Thin, elegant, uses brand blue or gray tones.
- **Stock search keywords**: "wave section divider SVG", "abstract curve divider web", "subtle wave separator modern", "section break line design"
- **AI generation prompt**: "Minimal curved wave section divider for a modern website. Thin elegant single-line SVG. Gentle undulating curve. Blue and light gray tones. Transparent background. Clean, professional, not decorative or ornate."
- **Dimensions**: 1920x80px SVG

---

## 4. Testimonial Quote Mark

- **Location**: Home testimonials section, used in `<x-testimonial>` component
- **Type**: Decorative quote graphic
- **Current state**: No visual quote mark, just text-based testimonial cards
- **Recommended graphic**: Large decorative opening quotation mark in a subtle brand blue tone, used as a background accent behind the quote text
- **Stock search keywords**: "decorative quote mark icon", "quotation mark design element", "large quote symbol SVG", "testimonial quote icon"
- **AI generation prompt**: "Large decorative opening double quotation mark for a testimonial section. Soft blue tone with slight transparency. Elegant serif typeface style. Simple and refined, not ornate. SVG format, transparent background."
- **Dimensions**: 120x100px SVG

---

## 5. Newsletter Section Background

- **Location**: Blog index page — `<x-newsletter>` component
- **Type**: Background image/pattern
- **Current state**: Component likely has a simple colored background
- **Recommended graphic**: An abstract pattern or illustrated scene showing communication/connection — subtle enough to be a background
- **Stock search keywords**: "email newsletter background abstract", "communication pattern background", "envelope letter abstract background", "modern newsletter signup background"
- **AI generation prompt**: "Soft abstract background for an email newsletter signup section on an education website. Floating envelope shapes, subtle communication icons, gentle gradient from light blue to white. Low opacity decorative elements. Clean, modern, professional."
- **Dimensions**: 1920x400px

---

## 6. WhatsApp Widget Custom Icon

- **Location**: Floating WhatsApp button (site-wide via `<x-whatsapp-widget>`)
- **Type**: Custom branded chat icon
- **Current state**: Likely using default WhatsApp green icon or text
- **Recommended graphic**: A custom WhatsApp chat icon with a slight branded treatment — could include a small chat bubble element
- **Stock search keywords**: "whatsapp chat icon modern", "messaging chat bubble icon", "whatsapp button flat design"
- **AI generation prompt**: "Modern WhatsApp chat icon button for floating website widget. Green (#25D366) rounded square with white phone handset inside speech bubble. Clean flat design, slight shadow for depth. 3D rendered feel."
- **Dimensions**: 60x60px PNG with transparency

---

## 7. Footer Background Texture

- **Location**: Site-wide footer component
- **Type**: Subtle background texture
- **Current state**: Likely a solid dark background
- **Recommended graphic**: Very subtle pattern/texture for the footer area — dots, thin lines, or a Perth skyline silhouette
- **Stock search keywords**: "dark footer background texture", "subtle dark pattern web footer", "city skyline silhouette footer", "perth skyline illustration"
- **AI generation prompt**: "Very subtle Perth skyline silhouette as a footer background element. Extremely low opacity, barely visible against a dark charcoal background. Recognizable Perth landmarks (Bell Tower, Elizabeth Quay). Wide panoramic, seamless horizontal tile."
- **Dimensions**: 1920x300px PNG

---

## 8. Loading/Placeholder Image for Blog Cards

- **Location**: Blog cards across the site when featured_image is missing
- **Type**: Placeholder/fallback image
- **Current state**: The `<x-blog-card>` component may show a broken or missing image if no featured_image is set
- **Recommended graphic**: A clean branded placeholder with the Blue Education logo watermark and a subtle education-themed pattern
- **Stock search keywords**: "blog post placeholder image", "content placeholder graphic", "article thumbnail placeholder"
- **AI generation prompt**: "Clean placeholder image for a blog card on an education website. Light gray background with subtle cross-hatch pattern. A faded open book icon in the center. Professional, minimal, indicates 'content coming soon'. Aspect ratio 16:10."
- **Dimensions**: 800x500px (16:10 aspect matching card component)

---

## 9. Partner Institution Logo Grid — Missing Logos

- **Location**: Home page logo marquee, About Partners page, Degrees page
- **Type**: Institution logos
- **Current state**: Have: UWA (SVG), Curtin (WebP), Murdoch (SVG), ECU (PNG), NM TAFE (SVG), Notre Dame (SVG). Missing: South Metropolitan TAFE, other national partner institutions that may be referenced
- **Recommended graphic**: Source official logos from university/TAFE websites. These must be the REAL logos, not AI-generated.
- **Stock search keywords**: N/A — these must be sourced from official sources, not Freepik
- **AI generation prompt**: N/A — DO NOT AI-generate institution logos
- **Dimensions**: Match existing (h-10 to h-12 rendered height)
- **Note**: Official logos only. Download from institution media/brand pages.

---

## 10. SCSA Official Logo

- **Location**: Programs > SCSA Associate page — currently using placeholder text boxes ("Official SCSA Associate" and "WA Department of Education")
- **Type**: Official certification/badge logos
- **Current state**: Plain text in bordered boxes, no actual logos
- **Recommended graphic**: Source the official SCSA (School Curriculum and Standards Authority) logo and the WA Department of Education logo
- **Stock search keywords**: N/A — official government logos only
- **AI generation prompt**: N/A — DO NOT AI-generate government logos
- **Dimensions**: SVG preferred, ~120x80px rendered
- **Note**: Must be sourced from official WA government websites
