# Blog Show Page Graphics

**Page**: `resources/views/pages/blog/show.blade.php`
**Route**: `/blog/{slug}`

## Existing Images
- Uses dynamic `$post->featured_image` from database

## Graphic Opportunities

### 1. Author Avatar
- **Location**: Article meta section (currently shows category, date, read time — no author info)
- **Type**: Author avatar image
- **Current state**: No author info displayed
- **Recommended graphic**: If author display is added in future, need a default avatar. See `graphics-about-team.md` for branded placeholder avatar concept.
- **Stock search keywords**: N/A
- **AI generation prompt**: N/A — covered in team file
- **Dimensions**: 40x40px

### 2. Social Share Icons
- **Location**: Not currently present — opportunity to add social sharing
- **Type**: Share button icons
- **Current state**: No social sharing functionality
- **Recommended graphic**: If social sharing is added: custom share icons for LinkedIn, Facebook, Twitter/X, WhatsApp, copy link
- **Stock search keywords**: "social share icon set modern", "share button icons minimal"
- **AI generation prompt**: "Set of 5 social share icons: LinkedIn, Facebook, X (Twitter), WhatsApp, chain link (copy). Consistent rounded square style, subtle gray tone with brand-blue hover state. SVG, transparent background."
- **Dimensions**: 32x32px SVG each

### 3. Related Articles Section Enhancement
- **Location**: Related Posts section — uses blog-card component
- **Type**: Section background/accent
- **Current state**: Gray-50 background section, no decorative element
- **Recommended graphic**: Subtle "keep reading" illustration or decorative element — open book, reading glasses, or stacked articles
- **Stock search keywords**: "keep reading illustration subtle", "related articles decorative accent"
- **AI generation prompt**: "Subtle decorative illustration of stacked newspaper/magazine pages suggesting 'more to read'. Very low opacity, light gray tones. Minimal, modern, transparent background."
- **Dimensions**: 300x200px PNG with transparency
