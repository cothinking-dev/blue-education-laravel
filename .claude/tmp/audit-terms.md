# Page Audit: Terms of Use
**Route**: `/terms` | **File**: `resources/views/pages/terms.blade.php`
**Hero**: variant=centered (default, no image), height=320px (explicit)

## S1 Hero
component-driven -- see audit-components.md
- Note: Same issue as Privacy page -- uses default centered variant with dark gray background and no image. Should use `variant="light"` for a legal page. The hero explicitly passes `height="320px"`.

## S2 Terms Content
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 4              | 4               | N/A   |
**Score: 17/20** (no image, scored out of 20)
- Finding: Structurally identical to Privacy page -- `max-w-3xl`, `prose prose-gray`, `py-16`. Same padding inconsistency (`py-16` vs site standard `py-14`).
- Finding: 10 numbered sections with proper `<h2>` hierarchy inside the prose container. Content is well-organized.
- Finding: The "Last updated" date treatment is identical to Privacy (`text-sm text-gray-500 mb-8`). Consistent between the two legal pages at least.
- Finding: Contact info at the bottom uses `<a>` tags for email and phone -- good.
- Finding: No CTA banner or newsletter section at the bottom. The page ends after the content section. This is appropriate for a legal page but creates an abrupt ending. A subtle back-to-home or contact link might help.
- Fix: Change `py-16` to `py-14` for consistency. Add `variant="light"` to hero. Consider a minimal footer CTA or back link.

## Summary
**Average**: 17.0/20 (weighted) | Effective: **4.3/5 per category**
**Priority fixes**:
1. Change `py-16` to `py-14` for section padding consistency
2. Add `variant="light"` to hero -- same fix as Privacy page
3. Consider adding a minimal CTA or back link after the content to avoid abrupt page ending
