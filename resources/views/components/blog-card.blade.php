@props([
    'title',
    'excerpt' => null,
    'image' => null,
    'category' => null,
    'categoryColor' => '#3b82f6',
    'date' => null,
    'readTime' => null,
    'href' => '#',
])

<article {{ $attributes->merge(['class' => 'bg-white rounded-corner-lg border border-gray-200 overflow-hidden group']) }}>
    @if($image)
        <a href="{{ $href }}" class="block overflow-hidden">
            <img src="{{ asset($image) }}"
                 alt="{{ $title }}"
                 class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                 loading="lazy">
        </a>
    @else
        <a href="{{ $href }}" class="block h-48 bg-gray-100"></a>
    @endif

    <div class="p-5">
        @if($category)
            <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-semibold text-white mb-3"
                  style="background-color: {{ $categoryColor }}">
                {{ $category }}
            </span>
        @endif

        <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">
            <a href="{{ $href }}" class="hover:text-primary-600 transition-colors">{{ $title }}</a>
        </h3>

        @if($excerpt)
            <p class="text-sm text-gray-600 line-clamp-2 mb-3">{{ $excerpt }}</p>
        @endif

        <div class="flex items-center gap-3 text-xs text-gray-400">
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
