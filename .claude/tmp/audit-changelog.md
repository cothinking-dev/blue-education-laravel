# Audit Changelog — Blue Education

**Date**: 2026-03-16
**Scope**: 14 components + 29 pages audited
**Status**: Hero overlay/padding/position already implemented

---

## P1: Must Fix (visible UX problems or invalid HTML)

### Already Done
- [x] **hero.blade.php**: Replace flat dark overlay with brand blue gradient (`mix-blend-mode: multiply`) + vignette layer
- [x] **hero.blade.php**: Add `py-16 lg:py-20` padding to centered/left content wrapper (was zero padding)
- [x] **hero.blade.php**: Add `position` prop for per-page `object-position` control

### HTML / Accessibility
- [ ] **why-australia.blade.php S2**: Fix 5 closing `</h2>` tags that should be `</h3>` — invalid HTML, breaks heading hierarchy
- [ ] **about/index.blade.php S6**: Change `<p>` to `<h2>` for "Professional Credentials" heading — screen readers skip it
- [ ] **data-table.blade.php**: Add `scope="col"` to `<th>` elements — affects 13 pages, impairs screen reader table navigation
- [ ] **blog-card.blade.php**: Change `text-gray-400` to `text-gray-500` for date metadata — fails WCAG AA contrast (2.6:1 → 4.6:1)
- [ ] **team-member.blade.php**: Change `text-gray-400` to `text-gray-500` for languages text — same WCAG issue

### Broken Functionality
- [ ] **stat-block.blade.php**: Count-up JS breaks on non-numeric values ("Nearly 30", "40+", "24/7", "1,100+") — needs prefix/suffix system or graceful fallback
- [ ] **blog-card.blade.php**: `readTime` "min read" duplication — component appends "min read" but blog/index.blade.php also passes "5 min read" → renders "5 min read min read"

### Layout Breakage
- [ ] **privacy.blade.php**: Add `variant="light"` to hero — dark gray hero with no background image looks unfinished
- [ ] **terms.blade.php**: Add `variant="light"` to hero — same issue as privacy
- [ ] **services/education/english.blade.php S4**: `<x-callout>` renders edge-to-edge with no container wrapper — needs `max-w-7xl mx-auto px-8 lg:px-16` section wrapper
- [ ] **services/migration/graduate-work.blade.php S4**: Same `<x-callout>` container issue
- [ ] **services/migration/permanent-residence.blade.php S4**: Same `<x-callout>` container issue

---

## P2: Should Fix (consistency, spacing, component usage)

### Spacing Normalization
- [ ] **content-split.blade.php**: Change `py-16` to `py-14` — affects 9 pages, creates vertical rhythm mismatch with adjacent `py-14` sections
- [ ] **privacy.blade.php**: Change `py-16` to `py-14` on content section
- [ ] **terms.blade.php**: Change `py-16` to `py-14` on content section
- [ ] **about/index.blade.php S6**: Change `py-12` to `py-14` for credentials section
- [ ] **fees.blade.php S5**: Fix `pt-10` visual break — change to `py-14` and add visual separation from adjacent `bg-gray-50` section
- [ ] **faq.blade.php S2**: Fix `pt-14` visual context to `py-14` for consistent spacing
- [ ] **admission-requirements.blade.php S3**: Fix `pt-14` visual break to `py-14`
- [ ] **services/migration/index.blade.php S4**: Fix `pt-14` visual break to `py-14`

### Raw `<h2>` → `<x-section-heading>`
These pages use raw `<h2>` inline markup where `<x-section-heading>` would be more consistent:
- [ ] **programs/executive-internship.blade.php** S2, S3
- [ ] **programs/study-tours.blade.php** S4
- [ ] **blog/show.blade.php** S2 (Related Posts)
- [ ] **services/career.blade.php** S2
- [ ] **services/education/school.blade.php** S2, S3
- [ ] **services/education/english.blade.php** S6

*Note: Some pages (education/index S4-S5, career S2) use raw `<h2>` for justified layout reasons (flex with side image). These are acceptable deviations.*

### "Also Relevant" Sections
Multiple program pages have sparse link-only sections with no heading — standardize pattern:
- [ ] **programs/scsa-associate.blade.php** S8
- [ ] **programs/executive-internship.blade.php** S9
- [ ] **programs/study-tours.blade.php** S5
- [ ] **programs/buddy-programme.blade.php** S6
- [ ] **services/student-support.blade.php** S7

### Component Fixes
- [ ] **blog-card.blade.php**: Remove `asset()` wrapping — may double-wrap if `featured_image` stores absolute URLs
- [ ] **team-member.blade.php**: Fix WebP conversion — `str_replace('.png', '.webp')` fails for `.jpg` sources; use regex
- [ ] **credential-card.blade.php**: Change title from `text-sm` to `text-base` — inconsistent with other card heading sizes
- [ ] **card.blade.php**: Consider stretched-link pattern — `hover:shadow-lg` implies full-card clickability but only small "Learn more" is clickable
- [ ] **timeline.blade.php**: Add `<ol>` wrapper and `<li>` for semantic list markup

### Home Page
- [ ] **home.blade.php S6**: Refactor inline "Why WA" cards to use `<x-card>` component
- [ ] **home.blade.php S10**: Phone number appears twice in CTA — suppress duplicate
- [ ] **home.blade.php S5**: Add images to Featured Programs cards for visual weight parity with S3

### Data Integrity
- [ ] **faq.blade.php**: FAQ data duplicated — `$faqItems` array (for JSON-LD) and accordion `:items` are separate copies of the same data. Refactor to single source.
- [ ] **services/migration/index.blade.php S5**: Text says "25+ years" but hero and site-wide says "28 years" — fix data mismatch

### Image Object-Position
After hero overlay changes, review each hero image and set `position` prop where needed:
- [ ] Review all 27 hero images at mobile/desktop viewports
- [ ] Set per-page `position` values for portraits and landscape crops that lose important subjects

---

## P3: Nice to Have (polish, minor improvements)

### Visual Enhancements
- [ ] **home.blade.php S6**: Add at least one image to "Why Western Australia" section to break text-only monotony
- [ ] **why-australia.blade.php S4**: Add image to multicultural section
- [ ] **about/index.blade.php S3**: Change duplicate `identification` icon for "Personalised" value (use `user` or `finger-print`)
- [ ] **stat-block.blade.php**: Fix orphaned 5th stat on mobile 2-col grid (3+2 layout looks unbalanced)
- [ ] **about/partners.blade.php S2**: Replace inline `style="min-height:..."` with Tailwind classes
- [ ] **contact.blade.php S3**: Replace inline `style="height:260px"` with Tailwind `h-[260px]`
- [ ] **fees.blade.php S7**: Normalize inline card padding from `p-5` to `p-6`

### Animation Consistency
- [ ] **blog/index.blade.php**: Test Alpine.js filter transitions vs GSAP `data-animate="stagger"` for conflicts
- [ ] Visual break image grids: Add `data-animate="stagger"` consistently across all pages that have them

### Accessibility Polish
- [ ] **accordion.blade.php**: Sanitize `{!! !!}` HTML output if FAQ data comes from CMS/database
- [ ] **cta-banner.blade.php**: Add `aria-label="Call Blue Education"` to phone link
- [ ] **timeline.blade.php**: Add `role="list"` / `role="listitem"` for screen reader semantics
- [ ] **contact.blade.php S4/S5**: Fix adjacent `bg-white` sections with no visual separation

### Componentization Candidates
- [ ] Left-border info card pattern (used on why-australia + fees) → consider extracting to component
- [ ] Value icon cards (about/index S3) → dedicated component or card variant
- [ ] "Also Relevant" link section → dedicated component with heading + card layout

### Minor Spacing
- [ ] **cta-banner.blade.php**: Consider `py-14` instead of `py-16` (arguable — CTA emphasis may justify extra)
- [ ] **contact-card.blade.php**: Default `space-y-1` to `space-y-2` for better breathing room
- [ ] **team-member.blade.php**: Change bio `mt-3` to `mt-4` for more breathing room after credentials

---

## Score Summary

| Page | Score | Notes |
|---|---|---|
| services/education/index | 24.7/25 | Best page — no issues |
| blog/index | 4.8/5 | Near-perfect |
| about/team | 4.8/5 | Clean component usage |
| blog/show | 4.7/5 | Excellent SEO |
| admission-requirements | 24.0/25 | Minor visual break spacing |
| services/education/vet-tafe | 24.0/25 | Solid |
| contact | 24.0/25 | Minor bg collision |
| services/migration/student-visas | 23.8/25 | |
| services/career | 23.5/25 | |
| services/education/degrees | 23.5/25 | |
| services/student-support | 23.3/25 | |
| about/index | 23.0/25 | Credential heading fix |
| programs/buddy-programme | 23.0/25 | |
| services/education/school | 23.0/25 | |
| services/migration/index | 22.8/25 | |
| services/migration/graduate-work | 22.8/25 | Callout container |
| services/migration/permanent-residence | 22.8/25 | Callout container |
| why-australia | 22.7/25 | Invalid HTML (h2/h3) |
| programs/index | 22.5/25 | |
| home | 22.2/25 | Several polish items |
| faq | 22.0/25 | Data duplication |
| services/education/english | 22.0/25 | Callout container |
| about/partners | 4.3/5 | Inline styles |
| programs/study-tours | 4.4/5 | |
| programs/scsa-associate | 4.4/5 | |
| programs/executive-internship | 4.2/5 | Raw h2s |
| privacy | 4.3/5 | Hero variant + py-16 |
| terms | 4.3/5 | Hero variant + py-16 |

**Site average**: ~4.5/5 per category — fundamentally solid design system with consistent patterns. Most issues are minor consistency deviations or missing component usage.
