# Component Audit
**Date**: 2026-03-16
**Site spacing standard**: `py-14 px-8 lg:px-16 max-w-7xl mx-auto`, `gap-6` for card grids, `gap-12` for splits
**Design tokens**: `primary-50`–`primary-950`, `--radius-corner: 0.5rem`, `--radius-corner-lg: 1rem`, Inter font

---

## hero.blade.php
**Used on**: ~29 pages | **Props**: `title`, `subtitle?`, `image?`, `alt`, `overlay`, `breadcrumbs?`, `badge?`, `variant` (centered|left|light|split), `height`, `position`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| `light` variant uses `py-20` while pages use `py-14` for sections below — inconsistent vertical rhythm | Spacing | Low | Acceptable for hero; intentional extra breathing room |
| `split` variant uses `py-16 lg:py-20` while `centered`/`left` use `py-16 lg:py-20` — consistent within hero | Spacing | None | OK |
| Default `centered`/`left` hero image has no `loading="lazy"` — this is correct since hero is above the fold | Image | None | OK — hero should load eagerly |
| `split` variant image also lacks `loading="lazy"` — correct for above-the-fold hero | Image | None | OK |
| `split` variant image placeholder uses inline hatching style — no fallback `alt` on the placeholder div | Accessibility | Low | Decorative placeholder; acceptable |
| Default variant `alt` prop defaults to empty string — callers must provide meaningful alt text | Accessibility | Med | Consider requiring non-empty `alt` when `image` is provided, or at minimum document the expectation |
| `light` variant does not have a `max-w-7xl` wrapper — uses `max-w-3xl` which is fine for centered text but breadcrumbs are also constrained | Spacing | Low | Acceptable design choice |
| `height` passed directly into `style` attribute — no sanitization | Security | Low | Only used internally; add comment or type hint |
| `position` passed into inline style `object-position` — no validation | Security | Low | Same as above; only internal usage |

### Notes
- The hero has been recently refactored with a good multi-layer overlay system (brand blue gradient + vignette).
- Four well-differentiated variants cover all use cases across the site.
- `text-pretty` used consistently — good for line break control.
- The `centered` variant constrains to `max-w-3xl`, the `left` variant uses `max-w-7xl` — well thought out.

---

## cta-banner.blade.php
**Used on**: ~27 pages | **Props**: `title`, `subtitle`, `primaryText`, `primaryHref`, `secondaryText?`, `secondaryHref`, `phone`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Uses `max-w-4xl` instead of site standard `max-w-7xl` | Spacing | Low | Intentional for centered layout — narrow is better for CTAs |
| Uses `py-16` instead of site standard `py-14` | Spacing | Med | Change to `py-14` for consistency with page sections, or accept as intentional CTA emphasis |
| No `lg:px-16` — only `px-8` | Spacing | Med | On large screens, CTA is already constrained by `max-w-4xl` so `px-8` alone is fine. No visual issue. |
| `secondaryHref` defaults to `#` — if `secondaryText` is null this is harmless, but if someone provides text without href it links to `#` | Accessibility | Low | Consider removing default `#` and requiring explicit href when secondaryText is provided |
| Phone link uses regex to strip non-digit chars — solid implementation | Accessibility | None | Good |
| No `aria-label` on the phone link — "Call us: +61..." is sufficiently descriptive from surrounding text | Accessibility | Low | Could add `aria-label="Call Blue Education"` for screen readers that read the link out of context |
| No `role="region"` or `aria-labelledby` on the section | Accessibility | Low | Adding landmark would help assistive tech identify the CTA block |

### Notes
- Clean, focused component. Good use of `x-btn` for primary action.
- `text-pretty` on title and subtitle — good.
- Colour choices are solid: `bg-primary-800` background with `primary-200`/`primary-300` text hierarchy.

---

## content-split.blade.php
**Used on**: ~9 pages | **Props**: `title`, `reverse?`, `image?`, `alt`, slot `before?`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Uses `py-16` instead of site standard `py-14` | Spacing | High | Change to `py-14` — this component appears on 9 pages, creating a visible vertical rhythm mismatch with adjacent `py-14` sections |
| Text column is `lg:max-w-[55%]`, image is `lg:max-w-[40%]` — 5% gap is lost | Spacing | Low | The remaining 5% is absorbed by `gap-12`; works in practice |
| Image has `loading="lazy"` — good | Image | None | OK |
| Placeholder div has no `role="img"` or `aria-label` | Accessibility | Low | Add `role="img" aria-label="Image placeholder"` or `aria-hidden="true"` |
| `alt` defaults to empty string — same concern as hero | Accessibility | Med | When `image` is provided, `alt` should be required or warned |
| No `data-animate` on the image or image wrapper | Consistency | Low | The heading has `data-animate="fade-up"` but the image side doesn't animate; consider adding a fade-in for the image |
| Uses `gap-12` for the split — matches site standard | Spacing | None | Good |

### Notes
- Solid two-column layout. The `before` slot is clever — used on home page for logo above the heading.
- Image gets `rounded-corner-lg` consistently.
- Missing: no ability to pass a custom aspect ratio for the image; always relies on natural image dimensions via `h-auto`.

---

## section-heading.blade.php
**Used on**: ~20 pages | **Props**: `title`, `subtitle?`, `centered?`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Bottom margin is `mb-10` regardless of whether subtitle is present or not — but heading margin changes: `mb-4` with subtitle, `mb-10` without | Spacing | Low | Correct logic: if no subtitle, heading itself has `mb-10`. If subtitle exists, heading has `mb-4` and subtitle has `mb-10`. This is consistent. |
| No `id` attribute on the heading — cannot be used as anchor target | Accessibility | Low | Consider generating an `id` from the title for in-page linking |
| When `centered` is false, no max-width constraint on the subtitle | Typography | Low | Full-width subtitle text can become very long on wide screens. Consider adding `max-w-3xl` even when left-aligned. |
| `data-animate="fade-up"` only on the `h2`, not the subtitle `p` | Consistency | Low | Subtitle could also animate; currently it appears instantly while heading fades up |

### Notes
- Simple and effective. Used heavily across the site.
- The conditional margin logic (`mb-4` vs `mb-10`) is well designed.
- `text-pretty` on both elements — good.

---

## card.blade.php
**Used on**: ~11 pages | **Props**: `title`, `description?`, `icon?`, `image?`, `alt`, `badge?`, `href?`, `linkText`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Image aspect ratio is `aspect-[16/10]` with a hatched background fallback — good | Image | None | OK |
| Image has `loading="lazy"` — good | Image | None | OK |
| `alt` defaults to empty string — if image is provided without alt, it renders `alt=""` which marks it as decorative | Accessibility | Med | When `image` is provided, enforce or strongly encourage a non-empty `alt` value |
| The link at the bottom (`Learn more`) is only a text link, not a block link — the entire card is not clickable | UX | Med | Consider making the whole card a clickable link area (wrapping in `<a>`) or adding a stretched-link pattern for better tap targets on mobile |
| Card has `hover:shadow-lg` but no link wrapping — hover effect implies interactivity but only the small "Learn more" text is clickable | UX | Med | Either remove hover effect when no `href`, or make the card clickable as a whole |
| No `data-animate` attribute on the card itself | Consistency | Low | Cards are typically wrapped in `data-animate="stagger"` at the grid level, which is correct |
| Icon container uses `w-10 h-10` — good consistent sizing | Typography | None | OK |
| Badge text is `text-xs uppercase tracking-wider` — consistent with hero badges | Typography | None | OK |
| Description uses `text-sm` while main content areas use base text size | Typography | Low | Intentional for card density; acceptable |

### Notes
- Well-structured card with multiple content slots (icon, badge, image, description, link).
- The hatched placeholder background is a nice touch during development.
- Consider: when `href` is provided, wrapping the card in an `<a>` tag with `group` hover behaviour would improve the UX significantly.

---

## stat-block.blade.php
**Used on**: ~3 pages | **Props**: `stats[]` (value, label), `variant` (dark|primary|light)

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Uses `py-10` — differs from both site standard `py-14` and hero `py-16` | Spacing | Med | `py-10` is intentionally compact for a stats bar; acceptable but inconsistent with the explicit `py-14` standard. Consider `py-12` as a compromise. |
| `data-count-target` uses raw value like "Nearly 30" or "24/7" — JS counter will fail on non-numeric strings | JavaScript | High | The counter JS targets `data-count-target` expecting a number. Non-numeric values like "Nearly 30", "40+", "24/7", "1,100+" will not count up properly. Need to either: (a) separate the numeric portion with a prefix/suffix system, or (b) handle non-numeric values gracefully in the JS. |
| `grid-cols-2` on mobile may be too cramped for 5 stats — the 5th stat wraps alone on a new row | Responsive | Med | With 5 items and `grid-cols-2`, you get 2+2+1. The orphaned 5th stat looks unbalanced. Consider `grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5` or centering the last row. |
| Stat value uses `text-3xl lg:text-4xl` — good responsive sizing | Typography | None | OK |
| Label uses `text-sm` with appropriate muted colour per variant | Typography | None | OK |
| `lg:gap-0 lg:divide-x` creates dividers only on large screens — mobile uses `gap-6` between grid items | Responsive | Low | Works, but the transition from gap-based to divider-based layout is abrupt at the `lg` breakpoint |
| No `aria-label` or heading for the stats section | Accessibility | Low | Screen readers get individual stat values but no context for what the section represents |

### Notes
- Three variants (dark, primary, light) cover all visual contexts well.
- The divide-x pattern on large screens is elegant.
- Critical: the count-up animation will break for non-numeric stat values. This needs a fix or the component needs a `prefix`/`suffix` prop system.

---

## accordion.blade.php
**Used on**: ~2 pages | **Props**: `items[]` (question, answer, open?)

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Uses native `<details>`/`<summary>` — excellent progressive enhancement | Accessibility | None | Best practice |
| Chevron rotation via `group-open:rotate-180` — smooth and accessible | UX | None | Good |
| `aria-hidden="true"` on the chevron icon — correct | Accessibility | None | Good |
| Answer uses `{!! !!}` (unescaped HTML) — potential XSS if data comes from user input | Security | Med | If FAQ data is hardcoded in Blade, this is fine. If items come from database/CMS (Filament), ensure HTML is sanitized before rendering. |
| No `id` on each details element — cannot deep-link to specific questions | Accessibility | Low | Consider generating `id` attributes for anchor linking |
| Spacing: `space-y-3` between items, `px-6 py-4` summary, `px-6 pb-5` content | Spacing | Low | Consistent internal padding; `space-y-3` is tighter than site `gap-6` but appropriate for accordion density |
| No animation on the answer content expansion | UX | Low | Content appears/disappears instantly. Consider a CSS transition for height or opacity. |

### Notes
- Clean implementation using semantic HTML. One of the best-built components.
- The `open` attribute support for pre-opened items is good for FAQ pages (first item open by default per MEMORY.md).
- `hover:bg-gray-50` on summary provides good interactive feedback.

---

## data-table.blade.php
**Used on**: ~13 pages | **Props**: `headers[]`, `rows[]`, `caption?`, `striped?`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Alpine.js scroll detection with `ResizeObserver` — excellent responsive approach | Responsive | None | Best practice for mobile horizontal scroll |
| Scroll shadow indicator on right edge — good UX hint | UX | None | Well implemented |
| No `scope="col"` on `<th>` elements | Accessibility | Med | Add `scope="col"` to `<th>` elements for screen reader table navigation: `<th scope="col" class="...">` |
| No `scope="row"` on first `<td>` in each row | Accessibility | Low | If the first column acts as a row header, consider using `<th scope="row">` for the first cell |
| Caption uses `bg-gray-50` — positioned inside the table, above the header | Typography | Low | Caption text is `text-xs uppercase tracking-wider` — small but visible. Ensure it has enough contrast (gray-500 on gray-50). |
| Header row uses `bg-primary-800 text-white` — strong brand presence | Typography | None | Good |
| Cell text uses `text-gray-700` — slightly lighter than the site's `text-gray-900` body standard | Typography | Low | Intentional for table density; acceptable |
| No `whitespace-nowrap` on `<td>` elements — cells may wrap on narrow content | Responsive | Low | Wrapping is generally desired for table cells; `whitespace-nowrap` is correctly applied only to `<th>` headers |
| Table is not component-driven for complex cells — only supports plain text in `rows` | Flexibility | Med | Rows only accept strings. Some pages may need links, badges, or formatted content in cells. Consider supporting raw HTML or slot-based rows. |

### Notes
- One of the most polished components. The Alpine.js scroll detection + shadow indicator is production-quality UX.
- Striped rows with `bg-gray-50` on even rows — classic and effective.
- Used on 13 pages — high impact. The `scope="col"` fix should be prioritized.

---

## timeline.blade.php
**Used on**: ~10 pages | **Props**: `steps[]` (title, description?, number?)

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Connector line uses `absolute top-5 left-1/2 w-full` — on lg screens the line extends from the center of one circle to beyond the right edge | Layout | Med | The connector line starts at `left-1/2` and spans `w-full`, which means it goes from the center of the current step to the right edge of the step container. This works when steps are adjacent but may overshoot on the last connected step. |
| Connector line is `hidden lg:block` — no visual connection on mobile/tablet | Responsive | Med | On `md:grid-cols-2` layout, there's no connector between steps. Users on tablets see numbered circles but no visual flow. Consider a vertical connector for smaller screens. |
| Circle number is hardcoded `w-10 h-10` with `text-sm` — good consistent sizing | Typography | None | OK |
| `gap-8` between steps — slightly larger than site `gap-6` for cards | Spacing | Low | Acceptable; timeline steps need more breathing room than card grids |
| No `role="list"` or `aria-label` for the timeline | Accessibility | Med | The timeline is visually a numbered process but semantically it's just divs. Wrapping in an `<ol>` or adding `role="list"` with `role="listitem"` on each step would convey meaning to screen readers. |
| No `data-animate` on steps | Consistency | Low | Could add stagger animation to reveal steps sequentially |
| Step description uses `text-sm` — consistent with card description sizing | Typography | None | OK |

### Notes
- Clean horizontal timeline layout with numbered circles.
- The responsive breakpoint progression (1 col -> 2 col -> up to 4 col) is well thought out.
- The connector line is the weakest part — it only works on `lg` screens and has potential overshoot issues.

---

## blog-card.blade.php
**Used on**: ~3 pages | **Props**: `title`, `excerpt?`, `image?`, `category?`, `categoryColor`, `date?`, `readTime?`, `href`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Image height is fixed at `h-48` — not responsive to card width | Image | Med | `h-48` (192px) works for typical 3-column grids but may look squat in 2-column or stretched in 1-column. Consider `aspect-[16/10]` to match `card.blade.php` for consistency. |
| Image uses `asset()` wrapper inside the component: `asset($image)` — but callers pass `$post->featured_image` which may already be an absolute path or URL | Image | Med | Double-wrapping with `asset()` could break if `featured_image` is a full URL. The home page passes `$post->featured_image` directly. Verify `featured_image` values in the database. |
| `readTime` prop is used as `{{ $readTime }} min read` — but blog/index.blade.php passes `$post->read_time . ' min read'` | Logic | Med | The component already appends "min read", but callers also append it, resulting in "5 min read min read". Either the component or the caller should handle the suffix — not both. Home page passes raw `$post->read_time` correctly; blog/index passes the string with suffix already. |
| Image uses `alt="{{ $title }}"` — uses the post title as alt text | Accessibility | Low | Using the title as alt is acceptable but generic. A dedicated `alt` prop would be more descriptive. |
| `group-hover:scale-105` on image — nice hover zoom effect | UX | None | Good |
| Placeholder when no image is `h-48 bg-gray-100` — no visual indicator this is a placeholder | Image | Low | Consider adding the hatched pattern used by other components for consistency |
| `line-clamp-2` on title and excerpt — good overflow control | Typography | None | Good |
| Category badge uses inline `style` for background colour — allows per-category branding | Typography | None | Good flexibility |
| Date metadata uses `text-xs text-gray-400` — may have contrast issues against white bg | Accessibility | Med | `text-gray-400` (#9CA3AF) on white (#FFFFFF) has a contrast ratio of ~2.6:1, failing WCAG AA for small text (requires 4.5:1). Change to `text-gray-500` (#6B7280) which achieves ~4.6:1. |
| `href` defaults to `#` — may create dead links if caller forgets to provide it | UX | Low | Consider removing default and making `href` required |

### Notes
- Good card structure with category, date, and read time metadata.
- The `asset()` wrapping inconsistency needs resolution before blog posts with external image URLs are added.
- The "min read" duplication bug between component and callers needs a clear convention.

---

## testimonial.blade.php
**Used on**: ~2 pages | **Props**: `quote`, `name`, `credential?`, `initials?`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| No `<cite>` element wrapping the attribution | Accessibility | Low | The `<blockquote>` should ideally have a `<footer>` with `<cite>` for proper semantic markup |
| SVG quote mark uses `fill="currentColor"` with `text-primary-200` — subtle and elegant | Typography | None | Good |
| Initials fallback (`strtoupper(substr($name, 0, 1))`) only gets first letter if no initials prop | Logic | Low | The `team-member` component calculates multi-word initials. Consider matching: `collect(explode(' ', $name))->map(fn($w) => mb_substr($w, 0, 1))->take(2)->join('')` |
| Avatar circle is `w-10 h-10` — small but appropriate for testimonial cards | Typography | None | OK |
| `p-6` internal padding — consistent with other card components | Spacing | None | Good |
| `mb-6` between quote and attribution — sufficient visual separation | Spacing | None | OK |
| No `data-animate` attribute | Consistency | Low | Testimonial grid on home page uses parent `data-animate="stagger"` — correct approach |
| Quote text uses `text-gray-700 leading-relaxed` — readable and comfortable | Typography | None | Good |

### Notes
- Simple, well-proportioned testimonial card.
- The quote mark SVG is a nice visual anchor.
- Consider a `rating` or `stars` prop for future flexibility if client requests it.

---

## team-member.blade.php
**Used on**: ~1 page (team) | **Props**: `name`, `role`, `photo?`, `bio?`, `credentials?`, `languages?`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Photo uses `<picture>` with WebP `<source>` — excellent format negotiation | Image | None | Best practice |
| Photo path conversion `str_replace('.png', '.webp', $photo)` — only handles PNG to WebP. Breaks if source is `.jpg` | Image | Med | Change to a more robust conversion: `preg_replace('/\.(png\|jpe?g)$/', '.webp', $photo)` or use a dedicated helper |
| Photo is `w-40 h-40` (160x160) — large enough for team display | Image | None | OK |
| `loading="lazy"` on photo — good | Image | None | OK |
| Initials fallback for no-photo uses `mb_substr` — correctly handles multi-byte characters (important for East Asian names) | Accessibility | None | Good attention to the target audience |
| No `loading="lazy"` on the WebP `<source>` — `loading` is on the `<img>` fallback which is correct for `<picture>` | Image | None | OK |
| Role text uses `text-primary-600 font-medium` — good colour differentiation from name | Typography | None | OK |
| `text-center` layout — all content is centered which works well for grid display | Layout | None | OK |
| Bio text uses `text-sm text-gray-600 mt-3` — the `mt-3` gap may feel tight after credentials line | Spacing | Low | With credentials (`text-xs mt-1`) and bio (`text-sm mt-3`), the spacing hierarchy is: name -> role (0.5) -> credentials (1) -> bio (3). Consider `mt-4` on bio for more breathing room. |
| Languages text uses `text-xs text-gray-400` — same contrast concern as blog-card date | Accessibility | Med | `text-gray-400` on white fails WCAG AA. Change to `text-gray-500`. |

### Notes
- Well-structured for the team page use case.
- The `<picture>` element with WebP source is the best image approach on the entire site.
- The `mb_substr` usage for initials shows good consideration for the East Asian target audience.

---

## contact-card.blade.php
**Used on**: ~1 page (contact) | **Props**: `title`, `icon?` (slot)

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| `p-6 text-center` — consistent with other cards | Spacing | None | Good |
| Icon is passed as a slot rather than a prop — flexible approach | Flexibility | None | Good design |
| `text-sm text-gray-600 space-y-1` for content — very tight vertical spacing | Spacing | Low | `space-y-1` (4px) may be too tight between phone numbers and labels. The contact page works around this with `space-y-2` on the inner div. Consider `space-y-2` as default. |
| No hover effect — unlike `card.blade.php` which has `hover:shadow-lg` | Consistency | Low | Contact cards are not clickable, so no hover effect is correct. But visually they may feel flat compared to other cards on the site. |
| Icon wrapper lacks `aria-hidden="true"` | Accessibility | Low | Heroicons already include `aria-hidden` but the wrapper div should also not be announced |
| `h3` for the title — correct heading hierarchy when used inside a section with `h2` | Accessibility | None | Good |

### Notes
- Simple and focused. Works well for the contact page's phone/email/address cards.
- The slot-based icon approach is more flexible than the `card.blade.php` prop-based approach.
- Could benefit from an optional `href` prop to make the entire card a link to a phone number or email.

---

## credential-card.blade.php
**Used on**: ~2 pages | **Props**: `name`, `logo?`, `description?`

| Issue | Category | Severity | Fix |
|-------|----------|----------|-----|
| Logo height is fixed `h-16` with `w-auto object-contain` — good for varying logo aspect ratios | Image | None | Good |
| `loading="lazy"` on logo — good | Image | None | OK |
| Fallback uses `x-heroicon-o-shield-check` — generic shield icon when no logo provided | UX | Low | Works as a generic credential indicator; consider allowing a custom fallback icon via prop |
| Card title is `text-sm font-bold` — smaller than other card h3s which use `text-lg` | Typography | Med | Inconsistent heading size compared to `card.blade.php` (`text-lg`) and `contact-card.blade.php` (`text-lg`). If credential names are typically short (e.g., "MARA", "QEAC"), `text-sm` may be intentional. But for longer names like "School Curriculum and Standards Authority", it could feel cramped. Consider `text-base`. |
| Description is `text-xs text-gray-500` — very small | Typography | Low | Acceptable for supplementary credential info; ensures the logo remains the focal point |
| Card padding `p-6` — consistent | Spacing | None | Good |
| `flex flex-col items-center` — vertical centering works well for logo + name layout | Layout | None | OK |
| No hover effect or link capability | UX | Low | Credential cards are informational, so no link is fine. But external link to the accrediting body could be useful. |

### Notes
- Purpose-built for displaying accreditation logos. Clean and functional.
- The `h-16` logo height is a good balance for logo visibility without overwhelming the card.
- Consider adding an `href` prop for linking to the accrediting body's website.

---

## Cross-Component Issues

| Issue | Category | Severity | Components Affected | Fix |
|-------|----------|----------|---------------------|-----|
| `py-16` vs site standard `py-14` | Spacing | High | content-split, cta-banner, hero (split variant) | Change `py-16` to `py-14` in `content-split.blade.php`. CTA and hero are arguable exceptions. At minimum, content-split should match since it sits between `py-14` page sections on 9 pages. |
| `alt` prop defaults to `''` across multiple components | Accessibility | Med | hero, content-split, card | Empty `alt` marks images as decorative. When meaningful images are displayed, this silently fails accessibility. Add validation or document the requirement clearly. |
| `text-gray-400` used for metadata/secondary text | Accessibility | Med | blog-card (date), team-member (languages) | Fails WCAG AA contrast (2.6:1 on white). Change to `text-gray-500` (4.6:1) in both components. |
| No semantic list markup for sequential content | Accessibility | Med | timeline, stat-block | Timeline should use `<ol>`, stat-block could use `<dl>` for definition-list semantics (value + label pairs). |
| Inconsistent image fallback/placeholder styles | Consistency | Low | hero, content-split, card (hatched), blog-card (plain gray), team-member (initials), credential-card (icon) | Three different placeholder strategies: hatched pattern, plain bg, and icon/initials. Standardize on the hatched pattern for image placeholders. |
| `hover:shadow-lg` on non-clickable components | UX | Low | card (hover implies clickability but only small link is clickable) | Either make the full card clickable via stretched-link or remove hover effect when no `href`. |
| No consistent `data-animate` approach within components | Consistency | Low | Most components rely on parent-level animation | This is actually the correct pattern — animation is a page concern, not a component concern. Components that have internal `data-animate` (content-split heading, section-heading) are exceptions. |

---

## Priority Fix List

### High Priority (visible across many pages)
1. **content-split `py-16` -> `py-14`** — 9 pages affected; breaks vertical rhythm with adjacent sections
2. **stat-block count-up JS with non-numeric values** — "Nearly 30", "40+", "24/7" will break the counter animation on the home page
3. **data-table missing `scope="col"`** — 13 pages affected; screen reader table navigation is impaired

### Medium Priority (accessibility or inconsistency)
4. **`text-gray-400` contrast failures** — blog-card date and team-member languages fail WCAG AA
5. **blog-card `readTime` "min read" duplication** — blog/index.blade.php passes "5 min read" and component appends "min read" again
6. **blog-card `asset()` double-wrapping** — may break if `featured_image` stores absolute URLs
7. **card hover effect without full clickability** — hover implies interactivity; consider stretched-link
8. **timeline semantic markup** — add `<ol>` for numbered process steps
9. **team-member WebP conversion only handles `.png`** — `.jpg` photos would not get WebP source
10. **credential-card title `text-sm`** — inconsistent with other card heading sizes

### Low Priority (polish)
11. Stat-block orphaned 5th item on mobile grid
12. Accordion answer expansion animation
13. Contact-card default `space-y-1` too tight
14. Consistent placeholder pattern across all components
15. CTA banner `py-16` -> `py-14` (arguable — CTA emphasis may justify the extra padding)
