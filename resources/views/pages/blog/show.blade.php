@php
    $org = config('seo.organization');
    $blogPostingSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'headline' => $post->title,
        'description' => $post->seo_description,
        'datePublished' => $post->published_at?->toIso8601String(),
        'dateModified' => $post->updated_at?->toIso8601String(),
        'author' => [
            '@type' => 'Organization',
            'name' => $org['name'],
            'url' => $org['url'],
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => $org['name'],
            'logo' => [
                '@type' => 'ImageObject',
                'url' => url($org['logo']),
            ],
        ],
        ...($post->seo_image ? ['image' => $post->seo_image] : []),
    ];
@endphp

<x-layout :title="$post->title"
          :description="$post->seo_description"
          og-type="article"
          :og-image="$post->seo_image"
          :article-published-time="$post->published_at?->toIso8601String()"
          :article-modified-time="$post->updated_at?->toIso8601String()"
          :json-ld="$blogPostingSchema">

    {{-- §1 Hero — featured image as background --}}
    <section class="relative flex flex-col overflow-hidden [clip-path:inset(0)] items-start justify-end" style="min-height: 80dvh; background-color: var(--color-base-700);">
        @if($post->featured_image)
            <img data-hero-parallax src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="fixed inset-0 w-full h-full object-cover">
        @endif
        <div class="absolute inset-0" style="background: linear-gradient(135deg, var(--hero-overlay-start), var(--hero-overlay-end)); mix-blend-mode: multiply;"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 80% at 50% 50%, transparent 30%, var(--hero-vignette) 100%);"></div>
        <div class="relative z-10 px-8 lg:px-16 py-20 max-w-7xl w-full mx-auto">
            <x-auto-breadcrumb class="mb-6" dark />
            <div class="flex flex-wrap items-center gap-3 mb-4">
                @if($post->category)
                    <span class="inline-block text-xs font-semibold px-2.5 py-0.5 rounded-full text-white {{ $post->category->badgeClass() }}">{{ $post->category->name }}</span>
                @endif
                @if($post->published_at)
                    <span class="text-base-300 text-sm">{{ $post->published_at->format('M j, Y') }}</span>
                @endif
                @if($post->read_time)
                    <span class="text-base-400 text-sm">&middot;</span>
                    <span class="text-base-300 text-sm">{{ $post->read_time }} min read</span>
                @endif
            </div>
            <h1 class="text-3xl lg:text-5xl font-bold text-white leading-tight text-pretty max-w-4xl">{{ $post->title }}</h1>
        </div>
    </section>

    {{-- §2 Article Body --}}
    <article class="bg-white" x-data="{ headings: [], activeId: '' }" x-init="
        $nextTick(() => {
            const prose = $refs.prose;
            if (!prose) return;
            const els = prose.querySelectorAll('h2, h3');
            els.forEach((el, i) => {
                if (!el.id) el.id = 'heading-' + i;
                headings.push({ id: el.id, text: el.textContent.trim(), level: parseInt(el.tagName.charAt(1)) });
            });
            if (headings.length === 0) return;
            const obs = new IntersectionObserver((entries) => {
                entries.forEach(e => { if (e.isIntersecting) activeId = e.target.id; });
            }, { rootMargin: '-80px 0px -70% 0px' });
            els.forEach(el => obs.observe(el));
        });
    ">
        <div class="max-w-3xl xl:max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="xl:flex gap-12">

                {{-- Sticky Table of Contents (desktop) --}}
                <aside class="hidden xl:block w-56 shrink-0">
                    <nav class="sticky top-24" aria-label="Table of contents">
                        <p class="text-xs font-bold text-base-400 uppercase tracking-widest mb-4">On this page</p>
                        <ul class="space-y-2 border-l border-base-200">
                            <template x-for="heading in headings" :key="heading.id">
                                <li>
                                    <a :href="'#' + heading.id"
                                       @click.prevent="document.getElementById(heading.id).scrollIntoView({ behavior: 'smooth', block: 'start' })"
                                       :class="activeId === heading.id
                                           ? 'border-primary-600 text-primary-800 font-medium'
                                           : 'border-transparent text-base-500 hover:text-base-700'"
                                       class="-ml-px block border-l-2 pl-4 py-1 text-sm transition-colors"
                                       :style="heading.level === 3 ? 'padding-left: 2rem;' : ''"
                                       x-text="heading.text"></a>
                                </li>
                            </template>
                        </ul>
                    </nav>
                </aside>

                {{-- Main content --}}
                <div class="flex-1 xl:max-w-3xl">

                    {{-- Mobile/Tablet ToC (collapsed accordion) --}}
                    <div class="xl:hidden mb-8" x-show="headings.length > 0" x-cloak>
                        <details class="group border border-base-200 rounded-corner-lg overflow-hidden shadow-sm" open>
                            <summary class="flex items-center justify-between gap-4 px-5 py-3 cursor-pointer select-none hover:bg-base-50 transition-colors">
                                <span class="text-sm font-semibold text-base-700">On this page</span>
                                <x-heroicon-m-chevron-down class="w-4 h-4 text-base-400 shrink-0 transition-transform group-open:rotate-180" aria-hidden="true" />
                            </summary>
                            <nav class="px-5 pb-4" aria-label="Table of contents">
                                <ul class="space-y-1 border-l border-base-200">
                                    <template x-for="heading in headings" :key="heading.id">
                                        <li>
                                            <a :href="'#' + heading.id"
                                               @click.prevent="document.getElementById(heading.id).scrollIntoView({ behavior: 'smooth', block: 'start' }); $el.closest('details').removeAttribute('open')"
                                               :class="activeId === heading.id
                                                   ? 'border-primary-600 text-primary-800 font-medium'
                                                   : 'border-transparent text-base-500 hover:text-base-700'"
                                               class="-ml-px block border-l-2 pl-4 py-1 text-sm transition-colors"
                                               :style="heading.level === 3 ? 'padding-left: 2rem;' : ''"
                                               x-text="heading.text"></a>
                                        </li>
                                    </template>
                                </ul>
                            </nav>
                        </details>
                    </div>

                    <div class="prose prose-lg max-w-none text-base-700 leading-relaxed" x-ref="prose">
                        {!! $post->sanitized_body !!}
                    </div>
                </div>
            </div>
        </div>
    </article>

    {{-- Related Posts --}}
    @if($relatedPosts->isNotEmpty())
        <section class="bg-base-50">
            <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
                <h2 class="text-2xl font-bold text-base-900 mb-8">Related Articles</h2>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($relatedPosts as $related)
                        <x-blog-card :title="$related->title"
                                     :excerpt="$related->excerpt"
                                     :image="$related->featured_image"
                                     :category="$related->category?->name"
                                     :categoryBadgeClass="$related->category?->badgeClass()"
                                     :date="$related->published_at?->format('M j, Y')"
                                     :readTime="$related->read_time"
                                     :href="route('blog.show', $related)" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- CTA --}}
    <x-cta-banner title="Ready to start your Australian journey?"
                  subtitle="Talk to a Blue Education advisor about education pathways, visa options, and career planning — all in one place."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')" />

</x-layout>
