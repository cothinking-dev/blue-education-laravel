# Blog Show Page Graphics

**Page**: `resources/views/pages/blog/show.blade.php`
**Route**: `/blog/{slug}`

## Existing Images
- Uses dynamic `$post->featured_image` from database

## Graphic Opportunities

### 1. [P3] Related Articles Section Enhancement
- **Location**: Related Posts section — uses blog-card component
- **Type**: Section background/accent
- **Current state**: Gray-50 background section, no decorative element
- **Recommended graphic**: Subtle decorative accent element suggesting "more to read" — e.g. a faint open book, reading glasses, or stacked pages motif. Keep understated to complement the DSLR-realistic photography used site-wide.
- **Stock search keywords**: "keep reading decorative accent subtle", "related articles background texture"
- **AI generation prompt**: "Subtle decorative accent of softly stacked newspaper/magazine pages suggesting 'more to read'. Very low opacity, light gray tones. DSLR quality, shallow depth of field, natural lighting. Minimal, modern, transparent background."
- **Dimensions**: 300x200px PNG with transparency

---

## Future Features

> The entries below depend on features that don't yet exist on the blog show page. They are documented here for when those features are implemented.

### Author Avatar
- **Location**: Article meta section (currently shows category, date, read time — no author info)
- **Type**: Author avatar image
- **Current state**: No author info displayed
- **Recommended graphic**: If author display is added in future, need a default avatar. See `graphics-about-team.md` for branded placeholder avatar concept.
- **Stock search keywords**: N/A
- **AI generation prompt**: N/A — covered in team file
- **Dimensions**: 40x40px

### Social Share Icons
- **Location**: Not currently present — opportunity to add social sharing
- **Type**: Share button icons
- **Current state**: No social sharing functionality
- **Recommended graphic**: If social sharing is added: custom share icons for LinkedIn, Facebook, Twitter/X, WhatsApp, copy link. At 32px, clean SVG icons complement the DSLR photography style.
- **Stock search keywords**: "social share icon set modern", "share button icons minimal"
- **AI generation prompt**: "Set of 5 social share icons: LinkedIn, Facebook, X (Twitter), WhatsApp, chain link (copy). Consistent rounded square style, subtle gray tone with brand-blue hover state. SVG, transparent background."
- **Dimensions**: 32x32px SVG each
