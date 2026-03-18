# Page Audit: Contact
**Route**: `/contact` | **File**: `resources/views/pages/contact.blade.php`
**Hero**: variant=light, height=320px (default), no image, breadcrumbs=true

## S1 Hero (component-driven — see audit-components.md)
Light variant hero — gradient background, no background image. Breadcrumbs enabled. Clean.

## S2 Contact Methods
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 5     |
**Score: 25/25**
- Standard `py-14 px-8 lg:px-16 max-w-7xl mx-auto` spacing.
- 3-column grid of `<x-contact-card>` components with icon slots.
- Phone card has 3 numbers with labels. Email card has address + response time. Office card has formatted address.
- Clean semantic markup: `<address>`, `not-italic`, proper `tel:` and `mailto:` links.
- No issues found.

## S3 Contact Form
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 4     |
**Score: 24/25**
- Standard container with `bg-gray-50` background alternation.
- `<h2>` with `id="enquiry-form"` anchor — good for CTA deep links.
- 60/40 split: form left (via `<x-contact-form>` component), sidebar right (map + info card).
- Google Maps iframe: proper `loading="lazy"`, title attribute, fixed 260px height.
- Sidebar info card repeats office address and phone — intentional reinforcement.
- Finding: Map iframe uses fixed `style="height:260px"` instead of Tailwind class. Minor inline style but acceptable for iframe containers.
- Fix: Could use `h-[260px]` Tailwind class for consistency, but this is cosmetic only.

## S4 Visual Context
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 4               | 5     |
**Score: 23/25**
- Standard container. 3-column image grid.
- All images: `rounded-corner-lg`, `object-cover`, `aspect-[3/2]`, `loading="lazy"`, descriptive alt text.
- Finding (Vis. Hierarchy): This section has no heading or context — it's a "visual break" that sits between the form and the consultation CTA. The purpose is implied but not stated.
- Finding (Component Usage): Raw `<img>` tags in a grid. No component wrapping. This is appropriate for a simple image gallery.
- Fix: Consider adding a subtle label like "Our Perth Office" or removing this section entirely if the images in S3 sidebar already convey the office environment.

## S5 Book a Consultation
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Standard container. `bg-white` background.
- Centered card with `border-2 border-primary-100 bg-primary-50` — branded highlight box.
- Checkmark list with `<ul>` and flex items. `<x-btn>` for CTA.
- Finding: This section uses `bg-white` but the previous section (visual context) is also `bg-white` — no visual separation between S4 and S5. They blend together.
- Fix: Either give S4 a `bg-gray-50` background or add a top border/divider to S5. Alternatively, merge S4 images into the consultation section.

## S6 International Representatives
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 5               | 5     |
**Score: 24/25**
- Standard container with `bg-gray-50` alternation.
- Uses `<x-data-table>` component for region/representative data.
- Inline `<h2>` at `text-3xl font-bold` — consistent with other manual headings.
- Finding: Heading uses inline `<h2>` instead of `<x-section-heading>`. This is because there's a subtitle paragraph below it with `mb-8` and the section-heading component's subtitle is `text-lg` while this one is default size. Minor inconsistency.
- Fix: Could use `<x-section-heading title="..." subtitle="...">` for consistency, though the current text-base subtitle size works well here.

## Summary
**Average**: 24.0/25 | **Priority fixes**:
1. S4/S5 background collision: Both are `bg-white` — add visual separation (background alternation or divider)
2. S3 map iframe: Replace inline `style="height:260px"` with Tailwind `h-[260px]` for consistency
3. S4 visual context: Consider adding a subtle heading for accessibility/context
4. S6 heading: Consider using `<x-section-heading>` for pattern consistency
