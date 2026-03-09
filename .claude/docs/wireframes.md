# Wireframes Reference

## Location

`DOCS/wireframes/` — 27 static HTML files representing every page of the site. These are the client-approved spec (pending final sign-off).

## Structure

Each wireframe uses:
- `assets/tokens.css` — design tokens (colors, radii)
- `_inc/nav.html`, `_inc/footer.html` — shared nav/footer
- CDN Tailwind with custom config matching the tokens
- Section markers: `<div class="wf-bar">§N · Section Name — Description</div>`
- Desktop (1280px) and mobile (390px) canvases side by side

## Pages by Section

### Home
- `index.html` — Hero, trust stats, services grid, why Australia, featured programs, testimonials, partner logos, CTA

### Services (6 pages)
- `services.html` — Overview with 4 service cards
- `services-education.html` — Education overview, pathway types
- `services-education-school.html`, `-english.html`, `-vet.html`, `-university.html` — Sub-pages
- `services-migration.html` — Migration pathway timeline, visa table
- `services-migration-student-visas.html`, `-graduate-work.html`, `-permanent.html` — Sub-pages
- `services-career.html` — 6-step career support process
- `services-student-support.html` — Support service cards

### Programs (5 pages)
- `programs.html` — 4 program cards
- `programs-buddy.html` — Key facts table, how it works
- `programs-study-tours.html` — Split layout, group highlight
- `programs-scsa.html` — SCSA associate info, feature list
- `programs-executive-internship.html` — 6-phase timeline, facts table

### About (3 pages)
- `about.html` — Story, stats, alternating rows, credentials
- `about-team.html` — Team grid
- `about-partners.html` — University logos, international offices table

### Resources (3 pages)
- `blog.html` — Featured post, category tabs, post grid, pagination, newsletter
- `resources-faq.html` — Tab navigation, accordion sections
- `resources-admission.html` — Requirements tables

### Other
- `why-australia.html` — 5 numbered alternating blocks
- `fees.html` — Cost tables, feature lists, payment info
- `contact.html` — Contact form, callout boxes, map placeholder

## Component Mapping

Each wireframe section maps to a Blade component. See `components.md` for the full reference. When building a page, read the wireframe HTML first to understand the exact sections and their order.
