# Page Audit: Migration & Visas
**Route**: `/services/migration` | **File**: `resources/views/pages/services/migration/index.blade.php`
**Hero**: variant=centered (default), height=320px (default), image=yes, breadcrumbs=true

## S1 Hero (component-driven — see audit-components.md)
Default centered variant with image overlay. Long subtitle doubles as meta description. Breadcrumbs enabled. Clean.

## S2 The Migration Pathway
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 4     |
**Score: 23/25**
- Standard container. `bg-white`.
- `<x-section-heading>` with `:centered="false"`.
- 4-step horizontal pathway with circular icons, connecting line, and step labels.
- Each step: `w-16 h-16` circle with icon, `h3` title at `text-lg font-bold`, subclass label at `text-xs font-semibold text-primary-800`, description at `text-sm`.
- Last step (Settle) uses green circle (`bg-green-100 text-green-700`) to signal destination — good visual differentiation.
- "Career services" link on step 3 provides contextual navigation.
- Footer italic note acknowledges non-linear paths.
- Finding (Component Usage): The 4-step pathway is fully custom inline markup. This is a unique one-off pattern that doesn't map to `<x-timeline>` (vertical, numbered) — inline construction is appropriate.
- Finding (Image): No images in this section. The connected-circles visual carries the section, but it's entirely text-based.
- Fix: The connecting line (`hidden md:block absolute top-8 left-[12.5%] right-[12.5%] h-0.5 bg-gray-200`) only shows on `md:` — on mobile the steps stack vertically with no visual connection. Consider adding a vertical connector line for mobile.

## S3 Visa Services
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 5               | 4     |
**Score: 24/25**
- Standard container with `bg-gray-50`.
- `<x-section-heading>` with `:centered="false"`.
- 3 `<x-card>` instances with `icon` slots (Heroicons), no images. Named route hrefs.
- Footer note about Visitor Visas with contextual link.
- Finding: Cards use icon variant — no images. This is appropriate for a service listing at this level.
- Fix: None required.

## S4 Visual Break
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 3              | 4               | 5     |
**Score: 21/25**
- Container uses `pt-14` instead of `py-14` — no bottom padding. This merges visually into S5 below.
- 2-column image grid with proper `aspect-[3/2]`, `object-cover`, `rounded-corner-lg`, `loading="lazy"`, and descriptive alt text.
- Finding (Spacing): `pt-14` without `pb-14` means the visual break has no bottom breathing room. The images sit right against the top of S5.
- Finding (Vis. Hierarchy): No heading or context. Two orphaned images between sections. The purpose is unclear — they're visa-related stock photos.
- Fix: Add `py-14` for consistent spacing. Consider adding a subtle context label or removing this section if it doesn't add meaningful content.

## S5 Why Trust Us
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 4     |
**Score: 23/25**
- Standard container. `bg-white`.
- `<x-section-heading>` with `:centered="false"`.
- 55/45 split: text left (heading + paragraph + 5-item checklist), credential cards right.
- Checklist uses `&#10003;` character — consistent with fees page pattern.
- 3 `<x-credential-card>` components + 1 inline stats card ("28yr").
- Finding (Component Usage): The inline stats card breaks the credential-card pattern. It's a custom `<div>` styled to match but not a component.
- Finding (Image): Credential cards use SVG logos. The inline stats card is text-only. No photographic images in this section.
- Fix: Minor — the "28yr" card says "25+ years" in the subtitle but the hero says "28 years". Inconsistent messaging. Should be "28 years · 40+ countries".

## S6 CTA (component-driven — see audit-components.md)
Pure `<x-cta-banner>`. Phone prop passed. Single primary action. Clean.

## Summary
**Average**: 22.8/25 | **Priority fixes**:
1. S4 Visual Break: Change `pt-14` to `py-14` for consistent spacing
2. S5 "28yr" card: Fix text from "25+ years" to "28 years" — matches hero and site-wide messaging
3. S2 Mobile: Add vertical connector for mobile pathway visualization
4. S4: Add context heading or remove orphaned image section
