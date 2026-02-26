---
name: copywriting
description: >-
  Writes and reviews website copy for Blue Education. Activates when working on
  page content, section copy, headlines, CTAs, testimonials, taglines, or any
  written content for the website; or when the user mentions copy, content,
  headline, tone, writing style, or asks to review/rewrite text on a page.
---

# Blue Education Copywriting

## When to Apply

Activate this skill when:

- Writing or reviewing any section of website copy
- Proposing headline or CTA alternatives
- Reviewing tone or style of existing content
- Working through any file in `DOCS/website-content/`

## Reference

Always load the style guide before writing:
`@.claude/skills/copywriting/references/blue-education-style.md`

Use `@DOCS/docs/` as the single source of truth for all facts, stats, and claims.

---

## SOP — Page-by-Page, Section-by-Section Review

### Opening a new page

Before reviewing any section:

1. **Read in parallel:**
   - The content org file (`DOCS/website-content/v2/`)
   - The relevant `DOCS/docs/` fact file(s)
   - Scan `DOCS/archive/website-extraction/website-content.org` for content that may be missing from the org file

2. **Cross-check other org files** before adding new content — check if the topic already has a dedicated page. Apply progressive disclosure: link to that page rather than duplicating content here.

3. **Validate strong claims online** (e.g. "one of the few", rankings, official recognitions) before including them. If unverifiable, soften or remove.

---

### Section review process

Work through each section of the page in order. For each section:

#### Step 0 — Section & layout audit
Before writing a single word, assess the section structurally:

- **Does this section belong here?** Flag if the content belongs on another page, is a duplicate, or is missing and needed.
- **Is the layout type right for this content?** If the current spec doesn't suit the content, flag it as unsuitable and offer 2–3 alternatives. Keep it brief — just name the option and what it solves.
- **How does it sit between its neighbours?** Flag back-to-back dark sections, repeated themes, or jarring tone shifts.
- **Is the section necessary?** If it duplicates another section or adds no distinct reader value, recommend cutting or merging.

Do not include reasoning paragraphs. Present findings as short, direct flags. Only proceed to Step 1 once layout is confirmed.

#### Step 1 — Present current copy
Show the existing copy. Flag issues clearly:
- Parallel sentence structures (rejected pattern)
- Sales language ("free", "no obligations")
- Brand-speak or clichés
- Outdated or unverifiable stats
- Content missing from the archive
- Audience mismatch (wrong tone for the page's primary reader)

#### Step 2 — Offer alternatives
Provide **3–5 labelled options** (Option A, B, C...). Each option must:
- Explore a genuinely different angle or framing — not minor variations of the same idea
- Follow the style guide
- Be factually accurate per source docs
- Vary sentence structure from other options

Include a brief recommendation with reasoning.

#### Step 3 — Iterate on user direction
User picks an option or directs changes. Iterate on specific elements only (headline, body, CTA separately). Do not rewrite sections the user hasn't asked to change.

#### Step 4 — Update file
Only update the file when the user confirms. Use the Edit tool. Australian spelling throughout (enrolment, not enrollment; programme, not program where appropriate).

#### Step 5 — Move to next section
After updating, immediately present the next section for review without waiting to be asked.

---

### Layout decisions

When reviewing a section, also consider whether the current layout spec is:
- **Developer-readable** — specific enough that a developer can implement without guessing. Include desktop/mobile behaviour, interaction states, and the reasoning behind layout choices.
- **Visually appropriate** — not a wall of text. For sections with multiple items, consider whether a grid, timeline, list, or grouped layout is more appropriate.
- **SEO-safe** — avoid tabs, accordions, or JS-gated content that hides copy from search engines. All content should be visible in the DOM by default.

When images are required, provide:
- A descriptive **AI generation prompt** (specific enough for Midjourney/DALL-E)
- A **stock photo search query** for royalty-free sites (Unsplash, Pexels, Shutterstock)
- An `IMAGE-ALT` text

---

### Progressive disclosure rules

- If content has a dedicated page → keep the section brief + link to that page
- If no dedicated page exists → provide fuller content within this section
- Always use internal org file links in the format `[[/url-path][Link text →]]`
- When adding links for progressive disclosure, note which org file the destination corresponds to

---

### Page completion

When all sections are reviewed and confirmed:
1. Rename the file with a `DONE-` prefix using the Bash tool
2. Open the next file in sequence and begin the review

---

## Core Principles

1. **Docs first** — never write a stat or claim without verifying it in `DOCS/docs/`
2. **Vary structure** — no two consecutive sentences with the same pattern
3. **Concrete over abstract** — specific examples beat general statements
4. **Reader-first** — frame benefits from the reader's perspective, not the company's
5. **No sales language** — avoid "free", "no obligations", "act now", "don't miss out"
6. **Western Australia focus** — name Perth, name WA institutions, don't compare negatively to other states
7. **Earned credibility** — let facts prove the point; don't claim trustworthiness directly
8. **Audience awareness** — identify who the primary reader is before writing (parent vs student vs professional)

---

## Common Pitfalls

- Writing parallel sentence structures back-to-back
- Using brand-speak ("boutique", "world-class", "passionate")
- Self-congratulatory honesty framing ("we tell the truth even when it hurts us")
- Comparing WA negatively to other Australian states
- Adding stats not found in the source docs
- Salesy CTAs with "free" or "no obligations"
- Defensive copy that apologises for being a small agency
- Repeating the same key phrase used in the hero headline later on the same page
- Two consecutive full-width dark sections (e.g. highlight card followed immediately by CTA banner) — resolve by merging, removing, or changing one section's treatment
- Australian spelling: always use "enrolment", "programme" (for named programmes), "organisation", "colour"
