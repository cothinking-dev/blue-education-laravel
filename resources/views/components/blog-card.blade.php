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

<article {{ $attributes->merge(['class' => 'bg-white rounded-corner-lg border border-base-200 overflow-hidden group']) }}>
    @if($image)
        <a href="{{ $href }}" class="block overflow-hidden">
            <img src="{{ asset($image) }}"
                 alt="{{ $title }}"
                 class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                 loading="lazy"
                 width="400"
                 height="192">
        </a>
    @else
        <a href="{{ $href }}" class="block h-48 bg-base-100"></a>
    @endif

    <div class="p-5">
        @if($category)
            <x-badge variant="none" :uppercase="false" class="text-white mb-3 {{ $categoryBadgeClass }}">{{ $category }}</x-badge>
        @endif

        <h3 class="font-bold text-base-900 mb-2 line-clamp-2">
            <a href="{{ $href }}" class="hover:text-primary-600 transition-colors">{{ $title }}</a>
        </h3>

        @if($excerpt)
            <p class="text-sm text-base-600 line-clamp-2 mb-3">{{ $excerpt }}</p>
        @endif

        <div class="flex items-center gap-3 text-xs text-base-500">
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
