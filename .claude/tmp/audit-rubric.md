# UI/UX Audit Rubric — Blue Education

**Evaluator:** Claude (Frontend UI/UX Designer)
**Date:** 2026-03-16
**Scope:** 30 pages + 14 reusable components

---

## Scoring Dimensions (5 categories, 1-5 each, max 25 per section)

| Category | What It Measures | 5 = Excellent | 1 = Poor |
|---|---|---|---|
| **Spacing** | Vertical rhythm (py, gap, mb), horizontal padding (px), consistency with site standard (`py-14 px-8 lg:px-16 max-w-7xl mx-auto`), breathing room around content | Every section follows spacing system, consistent gaps, no cramped or floating content | Random/missing padding, content jammed against edges or drifting in empty space |
| **Typography** | Heading hierarchy (h1 > h2 > h3), text sizes, font weights, `text-pretty` usage, line-height, text color contrast | Clear visual hierarchy, every heading level visually distinct, readable body text | Flat hierarchy, headings and body look the same, inconsistent sizes |
| **Visual Hierarchy** | Eye flow top-to-bottom, CTA prominence, content weight matches information priority, section ordering | Clear scan path, primary action obvious, content weight matches priority | Everything has equal visual weight, no clear primary action, sections feel disjointed |
| **Component Usage** | Correct component for the content type, props used properly, consistent with sibling pages | Every section uses the right component with correct props | Wrong components, missing props, inconsistent with sibling pages |
| **Image/Graphic** | Images present where needed, correct aspect ratios, proper alt text, `loading="lazy"` on below-fold images, object-fit/position correct, placeholder states handled | All images present, optimized, accessible, properly cropped | Missing images, wrong aspect ratios, no alt text, missing lazy loading |

---

## Scoring Scale

| Score | Meaning |
|---|---|
| **5** | Excellent — no changes needed |
| **4** | Good — minor polish only (single spacing tweak, missing text-pretty) |
| **3** | Adequate — functional but needs several improvements |
| **2** | Below standard — significant issues that hurt UX |
| **1** | Poor — major problems that make the section look broken |

---

## Site Standard Reference

| Pattern | Value | Where |
|---|---|---|
| Section vertical padding | `py-14` (56px) | Most content sections |
| Horizontal padding | `px-8` (mobile), `lg:px-16` (desktop) | All sections |
| Container max-width | `max-w-7xl` (80rem) | All content sections |
| Card grid gaps | `gap-6` (24px) | All card grids |
| Large layout gaps | `gap-12` (48px) | Image/text splits |
| Section heading margin | `mb-10` | After `<x-section-heading>` |
| Heading font | Inter, bold (700) | All headings |
| Body text | `text-gray-600`, regular (400) | All body copy |
| Background alternation | `bg-white` → `bg-gray-50` → repeat | Section rhythm |
| CTA banner bg | `bg-primary-800` | Bottom of most pages |
| Hero (sub-page) | `min-h: 320px`, `py-16 lg:py-20` | Default hero |
| Hero (home) | `min-h: 460px`, `py-16 lg:py-20` | Home hero |

---

## Audit Output Format

### Per-Page File (`audit-[page].md`)

```markdown
# Page Audit: [Page Name]
**Route**: `/path` | **File**: `resources/views/pages/...`
**Hero**: variant=X, height=Xpx

## S1 Hero (component-driven — see audit-components.md)

## S2 [Section Name]
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 4       | 5         | 4              | 5               | 3     |
**Score: 21/25**
- Finding: description
- Fix: what to change

## Summary
**Average**: X/25 | **Priority fixes**: [numbered list]
```

### Component File (`audit-components.md`)

Each component gets a findings table:

```markdown
## component-name.blade.php
**Used on**: N pages | **Props**: list

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Description | Spacing/Typography/etc | High/Med/Low | What to change |
```

### Changelog File (`audit-changelog.md`)

Grouped by priority:
- **P1 (Must fix)**: Issues that visibly hurt UX or break consistency
- **P2 (Should fix)**: Issues that degrade polish or deviate from standards
- **P3 (Nice to have)**: Minor improvements, edge cases

---

## Scope Rules

1. If a section is **entirely driven by a reusable component** (e.g., `<x-cta-banner>`, `<x-stat-block>`), note "component-driven — see audit-components.md" and skip detailed scoring. Fixes belong in the component audit.
2. If a section **uses a component but adds custom wrapper classes or inline content**, audit the custom parts only.
3. Score each section independently — a page can have a perfect hero (25/25) and a poor card grid (12/25).
4. Blog show template is scored once as a template — individual post content quality is out of scope.
