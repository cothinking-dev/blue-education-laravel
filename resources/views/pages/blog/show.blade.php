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

    {{-- Article --}}
    <article class="bg-white">
        <div class="max-w-3xl mx-auto px-8 lg:px-16 py-14">

            {{-- Meta --}}
            <div class="flex flex-wrap items-center gap-3 mb-6 text-sm">
                @if($post->category)
                    <span class="inline-block text-xs font-semibold px-2.5 py-0.5 rounded-full text-white {{ $post->category->badgeClass() }}">{{ $post->category->name }}</span>
                @endif
                @if($post->published_at)
                    <span class="text-base-500">{{ $post->published_at->format('d M Y') }}</span>
                @endif
                @if($post->read_time)
                    <span class="text-base-400">&middot;</span>
                    <span class="text-base-500">{{ $post->read_time }} min read</span>
                @endif
            </div>

            {{-- Title --}}
            <h1 class="text-3xl lg:text-4xl font-bold text-base-900 mb-8 text-pretty leading-tight">{{ $post->title }}</h1>

            {{-- Featured Image --}}
            @if($post->featured_image)
                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full rounded-corner-lg mb-8 aspect-[2/1] object-cover shadow-lg" loading="eager">
            @endif

            {{-- Body --}}
            <div class="prose prose-lg max-w-none text-base-700 leading-relaxed">
                {!! $post->body !!}
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
                                     :date="$related->published_at?->format('d M Y')"
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
