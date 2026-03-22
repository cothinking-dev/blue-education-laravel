# Blue Education — SEO Review Report

**Date:** 2026-03-22
**Reviewer:** Claude (Opus 4.6)
**Source:** SEO crawler export (`staging Blue Education.xls`) + codebase analysis
**Pages crawled:** 55 URLs (including duplicates, filtered pages, and errors)

---

## Executive Summary

The site has strong SEO fundamentals — every page has a unique title, meta description, H1, canonical URL, JSON-LD structured data, and OG tags. The sitemap generator is well-designed and the robots.txt is crawler-friendly. However, the crawl reveals several issues that will hurt search performance: **10 blog titles exceed the 60-character display limit** (some by 70+ characters), **duplicate content signals** from blog category/pagination URLs that are indexable, a **broken `/services` URL returning 404**, and a **Cloudflare email protection 404**. Overall score: **7.2/10**.

---

## Scores at a Glance

| # | Category | Score | Weight | Weighted |
|---|----------|-------|--------|----------|
| 1 | Title Tags | 6/10 | 15% | 0.90 |
| 2 | Meta Descriptions | 7/10 | 10% | 0.70 |
| 3 | Heading Structure | 8/10 | 10% | 0.80 |
| 4 | URL Structure | 7/10 | 10% | 0.70 |
| 5 | Canonicalization & Duplicates | 6/10 | 15% | 0.90 |
| 6 | Sitemap & Crawlability | 7/10 | 10% | 0.70 |
| 7 | Structured Data (JSON-LD) | 9/10 | 10% | 0.90 |
| 8 | Internal Linking | 7/10 | 10% | 0.70 |
| 9 | Technical SEO | 7/10 | 10% | 0.70 |
| | **TOTAL** | | | **7.2/10** |

---

## Detailed Assessment

### 1. Title Tags — 6/10

**Justification:** All 47 indexable pages have unique title tags with the brand suffix ` — Blue Education`. Static/service pages are well-optimized (20-53 characters). However, **10 of 17 blog posts have titles exceeding the 60-character Google display limit**, with the worst at 133 characters. Google will truncate these in SERPs, losing the brand suffix and key information. The `— Blue Education` suffix adds 18 characters to every title, which is fine for short titles but devastating for long blog headlines.

**Evidence from crawl:**

| Page | Title Length | Issue |
|------|-------------|-------|
| Housing Options in Perth blog post | **133** chars | Will be truncated to ~60 chars, losing 55% of title |
| Group of Eight Universities blog post | **107** chars | Will be truncated significantly |
| Skilled Nominated Visa blog post | **106** chars | Will be truncated significantly |
| Financial evidence for visa blog post | **101** chars | Will be truncated significantly |
| Teaching Qualification blog post | **99** chars | Will be truncated significantly |
| Job after graduation blog post | **93** chars | Will be truncated significantly |
| Dependant turns 18 blog post | **84** chars | Moderate truncation |
| Working Holiday Visa blog post | **84** chars | Moderate truncation |
| Employer sponsor blog post | **82** chars | Moderate truncation |
| Enrol to study blog post | **70** chars | Minor truncation |

**Root cause:** `config/seo.php:17` — The `title_suffix` is ` — Blue Education` (18 chars). Blog post titles use the full post title + suffix. No truncation or length check exists.

**Recommendations:**
- Truncate blog post titles to ~42 characters before adding the suffix, ensuring total stays under 60
- Alternatively, use a shorter suffix for blog posts (e.g., ` — Blue Ed` or omit it entirely since the domain signals the brand)
- Add an SEO title field to the blog post model that allows manually crafted short titles separate from the H1

---

### 2. Meta Descriptions — 7/10

**Justification:** All pages have meta descriptions. Static/service pages have well-crafted, unique descriptions in the ideal 80-155 character range. Blog post descriptions are auto-generated from the post body excerpt, which works but creates 4 instances exceeding the ~160-character display limit. Blog category filter pages all share the same generic description.

**Evidence from crawl:**

**Too long (>160 chars):**
| Page | Length |
|------|--------|
| How to apply for a research degree | 161 |
| Sub-Class 485 post-study work stream | 162 |
| WA and DAMA | 161 |
| Working Holiday Visa | 161 |

**Duplicate descriptions (all identical):**
- `/blog` — "Education, migration, careers, and life in Australia..."
- `/blog?category=career-employment` — same
- `/blog?category=education` — same
- `/blog?category=migration-visas` — same
- `/blog?category=student-life` — same
- `/blog?page=1` — same
- `/blog?page=2` — same

**Root cause:** `app/Models/Post.php:78` — `seoDescription()` uses `Str::limit(strip_tags($this->body), 160)` which can produce 163 chars (160 + "..."). Blog index uses a single static description regardless of active category filter.

**Recommendations:**
- Change `Str::limit()` to 155 characters to stay within display limits after the "..." suffix
- Generate category-specific meta descriptions (e.g., "Education articles for international students...")
- Consider adding a manual `meta_description` field to blog posts for SEO-optimized descriptions

---

### 3. Heading Structure — 8/10

**Justification:** Every page has a unique H1 tag. H1s are descriptive and keyword-rich. H2s provide clear content hierarchy. No pages have missing H1s. The heading hierarchy is well-structured with H2s for sections and H3s for sub-sections.

**Evidence from crawl:**
- All 47 indexable pages have unique H1 tags
- H1s range from 8 to 116 characters (median ~50)
- H1s are distinct from page titles (good — avoids exact duplication)
- Static pages use benefit-oriented H1s (e.g., "Turn your Australian qualification into an Australian career")
- Blog posts mirror the post title in H1 (standard practice)

**Issues:**
- `/blog/xi-ao-da-xue-ti-sheng-wu-wei` — H1 is `西澳大学提升五位` (8 chars, Chinese only). This is fine for Chinese-language content but the URL slug is romanized, creating a mismatch for search engines
- Some H1s are very long (116 chars for the housing post) — not a strict SEO issue but could affect display

**Recommendations:**
- None critical. Heading structure is solid.

---

### 4. URL Structure — 7/10

**Justification:** URL hierarchy is clean and logical (`/services/education/degrees`, `/programs/buddy-programme`). Slugs use hyphens, lowercase, and descriptive keywords. Blog slugs are auto-generated from titles. However, the `/services` parent URL returns a **404**, and some blog slugs are excessively long.

**Evidence from crawl:**

**404 errors:**
- `/services` — Returns 404. This is a parent URL that users expect to work, and it's linked from the nav structure. The crawler found it with `BIL:1` (1 broken internal link).
- `/cdn-cgi/l/email-protection` — Cloudflare email protection 404. This indicates the site is using Cloudflare's email obfuscation but the obfuscated URLs are being crawled.

**Long slugs:**
- `/blog/just-landed-in-australia-your-guide-to-housing-options-in-perth-for-international-students-wo` — 97 chars (truncated by the CMS/database)
- `/blog/lodging-your-interest-for-a-skilled-nominated-visa-a-simplified-approach` — 77 chars
- `/blog/your-guide-to-australia-s-group-of-eight-universities-how-to-get-in-and-why-it-s-worth-it` — 93 chars

**Root cause:** `/services` is not defined as a route in `routes/web.php` — the route jumps directly to `/services/education`, `/services/migration`, etc. The nav or internal links reference `/services` somewhere.

**Recommendations:**
- Add a `/services` route (either a dedicated page or redirect to `/services/education`)
- Keep blog slugs under 60 characters — shorten during content creation
- Add `rel="nofollow"` or block `/cdn-cgi/` in robots.txt to prevent Cloudflare email protection URLs from being crawled

---

### 5. Canonicalization & Duplicates — 6/10

**Justification:** Canonical tags are present on all pages and the blog category/pagination pages correctly point their canonical to `/blog`. However, the duplicate content issue is more fundamental: these filtered/paginated pages are **still indexable** (`meta robots: index, follow`) despite having canonical tags pointing elsewhere. Search engines treat canonical as a hint, not a directive — these pages may still get indexed and cause duplicate content issues. Additionally, the root URL exists as both `/` and without trailing slash (both indexable, both crawled separately).

**Evidence from crawl:**

**Duplicate pages flagged by crawler (7 pages):**
- `/blog?category=career-employment` → canonical: `/blog` but robots: `index, follow`
- `/blog?category=education` → canonical: `/blog` but robots: `index, follow`
- `/blog?category=migration-visas` → canonical: `/blog` but robots: `index, follow`
- `/blog?category=student-life` → canonical: `/blog` but robots: `index, follow`
- `/blog?page=1` → canonical: `/blog` but robots: `index, follow`
- `/blog?page=2` → canonical: `/blog` but robots: `index, follow`

**Trailing slash duplicate:**
- `https://staging-blue-education.cothink.ing` (no slash) — Level 1
- `https://staging-blue-education.cothink.ing/` (with slash) — Level 0
- Both return 200 with identical content. Canonical points to non-slash version (correct), but no redirect from slash to non-slash.

**Root cause:** `resources/views/components/seo.blade.php:28` — `$pageCanonical = $canonical ?? url()->current()` correctly sets canonical. But `$pageRobots = $robots ?? $defaults['robots']` always defaults to `index, follow` — no logic to set `noindex` for filtered/paginated views.

**Recommendations:**
- Add `noindex, follow` to blog category filter pages and pagination pages (or use `rel="prev"`/`rel="next"` for pagination)
- Force a 301 redirect from trailing-slash root to non-trailing-slash (in `bootstrap/app.php` middleware or web server config)
- Consider making category filter pages valuable instead — give them unique titles/descriptions per category

---

### 6. Sitemap & Crawlability — 7/10

**Justification:** The sitemap generator (`GenerateSitemap.php`) is well-designed with priority overrides, frequency settings, and dynamic blog post inclusion. The robots.txt is unusually progressive — explicitly welcoming AI crawlers. However, the crawl tool reports that **0 URLs were matched from the sitemap** (`info.url.sitemap.in` has 0 data rows, `info.url.sitemap.not` has 55 rows). This suggests the sitemap either wasn't accessible to the crawler, uses a different domain, or hasn't been generated on staging.

**Evidence from crawl:**
- `info.url.sitemap.in` sheet: 0 rows (no URLs matched from sitemap)
- `info.url.sitemap.not` sheet: 55 rows (all crawled URLs NOT in sitemap)
- The robots.txt correctly references `Sitemap: {APP_URL}/sitemap.xml`
- Blog category/pagination URLs are NOT in the sitemap (correct — they're filtered views)

**Root cause:** Likely the sitemap was not generated on the staging environment, or the sitemap URL uses the production domain while the crawl used the staging domain.

**Recommendations:**
- Ensure `sitemap:generate` is run on staging (and verify `/sitemap.xml` returns valid XML)
- Verify the sitemap references the correct domain (staging vs production)
- Add `<lastmod>` dates to static page entries (currently only blog posts have them)

---

### 7. Structured Data (JSON-LD) — 9/10

**Justification:** Comprehensive structured data implementation. Every page includes JSON-LD `EducationalOrganization` schema (name, URL, logo, phone, email, address, founding date). Breadcrumb schema is auto-generated from URL segments. Blog posts include `BlogPosting` schema. The FAQ page includes `FAQPage` schema. This is well above average for a marketing site.

**Evidence from codebase:**
- `resources/views/components/seo.blade.php:64-86` — Organization schema on every page
- `resources/views/components/seo.blade.php:88-142` — BreadcrumbList auto-generated
- `resources/views/pages/blog/show.blade.php` — BlogPosting schema with headline, dates, author, publisher, image
- `resources/views/pages/faq.blade.php` — FAQPage schema

**Recommendations:**
- Consider adding `LocalBusiness` schema alongside `EducationalOrganization` for better local SEO in Perth
- Add `sameAs` property to Organization schema linking to social media profiles

---

### 8. Internal Linking — 7/10

**Justification:** Internal link counts are healthy (70-100 per page), indicating good site-wide navigation. All pages are reachable within 2 levels of the home page. However, **every single page has exactly 1 broken internal link** (`BIL:1`), and the `/services/career` and `/services/education` cluster have 2 broken internal links each (`BIL:2`).

**Evidence from crawl:**
- All 47 indexable pages: `BIL:1` (1 broken internal link each — likely a global nav/footer link)
- Service sub-pages: `BIL:2` (2 broken internal links — the global one plus likely `/services` parent)
- The `/services` URL returns 404 — this is likely the broken link present on service sub-pages
- Home page: 91 internal links (comprehensive)
- Blog posts: 77-82 internal links (good)
- Static pages: 71-80 internal links (good)

**Root cause:** The 1 broken internal link on every page is likely the `/services` URL in the nav or footer. The extra broken link on service sub-pages is likely a breadcrumb or parent link to `/services`.

**Recommendations:**
- Fix the `/services` 404 by adding a route (redirect or landing page)
- Audit internal links to find and fix the globally-broken link
- Add contextual cross-links between related service pages (not just nav links)

---

### 9. Technical SEO — 7/10

**Justification:** The technical foundation is solid — proper HTTP status codes, no redirect chains, correct content types, reasonable page sizes. However, there are issues: the contact page uses an iframe (flagged by crawler), the Cloudflare email protection creates crawlable 404 URLs, and blog category pages lack proper pagination signals.

**Evidence from crawl:**
- All pages return `200 OK` or proper `404 Not Found`
- No redirect chains detected
- Page sizes range from 6.8KB to 13.5KB (lean and fast)
- Contact page flagged in `page.iframe` sheet — likely an embedded Google Map
- No `hreflang` tags for the Chinese blog post (`西澳大学提升五位`) — search engines won't know this is Chinese content
- No `rel="prev"`/`rel="next"` for paginated blog pages

**Recommendations:**
- Add `hreflang="zh"` to the Chinese blog post and `hreflang="en"` to English posts
- Consider adding `rel="prev"`/`rel="next"` link headers for blog pagination
- Block `/cdn-cgi/` in robots.txt to prevent Cloudflare URLs from being crawled

---

## Top 5 Recommendations (Priority Order)

1. **[Critical] Fix `/services` 404** — This parent URL is linked from every service sub-page. Add either a services landing page or a 301 redirect to `/services/education`. This also fixes the 1-2 broken internal links on every page. (`routes/web.php`)

2. **[High] Fix blog title tag lengths** — 10 of 17 blog posts have titles exceeding the 60-character Google display limit. Either truncate titles before adding the suffix, use a shorter suffix for blog posts, or add a dedicated `seo_title` column to the posts table. (`config/seo.php`, `app/Models/Post.php`)

3. **[High] Add `noindex` to blog filter/pagination pages** — 7 pages have duplicate titles, descriptions, and H1s. Set `meta robots: noindex, follow` for `/blog?category=*` and `/blog?page=*` URLs to prevent duplicate content indexing. (`resources/views/pages/blog/index.blade.php` or `app/Http/Controllers/BlogController.php`)

4. **[Medium] Fix meta description length** — Change `Str::limit()` from 160 to 155 characters in `seoDescription()` to prevent 4 blog posts from exceeding the display limit. (`app/Models/Post.php:78`)

5. **[Medium] Verify sitemap generation on staging** — The crawler found 0 URLs in the sitemap. Ensure `php artisan sitemap:generate` is run and `/sitemap.xml` returns valid XML referencing the correct domain. (`app/Console/Commands/GenerateSitemap.php`)

---

## Notable Strengths

- **Every page has unique title, description, H1, and canonical** — This is uncommon and demonstrates intentional SEO work
- **JSON-LD structured data** — Organization, BreadcrumbList, BlogPosting, and FAQPage schemas go well beyond basic SEO
- **Canonical tags on filtered pages** — Blog category/pagination canonicals correctly point to `/blog`
- **AI-friendly robots.txt** — Explicitly welcoming GPTBot, Claude-Web, ChatGPT-User, and other AI crawlers
- **Clean URL hierarchy** — `/services/education/degrees`, `/programs/buddy-programme` — logical, keyword-rich paths
- **Dynamic OG images** — Every page gets a branded social sharing image
- **Page weight** — 6.8-13.5KB per page (lean, fast-loading)

---

## Remaining Issues (Lower Priority)

- Add `hreflang` tags for the Chinese blog post
- Add `sameAs` social media links to Organization schema
- Add `<lastmod>` to static page sitemap entries
- Consider `LocalBusiness` schema for Perth local SEO
- Redirect trailing-slash root URL to non-trailing-slash
- Block `/cdn-cgi/` paths in robots.txt
