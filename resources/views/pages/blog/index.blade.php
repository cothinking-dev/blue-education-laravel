<x-layout title="Blog"
          description="Education, migration, careers, and life in Australia — resources for international students.">

    {{-- §1 Hero --}}
    <x-hero title="Blog — Resources for International Students"
            subtitle="Education, migration, careers, and life in Australia."
            :image="asset('images/heroes/blog.webp')"
            alt="East Asian student smiling on a sunny university campus lawn"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Featured Post --}}
    @if($featuredPost)
        <section class="bg-white">
            <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
                <x-featured-post :title="$featuredPost->title"
                                 :excerpt="$featuredPost->excerpt"
                                 :image="$featuredPost->featured_image"
                                 :category="$featuredPost->category?->name"
                                 :categoryBadgeClass="$featuredPost->category?->badgeClass()"
                                 :date="$featuredPost->published_at?->format('M j, Y')"
                                 :readTime="$featuredPost->read_time"
                                 :href="route('blog.show', $featuredPost)" />
            </div>
        </section>
    @endif

    {{-- §3 Category Filter + Posts Grid --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">

            {{-- Category Filter --}}
            @if($categories->isNotEmpty())
                <div class="flex flex-wrap gap-2 mb-10">
                    <a href="{{ route('blog.index') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors border border-base-200 {{ !$activeCategory ? 'bg-primary-800 text-white' : 'bg-white text-base-700 hover:bg-base-100' }}">All</a>
                    @foreach($categories as $category)
                        <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors border border-base-200 {{ $activeCategory === $category->slug ? 'bg-primary-800 text-white' : 'bg-white text-base-700 hover:bg-base-100' }}">{{ $category->name }}</a>
                    @endforeach
                </div>
            @endif

            {{-- Posts Grid --}}
            @if($posts->isNotEmpty())
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                    @foreach($posts as $post)
                        <div>
                            <x-blog-card :title="$post->title"
                                         :excerpt="$post->excerpt"
                                         :image="$post->featured_image"
                                         :category="$post->category?->name"
                                         :categoryBadgeClass="$post->category?->badgeClass()"
                                         :date="$post->published_at?->format('M j, Y')"
                                         :readTime="$post->read_time"
                                         :href="route('blog.show', $post)" />
                        </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                @if($posts->hasPages())
                    <div class="mt-10">
                        <x-pagination :paginator="$posts" />
                    </div>
                @endif
            @else
                <p class="text-base-500 text-center py-12">No posts published yet. Check back soon.</p>
            @endif
        </div>
    </section>

    {{-- §4 CTA --}}
    <x-cta-banner title="Ready to start your Australian journey?"
                  subtitle="Talk to a Blue Education advisor about education pathways, visa options, and career planning — all in one place."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
