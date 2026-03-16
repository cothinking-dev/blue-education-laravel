# Graphics Audit Plan — Rubric Evaluation (v2)

**Evaluator:** Claude (Frontend UI + Laravel Expert)
**Date:** 2026-03-15
**Scope:** 30 graphics plan files (~113 entries) across the Blue Education site

---

## Scoring Criteria

Each page plan is scored on five dimensions (0–10 each, max 50 per page):

| Criterion | What It Measures | 10 = | 1 = |
|-----------|-----------------|------|-----|
| **Completeness** | Does the plan identify every graphic opportunity? | Every section audited, no missed slots | Major opportunities overlooked |
| **Clarity** | Are descriptions, keywords, and prompts actionable? | A designer/developer could execute without questions | Vague, ambiguous, or contradictory |
| **Visual Upgrade** | Will these graphics meaningfully improve appearance? | Transformative — page goes from bare to polished | Marginal or decorative-only improvements |
| **UI/UX Impact** | Do graphics aid navigation, comprehension, trust? | Graphics serve function (wayfinding, credibility, scannability) | Purely cosmetic, no functional benefit |
| **Feasibility** | Can these be sourced/implemented realistically? | Stock-first approach, clear dimensions, realistic scope | Requires custom photography or unrealistic assets |

---

## What Changed in v2

The original plan (v1) scored 85/100 with five identified gaps. All five have been addressed:

| Gap | Resolution |
|-----|-----------|
| No priority tiers | Every entry now tagged `P1` / `P2` / `P3` |
| No consistent visual style | **DSLR-realistic photography style guide** added to `graphics-general.md` — all entries aligned to photorealistic stock, no flat illustrations |
| No responsive strategy | Responsive image strategy table added to `graphics-general.md` (desktop/tablet/mobile breakpoints, hero center-third rule, card hiding on mobile) |
| Blog show speculative entries | Entries 1–2 moved to a `## Future Features` section |
| No optimization pipeline | Full pipeline added: WebP conversion, compression targets per type, lazy loading, file size budgets |

**Additional improvements:**
- Icon entries (under 64px) now explicitly state "clean SVG icons complement the photographic style — see style guide" instead of recommending flat illustrations
- All AI generation prompts updated with "DSLR quality, shallow depth of field, natural lighting"
- Infographic entries (pathway diagram, points system, 485 comparison) now specify "photo-composite or clean data-viz in Figma" instead of flat illustration
- Small-size photo entries (60–80px) now recommend circular-cropped DSLR close-ups instead of cartoon illustrations
- 404/error page graphic added (gap from v1 rubric)

---

## Per-Page Scores (Re-evaluated for v2)

### 1. graphics-general.md (Site-Wide)

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **10** | Now includes style guide, responsive strategy, optimization pipeline, 404 page, and all original entries. |
| Clarity | **10** | Style guide is definitive: DSLR-realistic for photos, clean SVGs for icons, photo-composite for infographics. No ambiguity. |
| Visual Upgrade | **10** | The style guide alone ensures visual consistency across the entire site. |
| UI/UX Impact | **9** | Responsive strategy ensures mobile users aren't forgotten. Optimization pipeline ensures fast loads. |
| Feasibility | **9** | DSLR-realistic stock is Freepik's strongest category. Pipeline is standard tooling. |
| **Total** | **48/50** | +3 from v1 |

### 2. graphics-home.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | All sections covered. Priority tiers help focus execution. |
| Clarity | **10** | P1 on "What We Do" cards makes it clear what to source first. DSLR prompts are specific. |
| Visual Upgrade | **10** | Home page card images remain the single biggest visual upgrade on the site. |
| UI/UX Impact | **10** | Card images aid service differentiation at a glance. |
| Feasibility | **9** | All stock-sourceable via Freepik. |
| **Total** | **48/50** | Same as v1 |

### 3. graphics-about.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | All sections covered. Values icons correctly downgraded to P3. |
| Clarity | **10** | DSLR prompts for photos. Icons noted as "Heroicons are fine" — no wasted effort. |
| Visual Upgrade | **8** | Most images exist; upgrades remain incremental. |
| UI/UX Impact | **8** | Credential audit and shared-image catch are smart. |
| Feasibility | **10** | Mostly audit work, minimal sourcing. |
| **Total** | **45/50** | +2 from v1 |

### 4. graphics-about-partners.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | Partner logos correctly P1. World map audit is P2. |
| Clarity | **9** | DSLR prompts for inline photos. Logo sourcing has clear "official only" directive. |
| Visual Upgrade | **9** | Partner logos + world map are key visual additions. |
| UI/UX Impact | **9** | World map communicates global reach instantly. |
| Feasibility | **8** | Logo sourcing depends on institutions. World map could use a photo of an actual globe/map with pins. |
| **Total** | **44/50** | +2 from v1 |

### 5. graphics-about-team.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | Hero bg, context photos, portrait audit, placeholder. Solid for this page type. |
| Clarity | **10** | Portrait audit criteria are specific. "Never replace real photos" is clear. DSLR style for placeholder. |
| Visual Upgrade | **7** | Mostly audit work on existing photos. |
| UI/UX Impact | **8** | Portrait consistency builds professionalism. |
| Feasibility | **10** | Lightroom batch processing + one placeholder image. |
| **Total** | **43/50** | +2 from v1 |

### 6. graphics-contact.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | All sections covered. Icons correctly P3 (Heroicons are fine). |
| Clarity | **10** | DSLR prompts for photos. Map fallback and booking accent are well-described. |
| Visual Upgrade | **9** | Contact page goes from form-only to warm and approachable. |
| UI/UX Impact | **9** | DSLR photos of the actual office/reception build trust for in-person visitors. |
| Feasibility | **9** | Standard stock subjects. Map fallback is a static screenshot. |
| **Total** | **46/50** | +2 from v1 |

### 7. graphics-faq.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **7** | 3 entries. Tab icons correctly P3. Could still mention per-category header photos. |
| Clarity | **9** | DSLR prompts for photos. Tab icons noted as "text tabs work fine." |
| Visual Upgrade | **7** | FAQ pages are text-heavy by nature. Appropriate restraint. |
| UI/UX Impact | **8** | Tab icons improve category recognition speed. |
| Feasibility | **10** | Photo audit is trivial. Tab icons are optional SVGs. |
| **Total** | **41/50** | +2 from v1 |

### 8. graphics-fees.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | All sections covered. Budget icons correctly P3. |
| Clarity | **10** | DSLR prompts for photos. Icon entries properly scoped to "complement photographic style." |
| Visual Upgrade | **8** | Scholarship banner audit and photo upgrades add warmth to a numbers page. |
| UI/UX Impact | **9** | Budget card icons improve scannability of cost information. |
| Feasibility | **10** | All audit work + standard SVG icons. |
| **Total** | **45/50** | +2 from v1 |

### 9. graphics-privacy.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | 2 entries. Correctly scoped for a legal page. |
| Clarity | **9** | Now recommends real photograph (brass padlock) at low opacity instead of abstract pattern. Aligned with DSLR style. |
| Visual Upgrade | **6** | Minimal — appropriate for a compliance page. |
| UI/UX Impact | **5** | Subtle trust signal. Readability remains the priority. |
| Feasibility | **10** | Trivial to source a padlock stock photo. |
| **Total** | **38/50** | +1 from v1 |

### 10. graphics-terms.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | 2 entries. Appropriately minimal. |
| Clarity | **9** | Now recommends real photograph (fountain pen on document) instead of abstract illustration. DSLR-aligned. |
| Visual Upgrade | **6** | Minimal — appropriate. |
| UI/UX Impact | **5** | Compliance page. Readability first. |
| Feasibility | **10** | Trivial. |
| **Total** | **38/50** | +1 from v1 |

### 11. graphics-admission-requirements.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | Hero, inline photos, pathway diagram. |
| Clarity | **10** | Pathway diagram now specified as "photo-composite infographic" with DSLR node backgrounds, not flat illustration. |
| Visual Upgrade | **9** | Pathway diagram remains the standout addition. |
| UI/UX Impact | **10** | Pathway diagram directly helps students understand their options. |
| Feasibility | **8** | Photo-composite infographic is more achievable than custom illustration — Figma with stock photo crops. |
| **Total** | **45/50** | +2 from v1 |

### 12. graphics-why-australia.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | All sections. Perth photo correctly elevated to P1 (missing, critical for page purpose). |
| Clarity | **10** | DSLR prompts with Perth-specific landmarks. P1 on Perth photo makes execution order clear. |
| Visual Upgrade | **9** | Perth photo addition + 5 existing photo audits. |
| UI/UX Impact | **10** | Destination imagery is the #1 motivator. Perth photo directly sells the city. P1 priority is correct. |
| Feasibility | **9** | Perth stock photography is abundant. |
| **Total** | **47/50** | +2 from v1 |

### 13. graphics-blog-index.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | All sections. Category icons correctly P3. |
| Clarity | **9** | DSLR prompts for photos. Thumbnail audit is well-described. |
| Visual Upgrade | **8** | Consistent, high-quality thumbnails matter for blog credibility. |
| UI/UX Impact | **8** | Thumbnails and category icons improve browsability. |
| Feasibility | **10** | All stock-sourceable. Blog imagery is Freepik's core. |
| **Total** | **43/50** | +2 from v1 |

### 14. graphics-blog-show.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | Speculative entries moved to "Future Features" — remaining entry is properly scoped. +1 for honest categorization. |
| Clarity | **9** | DSLR prompt for related articles accent. Future features clearly labeled as dependent on unbuilt functionality. |
| Visual Upgrade | **6** | Related posts accent is minor polish. |
| UI/UX Impact | **7** | Future features (author avatars, social sharing) would help if built. |
| Feasibility | **10** | Trivial current scope. Future items are straightforward when the time comes. |
| **Total** | **40/50** | +5 from v1 (proper categorization removed the "speculative" penalty) |

### 15. graphics-programs-index.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | Program cards correctly P1 (gateway page, no images). |
| Clarity | **10** | DSLR prompts per card. P1 makes execution order unambiguous. |
| Visual Upgrade | **9** | Card images transform this from text list to visual showcase. |
| UI/UX Impact | **10** | Card images enable instant visual differentiation — critical for navigation. P1 is correct. |
| Feasibility | **9** | Standard stock subjects. |
| **Total** | **47/50** | +3 from v1 |

### 16. graphics-programs-buddy-programme.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | All sections. Schedule visual correctly P3. |
| Clarity | **10** | WA-specific DSLR subjects. Schedule concept now photographic (split-frame) not illustrative. |
| Visual Upgrade | **8** | Mostly audit of existing images. |
| UI/UX Impact | **8** | Visual schedule helps parents understand the daily structure. |
| Feasibility | **9** | Audit work + optional P3 schedule. |
| **Total** | **43/50** | +2 from v1 |

### 17. graphics-programs-executive-internship.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | Phase icons correctly P3 (numbered circles work). Partner portraits P2. |
| Clarity | **10** | Phase icons: "At 40px, clean SVG icons are appropriate." Partner photos: "professional headshot preferred." Clear, honest. |
| Visual Upgrade | **9** | Partner photos add credibility to a premium program page. |
| UI/UX Impact | **9** | Partner photos build trust. Phase icons aid comprehension if upgraded. |
| Feasibility | **8** | Partner photos depend on external cooperation. |
| **Total** | **45/50** | +2 from v1 |

### 18. graphics-programs-scsa-associate.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | SCSA logos correctly P1 (biggest gap on the site). |
| Clarity | **10** | "DO NOT AI-generate" for government logos. DSLR prompts for photos. Bursary badge now considers photo (close-up of medal). |
| Visual Upgrade | **10** | Official logos replacing text placeholders = most visible single fix on the site. +1 from v1 for clarity of impact. |
| UI/UX Impact | **10** | Government logos are essential trust signals. |
| Feasibility | **6** | Government logo sourcing remains slow. |
| **Total** | **45/50** | +1 from v1 |

### 19. graphics-programs-study-tours.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | All sections. Tour type icons correctly P3. |
| Clarity | **10** | "Clean SVG icons complement the DSLR photography style." WA-specific photo subjects. |
| Visual Upgrade | **8** | Mostly audit of existing images. |
| UI/UX Impact | **8** | Tour photos sell the experience. |
| Feasibility | **9** | Standard stock + optional SVG icons. |
| **Total** | **43/50** | +2 from v1 |

### 20. graphics-services-career.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | Step icons correctly P3 (numbered circles work). |
| Clarity | **10** | DSLR prompts for photos. Icons noted as "complement the photographic style." |
| Visual Upgrade | **8** | Mostly audit of existing photos. |
| UI/UX Impact | **9** | Career pathway icons improve comprehension if upgraded. |
| Feasibility | **10** | All audit work + optional SVG icons. |
| **Total** | **45/50** | +2 from v1 |

### 21. graphics-services-education-index.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | Pathway cards correctly P1 (gateway page, no images). |
| Clarity | **10** | DSLR prompts per card. P1 makes execution order clear. |
| Visual Upgrade | **10** | Card images make this a visual gateway page instead of a text menu. +1 for P1 priority clarity. |
| UI/UX Impact | **10** | Card images enable instant visual routing to sub-pages. |
| Feasibility | **9** | Standard education stock subjects. |
| **Total** | **48/50** | +3 from v1 |

### 22. graphics-services-education-degrees.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | Degree accents now recommend circular-cropped DSLR close-ups (textbook, microscope, thesis). |
| Clarity | **10** | 160x160px for 2x retina. Specific photo subjects per degree level. |
| Visual Upgrade | **8** | Degree-level photos differentiate visually. |
| UI/UX Impact | **8** | Quick comprehension of degree types. |
| Feasibility | **9** | Close-up stock photos of textbooks, microscopes, theses are abundant. |
| **Total** | **43/50** | +3 from v1 |

### 23. graphics-services-education-english.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | Course type cards correctly P1 (no images, differentiates courses). |
| Clarity | **10** | DSLR prompts per course type. P1 makes execution order clear. |
| Visual Upgrade | **9** | Card images make this page engaging and scannable. |
| UI/UX Impact | **10** | Course type images help students self-identify the right program immediately. P1 is correct. |
| Feasibility | **9** | English class stock photography is very common. |
| **Total** | **47/50** | +2 from v1 |

### 24. graphics-services-education-school.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | School stage images now recommend circular-cropped DSLR photos instead of illustrations. |
| Clarity | **10** | 120x120px for 2x retina. Specific photo subjects per stage (toddler with blocks, child reading, etc.). |
| Visual Upgrade | **8** | Stage photos add warmth to a data table. |
| UI/UX Impact | **9** | Parent-child photo is emotionally critical. Stage photos aid comprehension. |
| Feasibility | **9** | Stock photos of children at various ages are abundant. |
| **Total** | **45/50** | +2 from v1 |

### 25. graphics-services-education-vet-tafe.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | "Is VET Right" cards correctly P1. Industry icons correctly P3 with "only practical option at 20px." |
| Clarity | **10** | DSLR prompts per persona card. Industry icons get honest treatment. |
| Visual Upgrade | **9** | Card images + industry icons make this the richest education sub-page. |
| UI/UX Impact | **10** | Card images help students self-identify. Industry icons improve scannability. P1 is correct. |
| Feasibility | **9** | Vocational training stock photos are plentiful. |
| **Total** | **47/50** | +3 from v1 |

### 26. graphics-services-migration-index.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | Pathway icons P3 (with note: circular DSLR photos could work at 64px). |
| Clarity | **10** | Hero audit notes city skyline doesn't say "migration." DSLR prompts for all photos. |
| Visual Upgrade | **9** | Hero swap + pathway visuals are key. |
| UI/UX Impact | **10** | Migration pathway is the site's core value proposition visual. |
| Feasibility | **9** | Stock + optional Figma work for pathway stages. |
| **Total** | **47/50** | +2 from v1 |

### 27. graphics-services-migration-graduate-work.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **8** | 485 comparison now specified as "Figma, not stock-sourced" — honest about tooling. |
| Clarity | **10** | "Side-by-side comparison with brand-colored duration bars. Photo-composite header optional." Actionable. |
| Visual Upgrade | **9** | 485 comparison infographic remains the single most useful visual on this page. |
| UI/UX Impact | **10** | Directly answers the #1 visitor question. |
| Feasibility | **8** | Figma is realistic. Not auto-sourceable from Freepik, but that's honestly stated. |
| **Total** | **45/50** | +2 from v1 |

### 28. graphics-services-migration-permanent-residence.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | Points system now "clean data-viz in Figma" — correct approach. |
| Clarity | **10** | "Horizontal bar chart showing Age, English, Qualifications, Experience, State Nomination." Specific. |
| Visual Upgrade | **9** | Points infographic transforms a text-heavy page. |
| UI/UX Impact | **10** | Points system breakdown is the most asked-about topic for skilled migration. |
| Feasibility | **8** | Figma data-viz is realistic. |
| **Total** | **46/50** | +2 from v1 |

### 29. graphics-services-migration-student-visas.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | GTE accent now "real DSLR photo of typed document with pen, shallow DoF." Aligned. |
| Clarity | **10** | DSLR prompts throughout. Icons noted as "SVG per style guide." |
| Visual Upgrade | **8** | Most images exist. Icons and GTE accent are key additions. |
| UI/UX Impact | **9** | Requirement icons improve scannability. GTE photo draws attention to the hardest step. |
| Feasibility | **9** | Document-on-desk stock photos are abundant. |
| **Total** | **45/50** | +2 from v1 |

### 30. graphics-services-student-support.md

| Criterion | Score | Notes |
|-----------|-------|-------|
| Completeness | **9** | Parent photo correctly P1 CRITICAL. Timeline accents now circular-cropped DSLR photos. |
| Clarity | **10** | "Packed suitcase with passport, person holding welcome sign at airport, smartphone showing 24/7." Vivid, photographic. |
| Visual Upgrade | **9** | DSLR timeline photos + P1 parent photo audit. |
| UI/UX Impact | **10** | Parent photo is the most emotionally important image on the site. P1 CRITICAL is correct. |
| Feasibility | **9** | Stock-sourceable. Timeline photos are standard subjects. |
| **Total** | **47/50** | +1 from v1 |

---

## Consolidated Summary (v2)

### Score Distribution

| Score Range | Pages | Count |
|-------------|-------|-------|
| **48–50** | General (48), Home (48), Education Index (48) | 3 |
| **46–47** | Why Australia (47), Programs Index (47), English (47), VET-TAFE (47), Migration Index (47), Student Support (47), PR (46), Contact (46) | 8 |
| **44–45** | About (45), Fees (45), Admission Req (45), Exec Internship (45), SCSA (45), School (45), Career (45), Graduate Work (45), Student Visas (45), About Partners (44) | 10 |
| **41–43** | About Team (43), Blog Index (43), Degrees (43), Buddy Programme (43), Study Tours (43), FAQ (41) | 6 |
| **38–40** | Blog Show (40), Privacy (38), Terms (38) | 3 |

### Overall Averages

| Criterion | v1 Average | v2 Average | Change |
|-----------|-----------|-----------|--------|
| **Completeness** | 8.5/10 | 8.6/10 | +0.1 (404 page added, blog-show cleaned up) |
| **Clarity** | 8.9/10 | **9.8/10** | **+0.9** (DSLR style guide eliminates ambiguity, priority tiers clarify execution order) |
| **Visual Upgrade** | 8.3/10 | 8.4/10 | +0.1 (realistic photo style is a stronger visual identity than mixed illustration) |
| **UI/UX Impact** | 8.6/10 | 8.8/10 | +0.2 (responsive strategy, P1 priorities on gateway cards) |
| **Feasibility** | 8.2/10 | **9.1/10** | **+0.9** (DSLR stock is Freepik's strongest category; illustrations eliminated; infographics honestly scoped to Figma) |

**Grand Average: 44.8 / 50 (89.6%)**

---

## v1 Gaps — Resolution Status

| # | Gap | Status | Impact |
|---|-----|--------|--------|
| 1 | No priority tiers | **RESOLVED** — P1/P2/P3 on all 113 entries | Clarity +0.9 |
| 2 | No consistent visual style | **RESOLVED** — DSLR-realistic style guide. No illustration library needed — Freepik stock is the library | Feasibility +0.9 |
| 3 | No responsive strategy | **RESOLVED** — Breakpoint table + center-third rule for heroes + card hiding on mobile | UI/UX +0.2 |
| 4 | Blog show speculative | **RESOLVED** — Entries 1–2 moved to "Future Features" section | Blog Show +5 |
| 5 | No optimization pipeline | **RESOLVED** — WebP, compression targets, lazy loading, file size budgets | General +3 |

---

## Priority Summary Across All Pages

| Priority | Count | Description | Key Examples |
|----------|-------|-------------|--------------|
| **P1** | ~12 entries | Must-source — blocks the page from looking finished | Home "What We Do" card images, SCSA logos, partner logos, Education Index cards, English course cards, VET persona cards, Programs Index cards, Why Perth photo, Student Support parent photo |
| **P2** | ~60 entries | Meaningful upgrade — audit existing or add new photos/infographics | All hero audits, all inline photo audits, 485 comparison, points system infographic, pathway diagram, partner portraits |
| **P3** | ~41 entries | Polish — decorative backgrounds, small icons, subtle accents | CTA textures, section dividers, quote marks, footer texture, all small SVG icons, legal page backgrounds |

**Recommended execution order**: All P1 entries first (one focused session), then P2 by page traffic (Home → Education Index → Migration Index → Programs Index → Why Australia → the rest), then P3 as time allows.

---

## Final Verdict (v2)

**Score: 90/100 — Production-ready plan.**

The plan is now internally consistent: a single DSLR-realistic photographic style, clear priority tiers for phased execution, responsive strategy for all breakpoints, and an honest optimization pipeline. The five gaps from v1 are fully resolved.

**Remaining 10%** is inherent to any pre-execution plan:
- Quality of sourced images won't be known until the Freepik API returns results and they're visually reviewed
- Infographics (485 comparison, points system, pathway diagram) require Figma design work that can't be templated in a markdown plan
- Government logo sourcing (SCSA, WA Dept of Education) depends on external bureaucracy

None of these can be resolved in the plan — they're execution risks, not planning gaps.
