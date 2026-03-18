# Page Audit: Blog Show (Single Post)
**Route**: `/blog/{post:slug}` | **File**: `resources/views/pages/blog/show.blade.php`
**Hero**: No hero component used -- article layout with no hero

## S1 Article
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 5         | 5              | 4               | 4     |
**Score: 23/25**
- Finding: Uses `max-w-3xl` instead of `max-w-7xl` for article width -- this is correct and standard for long-form reading. Padding is consistent (`px-8 lg:px-16 py-14`).
- Finding: Meta bar (category badge, date, read time) is well-structured with `flex-wrap`, proper spacing, and conditional rendering.
- Finding: Title uses `text-3xl lg:text-4xl font-bold` with `text-pretty leading-tight` -- excellent typography for an article heading.
- Finding: The `prose prose-lg` class on the body div is correct for rendered HTML content. `max-w-none` overrides prose's default max-width since the container is already `max-w-3xl`.
- Finding: Featured image uses `aspect-[2/1]` which is wider than the `aspect-[3/2]` used elsewhere -- this is intentional for article hero images and works well.
- Finding: Featured image has `loading="lazy"` but it's the main article image and likely above the fold. Consider `loading="eager"` or removing the attribute for the primary image.
- Finding: Category badge uses inline `style="background-color: ..."` which is acceptable for dynamic category colors.
- Fix: Consider `loading="eager"` for the featured image since it's the article's primary visual. Minor concern only.

## S2 Related Posts
| Spacing | Typography | Vis. Hierarchy | Component Usage | Image |
|---------|-----------|----------------|-----------------|-------|
| 5       | 4         | 5              | 5               | 5     |
**Score: 24/25**
- Finding: Uses `<x-blog-card>` correctly for related posts in a 3-column grid. Conditional rendering with `@if($relatedPosts->isNotEmpty())`.
- Finding: Section heading is a raw `<h2>` (`text-2xl font-bold text-gray-900 mb-8`) instead of `<x-section-heading>`. Missing `text-pretty` and `data-animate="fade-up"` attributes that the component would provide.
- Fix: Replace inline `<h2>` with `<x-section-heading title="Related Articles" :centered="false" />` for consistency.

## S3 CTA Banner
component-driven -- see audit-components.md

## SEO & Schema
- Finding: Excellent JSON-LD BlogPosting schema at the top of the file. Includes headline, description, datePublished, dateModified, author, publisher, and image.
- Finding: `<x-layout>` receives proper OG and article meta props (og-type, og-image, article-published-time, article-modified-time, json-ld).

## Summary
**Average**: 23.5/25 (weighted) | Effective: **4.7/5 per category**
**Priority fixes**:
1. Replace raw `<h2>` in Related Posts with `<x-section-heading>` for consistency
2. Consider `loading="eager"` for the primary article image
3. No structural issues -- SEO implementation is excellent
