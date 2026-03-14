# Site Audit — Change Requests

**Date:** 2026-03-10
**Scope:** All 27 pages, global components, console errors

---

## Global Issues

### G1. Alpine `x-intersect` plugin missing [SEVERITY: HIGH]
- **File:** `resources/views/components/stat-block.blade.php`
- **Error:** `Alpine Warning: You can't use [x-intersect] without first installing the "Intersect" plugin`
- **Fix:** Replaced `x-intersect.once` with GSAP ScrollTrigger callback on `[data-stat-countup]`
- **Status:** [x] FIXED

### G2. GSAP stagger targets empty containers [SEVERITY: MEDIUM]
- **File:** `resources/js/app.js`
- **Error:** `GSAP target [object HTMLCollection] not found` on `/about/team`
- **Cause:** `[data-animate="stagger"]` triggers on containers with 0 children (empty team section)
- **Fix:** Added `if (el.children.length === 0) return;` guard
- **Status:** [x] FIXED

### G3. 75 inline SVGs across 23 files [SEVERITY: LOW]
- `blade-heroicons` is installed but unused
- **Files:** nav, footer components, card, accordion, testimonial, pagination, breadcrumb, credential-card, whatsapp-widget, + 14 page files
- **Fix:** Replaced 64 SVGs with `<x-heroicon-o-*>` / `<x-heroicon-m-*>` components across 21 files. 11 remaining SVGs are intentional (testimonial quote, WhatsApp brand, showcase/welcome pages).
- **Status:** [x] FIXED

### G4. 0 team members seeded [SEVERITY: HIGH]
- **DB:** `TeamMember::count() === 0`
- **Effect:** `/about/team` shows empty page, triggers GSAP error (G2)
- **Fix:** Seeded 15 team members (6 AU, 9 Intl) with real names, roles, bios, photos from wireframe
- **Status:** [x] FIXED

### G5. 0 of 16 blog posts have featured images [SEVERITY: MEDIUM]
- **DB:** All posts have `featured_image = null`
- **Effect:** Blog cards show no image, blog show page has no hero image
- **Fix:** Sourced 5 blog images, updated seeder — 16 of 16 posts now have featured images
- **Status:** [x] FIXED

---

## Per-Page Issues

### P1. `/` (Home)
- **HTTP:** 200
- **SVGs:** 5 replaced with heroicons
- **Images:** OK
- **Console:** Alpine x-intersect fixed (G1)
- **Status:** [x] FIXED

### P2. `/about`
- **HTTP:** 200
- **SVGs:** 5 replaced with heroicons
- **Placeholders:** 3 images sourced and placed (education-consulting, perth-office, student-support)
- **Status:** [x] FIXED

### P3. `/about/team`
- **HTTP:** 200
- **Status:** [x] FIXED — 15 team members seeded (G4), GSAP guard added (G2)

### P4. `/about/partners`
- **HTTP:** 200
- **Placeholders:** World map image sourced and placed
- **Status:** [x] FIXED

### P5. `/services/education`
- **HTTP:** 200
- **SVGs:** Replaced with heroicons
- **Status:** [x] FIXED

### P6. `/services/education/school`
- **HTTP:** 200
- **Status:** [x] OK — no changes needed

### P7. `/services/education/english`
- **HTTP:** 200
- **SVGs:** 3 replaced with heroicons
- **Status:** [x] FIXED

### P8. `/services/education/vet-tafe`
- **HTTP:** 200
- **SVGs:** 3 replaced with heroicons
- **Status:** [x] FIXED

### P9. `/services/education/degrees`
- **HTTP:** 200
- **Placeholders:** 3 images sourced + Notre Dame logo wired from existing asset
- **Status:** [x] FIXED

### P10. `/services/migration`
- **HTTP:** 200
- **SVGs:** 7 replaced with heroicons
- **Status:** [x] FIXED

### P11. `/services/migration/student-visas`
- **HTTP:** 200
- **SVGs:** 4 replaced with heroicons
- **Status:** [x] FIXED

### P12. `/services/migration/graduate-work`
- **HTTP:** 200
- **Status:** [x] OK — no changes needed

### P13. `/services/migration/permanent-residence`
- **HTTP:** 200
- **SVGs:** 4 replaced with heroicons
- **Status:** [x] FIXED

### P14. `/services/career`
- **HTTP:** 200
- **Placeholders:** Internship image sourced and placed
- **Status:** [x] FIXED

### P15. `/services/student-support`
- **HTTP:** 200
- **SVGs:** 6 replaced with heroicons (plane-departure corrected to paper-airplane)
- **Status:** [x] FIXED

### P16. `/programs`
- **HTTP:** 200
- **Status:** [x] OK — no changes needed

### P17. `/programs/buddy-programme`
- **HTTP:** 200
- **Placeholders:** 3 images sourced and placed (homestay, field-trips, voluntary-work)
- **Status:** [x] FIXED

### P18. `/programs/study-tours`
- **HTTP:** 200
- **SVGs:** 4 replaced with heroicons
- **Placeholders:** 2 images sourced and placed (culinary-tour, custom-group-tours)
- **Status:** [x] FIXED

### P19. `/programs/scsa-associate`
- **HTTP:** 200
- **SVGs:** 3 replaced with heroicons
- **Status:** [x] FIXED

### P20. `/programs/executive-internship`
- **HTTP:** 200
- **SVGs:** 3 replaced with heroicons
- **Placeholders:** Partner photo placeholders replaced with styled initials circles (L, N)
- **Status:** [x] FIXED

### P21. `/why-australia`
- **HTTP:** 200
- **Placeholders:** 5 images sourced and placed (qualifications, choice, work, lifestyle, affordability)
- **Status:** [x] FIXED

### P22. `/faq`
- **HTTP:** 200
- **Status:** [x] OK — no changes needed

### P23. `/admission-requirements`
- **HTTP:** 200
- **Status:** [x] OK — no changes needed

### P24. `/fees`
- **HTTP:** 200
- **Status:** [x] OK — no changes needed

### P25. `/blog`
- **HTTP:** 200
- **Status:** [x] FIXED — 16/16 posts now have featured images (G5)

### P26. `/blog/{slug}`
- **HTTP:** 200
- **Status:** [x] FIXED — featured images display correctly (G5)

### P27. `/contact`
- **HTTP:** 200
- **SVGs:** 3 replaced with heroicons
- **Status:** [x] FIXED

---

## Image Requirements Summary

| Page | Hero | Content | Inline | Total |
|---|---|---|---|---|
| `/about` | 0 | 3 | 0 | 3 |
| `/about/partners` | 0 | 0 | 1 (map) | 1 |
| `/services/education/degrees` | 0 | 3 | 1 (logo fix) | 4 |
| `/services/career` | 0 | 1 | 0 | 1 |
| `/programs/buddy-programme` | 0 | 3 | 0 | 3 |
| `/programs/study-tours` | 0 | 2 | 0 | 2 |
| `/programs/executive-internship` | 0 | 0 | 2 (portraits) | 2 |
| `/why-australia` | 0 | 5 | 0 | 5 |
| Blog posts (seeder) | 0 | 0 | 5-10 | 5-10 |
| **Total** | 0 | 17 | 9-14 | **26-31** |

---

## SVG-to-Heroicon Mapping

| Current SVG Purpose | Heroicon Component | Files |
|---|---|---|
| Chevron down (dropdown) | `<x-heroicon-m-chevron-down>` | nav, accordion |
| Chevron right (breadcrumb) | `<x-heroicon-m-chevron-right>` | auto-breadcrumb, card |
| Chevron left/right (pagination) | `<x-heroicon-m-chevron-left>` / `right` | pagination |
| Arrow right (links) | `<x-heroicon-m-arrow-right>` | card, various pages |
| Book open (education) | `<x-heroicon-o-book-open>` | home, education pages |
| Globe (international) | `<x-heroicon-o-globe-alt>` | home, migration pages |
| Briefcase (career) | `<x-heroicon-o-briefcase>` | home, career, migration |
| Heart (support) | `<x-heroicon-o-heart>` | home, support |
| Academic cap (graduation) | `<x-heroicon-o-academic-cap>` | education pages |
| Shield check (security) | `<x-heroicon-o-shield-check>` | migration, support |
| Phone (contact) | `<x-heroicon-o-phone>` | contact, support |
| Envelope (email) | `<x-heroicon-o-envelope>` | contact |
| Map pin (location) | `<x-heroicon-o-map-pin>` | contact |
| Document text (visa) | `<x-heroicon-o-document-text>` | migration pages |
| Home (accommodation) | `<x-heroicon-o-home>` | support, migration |
| Calendar (dates) | `<x-heroicon-o-calendar>` | study tours |
| Cog (settings/VET) | `<x-heroicon-o-cog-6-tooth>` | VET page |
| Building office | `<x-heroicon-o-building-office>` | migration, SCSA |
| Users (people) | `<x-heroicon-o-user-group>` | migration, about |
| Check circle | `<x-heroicon-o-check-circle>` | credential-card |
| Hamburger menu | `<x-heroicon-o-bars-3>` | nav |
| X mark (close) | `<x-heroicon-o-x-mark>` | nav mobile close |

**Keep as custom SVG:**
- Quotation mark (testimonial) — decorative, no heroicon match
- WhatsApp logo (widget) — brand icon

---

## Second-Pass Audit (Deep Audit)

**Date:** 2026-03-10
**Scope:** Full re-examination — JS behaviour, image coverage, accessibility, footer, routes

### D1. Dead code in GSAP marquee [SEVERITY: LOW]
- **File:** `resources/js/app.js` (line ~113)
- `gsap.getById?.(track)` — GSAP has no `getById` method. Optional chaining prevented a runtime error, but the call was dead code.
- **Fix:** Removed the `gsap.getById?.(track) ||` prefix, kept only `gsap.getTweensOf(track).forEach(t => t.pause())`
- **Status:** [x] FIXED

### D2. Component `alt` text always empty [SEVERITY: MEDIUM]
- **Files:** `hero.blade.php`, `content-split.blade.php`, `card.blade.php`
- All three rendered `alt=""` regardless of context. Images in these components are content-relevant, not decorative.
- **Fix:** Added optional `$alt` prop (default `''`) to each component and wired it to the `<img>` tag. All call sites now pass descriptive alt text.
- **Status:** [x] FIXED

### D3. Pages below 3-image minimum [SEVERITY: MEDIUM]
- 22 pages used `<x-hero>` without an `:image` prop (solid bg-gray-800 fallback)
- 10 `<x-content-split>` usages had no `:image` prop (striped placeholder)
- Many pages had no inline images at all
- **Fix:** Sourced ~64 images (22 heroes + 42 content) via Freepik stock search and Mystic AI generation. Every page now has ≥3 images. Added "visual break" sections where needed for inline images.
- **Status:** [x] FIXED

### D4. Footer credential badges are plain text [SEVERITY: LOW]
- **File:** `resources/views/components/footer.blade.php` (lines 73-76)
- Showed `QEAC`, `Migration Alliance`, `MIA` as text-in-a-border-box. Actual SVG logos existed at `public/images/credentials/`.
- **Fix:** Replaced text badges with `<img>` tags using credential SVGs. Added Australian Bar Association (previously missing from footer). Styled with `brightness-0 invert opacity-60` to match footer theme.
- **Status:** [x] FIXED

### D5. Footer Privacy & Terms links are stubs [SEVERITY: LOW]
- **File:** `resources/views/components/footer.blade.php` (lines 84-85)
- Both `href="#"` — no real pages existed.
- **Fix:** Created `/privacy` and `/terms` routes + placeholder pages with full legal content. Updated footer links to use `route('privacy')` and `route('terms')`. Added smoke tests.
- **Status:** [x] FIXED

### D6. Sub-page heroes have no background images [SEVERITY: INFO]
- 22 sub-pages used `<x-hero>` without an `:image` prop — they rendered with solid `bg-gray-800` + dark overlay.
- **Fix:** Resolved as part of D3 — all heroes now have sourced images.
- **Status:** [x] FIXED (via D3)

### D7. FAQ content is factory-generated [SEVERITY: INFO]
- FAQs are seeded via `Faq::factory()->count(N)` with random faker text.
- The wireframes have real FAQ content. No action taken — awaiting client approval of wireframe content.
- **Status:** [ ] DEFERRED — pending client content

---

## Deep Audit — Image Inventory

### Hero Images (22 sourced → `public/images/heroes/`)

| Page | File | Source |
|---|---|---|
| `/` | `home.webp` | Freepik stock |
| `/about` | `about.webp` | Freepik stock |
| `/services/education` | `services-education.webp` | Freepik stock |
| `/services/education/school` | `services-education-school.webp` | Freepik stock |
| `/services/education/english` | `services-education-english.webp` | Freepik stock |
| `/services/education/vet-tafe` | `services-education-vet-tafe.webp` | Freepik stock |
| `/services/education/degrees` | `services-education-degrees.webp` | Freepik stock |
| `/services/migration` | `services-migration.webp` | Freepik stock |
| `/services/migration/student-visas` | `services-migration-student-visas.webp` | Freepik stock |
| `/services/migration/graduate-work` | `services-migration-graduate-work.webp` | Freepik stock |
| `/services/migration/permanent-residence` | `services-migration-permanent-residence.webp` | Freepik stock |
| `/services/career` | `services-career.webp` | Freepik stock |
| `/services/student-support` | `services-student-support.webp` | Freepik stock |
| `/programs` | `programs.webp` | Freepik stock |
| `/programs/buddy-programme` | `programs-buddy-programme.webp` | Freepik stock |
| `/programs/study-tours` | `programs-study-tours.webp` | Freepik stock |
| `/programs/scsa-associate` | `programs-scsa-associate.webp` | Freepik stock |
| `/programs/executive-internship` | `programs-executive-internship.webp` | Mystic AI |
| `/why-australia` | `why-australia.webp` | Mystic AI |
| `/faq` | `faq.webp` | Freepik stock |
| `/admission-requirements` | `admission-requirements.webp` | Freepik stock |
| `/fees` | `fees.webp` | Freepik stock |
| `/blog` | `blog.webp` | Freepik stock |

### Content Images (42 sourced)

| Directory | Files | Source |
|---|---|---|
| `home/` | `history-perth-office.webp`, `student-consultation.webp` | Freepik stock |
| `about-partners/` | `university-campus.webp`, `partnership-signing.webp` | Mystic AI |
| `about-team/` | `office-exterior.webp`, `team-meeting.webp`, `international-operations.webp` | Mystic AI |
| `services-education/` | `education-guidance.webp`, `campus-library.webp` | Mixed |
| `services-education-english/` | `elicos-class.webp`, `foundation-studies.webp` | Mystic AI |
| `services-education-school/` | `parent-child-school.webp`, `school-campus.webp` | Mystic AI |
| `services-education-vet-tafe/` | `vet-training.webp`, `tafe-campus.webp` | Mystic AI |
| `services-migration/` | `visa-consultation.webp`, `migration-pathway.webp` | Mystic AI |
| `services-migration-student-visas/` | `visa-application.webp`, `student-arrival.webp` | Mystic AI |
| `services-migration-graduate-work/` | `graduate-at-desk.webp`, `career-fair.webp` | Mystic AI |
| `services-migration-permanent-residence/` | `new-home.webp`, `community-life.webp` | Mystic AI |
| `services-career/` | `career-workshop.webp` | Mystic AI |
| `services-student-support/` | `orientation-tour.webp`, `parent-reassurance.webp` | Mystic AI |
| `programs/` | `program-activity.webp`, `student-event.webp` | Mystic AI |
| `programs-scsa-associate/` | `classroom.webp`, `curriculum-materials.webp` | Mystic AI |
| `programs-executive-internship/` | `professional-mentoring.webp`, `office-work.webp` | Mystic AI |
| `faq/` | `student-question.webp`, `info-session.webp` | Mystic AI |
| `admission-requirements/` | `study-materials.webp`, `checklist.webp` | Mystic AI |
| `fees/` | `transparent-pricing.webp`, `scholarship.webp` | Mystic AI |
| `blog/` | `writing-blogging.webp`, `library-reading.webp` | Mystic AI |
| `contact/` | `office-reception.webp`, `consultation-room.webp`, `perth-cbd.webp` | Mystic AI |

---

## New Routes Added

| Route | Name | View |
|---|---|---|
| `GET /privacy` | `privacy` | `pages.privacy` |
| `GET /terms` | `terms` | `pages.terms` |

**Total routes:** 29 (27 original + 2 new)
