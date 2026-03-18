# Page Audit: Career Services
**Route**: `/services/career` | **File**: `resources/views/pages/services/career.blade.php`
**Hero**: variant=left, height=320px (default)

## S1 Hero (component-driven -- see audit-components.md)

## S2 The Career Pathway
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 4               | 5     |
**Score: 23/25**
- Finding: 6 cards in a 3x2 grid. Cards 1-5 are white with numbered circles (`w-8 h-8 rounded-full bg-primary-100 text-primary-800`). Card 6 uses `bg-primary-800 text-white` with `bg-white/20` number circle -- excellent visual climax for the premium offering.
- Finding: Standard container padding `max-w-7xl mx-auto px-8 lg:px-16 py-14` -- compliant.
- Fix: Heading uses raw `h2 text-3xl font-bold text-gray-900 mb-4` instead of `<x-section-heading>`. This is followed by intro text with `mb-10` which matches `<x-section-heading>` subtitle spacing. Could use the component with `subtitle` prop for consistency.
- Finding: Cards are hand-rolled rather than `<x-card>` -- justified by the numbered circle pattern not available in `<x-card>`.
- Finding: The premium card (step 6) has a border-color mismatch: `border-primary-200` on a `bg-primary-800` card. The border is subtle on dark backgrounds. Minor visual detail.

## S2b Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 4              | 4               | 5     |
**Score: 23/25**
- Finding: Single full-width image with `aspect-[3/1] max-h-[280px]` -- slightly taller max-height than School/VET pages' `max-h-[240px]`. Minor inconsistency.
- Finding: `bg-gray-50` section with `py-14` -- provides visual breathing room around the image.
- Fix (minor): The `max-h-[280px]` vs `max-h-[240px]` used on other pages' banner images is a small inconsistency. Standardize to one value.

## S3 Executive Internship Highlight
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 5     |
**Score: 24/25**
- Finding: Uses `bg-gradient-to-br from-primary-900 to-primary-700` -- the only gradient background section across all 10 audited pages. High visual impact for the premium programme promotion.
- Finding: Text uses `text-white` and `text-primary-200` -- appropriate contrast on dark gradient.
- Finding: CTA button uses `bg-white text-primary-800` with `hover:bg-primary-50` -- inverted button style for dark backgrounds.
- Finding: "Premium Program" badge uses `bg-white/20 text-white text-xs font-semibold rounded-full` -- consistent with hero badge styling.
- Finding: Image uses standard `aspect-[3/2] object-cover rounded-corner-lg loading="lazy"` -- compliant.
- Fix (minor): The CTA link uses `inline-flex` but is not using `<x-btn>` component. Could use `<x-btn variant="white" size="lg">` if that variant exists. Hand-rolled button styling is fine but less maintainable.

## S4 CTA (component-driven -- see audit-components.md)

## Summary
**Average**: 23.5/25 | **Priority fixes**:
1. S2: Replace raw h2+p with `<x-section-heading title="..." subtitle="...">` for structural consistency
2. S2b: Standardize `max-h-[280px]` to `max-h-[240px]` to match School and VET page banner images
3. S3: Consider using `<x-btn>` component for the EIP CTA button if a `white` variant exists
