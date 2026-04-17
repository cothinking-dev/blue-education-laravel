@props([
    'title',
    'excerpt' => null,
    'image' => null,
    'category' => null,
    'categoryBadgeClass' => 'bg-primary-500',
    'date' => null,
    'readTime' => null,
    'href' => '#',
])

<article {{ $attributes->merge(['class' => 'bg-white rounded-corner-lg border border-base-200 overflow-hidden group grid md:grid-cols-2 gap-0']) }}>
    @if($image)
        <a href="{{ $href }}" class="block overflow-hidden">
            <img src="{{ asset($image) }}"
                 alt="{{ $title }}"
                 class="w-full h-64 md:h-full object-cover transition-transform duration-300 group-hover:scale-105"
                 loading="lazy">
        </a>
    @else
        <a href="{{ $href }}" class="block h-64 md:h-full bg-base-100"></a>
    @endif

    <div class="p-8 flex flex-col justify-center">
        @if($category)
            <x-badge variant="none" :uppercase="false" class="text-white mb-4 self-start {{ $categoryBadgeClass }}">{{ $category }}</x-badge>
        @endif

        <h2 class="text-2xl font-bold text-base-900 mb-3">
            <a href="{{ $href }}" class="hover:text-primary-600 transition-colors">{{ $title }}</a>
        </h2>

        @if($excerpt)
            <p class="text-base-600 mb-4 line-clamp-3">{{ $excerpt }}</p>
        @endif

        <div class="flex items-center gap-3 text-sm text-base-500">
            @if($date)
                <time datetime="{{ $date instanceof \Carbon\Carbon ? $date->toDateString() : $date }}">
                    {{ $date instanceof \Carbon\Carbon ? $date->format('M j, Y') : $date }}
                </time>
            @endif

            @if($readTime)
                <span>&middot;</span>
                <span>{{ $readTime }} min read</span>
            @endif
        </div>
    </div>
</article>
