<x-layout title="Blog"
          description="Education, migration, careers, and life in Australia — resources for international students.">

    {{-- §1 Hero --}}
    <x-hero title="Blog — Resources for International Students"
            subtitle="Education, migration, careers, and life in Australia."
            :image="asset('images/heroes/blog.webp')"
            alt="East Asian student studying with laptop in a university library"
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
                                 :categoryColor="$featuredPost->category?->color"
                                 :date="$featuredPost->published_at?->format('d M Y')"
                                 :readTime="$featuredPost->read_time . ' min read'"
                                 :href="route('blog.show', $featuredPost)" />
            </div>
        </section>
    @endif

    {{-- §3 Category Filter + Posts Grid --}}
    <section class="bg-gray-50" x-data="{ filter: 'all' }">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">

            {{-- Category Filter --}}
            @if($categories->isNotEmpty())
                <div class="flex flex-wrap gap-2 mb-10">
                    <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-primary-800 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors border border-gray-200">All</button>
                    @foreach($categories as $category)
                        <button @click="filter = '{{ $category->slug }}'" :class="filter === '{{ $category->slug }}' ? 'bg-primary-800 text-white' : 'bg-white text-gray-700 hover:bg-gray-100'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors border border-gray-200">{{ $category->name }}</button>
                    @endforeach
                </div>
            @endif

            {{-- Posts Grid --}}
            @if($posts->isNotEmpty())
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                    @foreach($posts as $post)
                        <div x-show="filter === 'all' || filter === '{{ $post->category?->slug }}'" x-transition>
                            <x-blog-card :title="$post->title"
                                         :excerpt="$post->excerpt"
                                         :image="$post->featured_image"
                                         :category="$post->category?->name"
                                         :categoryColor="$post->category?->color"
                                         :date="$post->published_at?->format('d M Y')"
                                         :readTime="$post->read_time . ' min read'"
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
                <p class="text-gray-500 text-center py-12">No posts published yet. Check back soon.</p>
            @endif
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/blog/writing-blogging.webp') }}" alt="East Asian student writing a blog article on a laptop" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/blog/library-reading.webp') }}" alt="East Asian student reading in a modern university library" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §4 Newsletter --}}
    <x-newsletter title="Stay informed."
                  description="Education, migration, and career updates — delivered to your inbox."
                  placeholder="your@email.com"
                  buttonText="Subscribe" />

    {{-- §5 CTA --}}
    <x-cta-banner title="Ready to start your Australian journey?"
                  subtitle="Talk to a Blue Education advisor about education pathways, visa options, and career planning — all in one place."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
