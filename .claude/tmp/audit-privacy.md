# Page Audit: Privacy Policy
**Route**: `/privacy` | **File**: `resources/views/pages/privacy.blade.php`
**Hero**: variant=centered (default, no image), height=320px (explicit)

## S1 Hero
component-driven -- see audit-components.md
- Note: Hero explicitly passes `height="320px"` which matches the default. No image or badge. No variant specified (defaults to centered). Missing `variant="light"` which would be more appropriate for a legal/text-heavy page (matching Terms page pattern).

## S2 Privacy Content
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 4              | 4               | N/A   |
**Score: 17/20** (no image, scored out of 20)
- Finding: Uses `max-w-3xl` which is correct for long-form text. `prose prose-gray` provides proper typographic styling for the legal content.
- Finding: Padding is `py-16` instead of the site standard `py-14`. Inconsistent with all other sections across the site.
- Finding: The "Last updated" line uses `text-sm text-gray-500 mb-8` which is fine but sits outside the prose flow -- it's a `<p>` with manual sizing that the prose class would otherwise style differently.
- Finding: The hero uses the default centered variant with a dark background (no image, `background-color:#374151`). Since this is a legal page with no hero image, `variant="light"` would be more appropriate and consistent with the Terms page... except the Terms page has the same issue. Both legal pages should use `variant="light"` for a clean, professional look without the dark overlay on gray.
- Finding: Contact section at the bottom uses `<a>` tags for email and phone -- good accessibility.
- Fix: Change `py-16` to `py-14` for consistency. Consider adding `variant="light"` to the hero for both legal pages. The dark gray hero with no image feels heavy for a text-focused legal page.

## Summary
**Average**: 17.0/20 (weighted) | Effective: **4.3/5 per category**
**Priority fixes**:
1. Change `py-16` to `py-14` for section padding consistency
2. Add `variant="light"` to hero -- dark overlay with no image looks unfinished
3. Both privacy and terms pages should have consistent hero treatment
