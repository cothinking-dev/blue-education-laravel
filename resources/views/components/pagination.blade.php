@props([
    'paginator',
])

@if($paginator->hasPages())
    <nav {{ $attributes->merge(['class' => 'flex items-center justify-center gap-1']) }} aria-label="Pagination">
        {{-- Previous --}}
        @if($paginator->onFirstPage())
            <span class="inline-flex items-center gap-1 px-3 py-2 text-sm text-gray-300 cursor-not-allowed">
                <x-heroicon-m-chevron-left class="h-4 w-4" />
                Previous
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex items-center gap-1 px-3 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-colors">
                <x-heroicon-m-chevron-left class="h-4 w-4" />
                Previous
            </a>
        @endif

        {{-- Page numbers --}}
        @foreach($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
            @if($page == $paginator->currentPage())
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-corner text-sm font-semibold bg-primary-600 text-white">
                    {{ $page }}
                </span>
            @else
                <a href="{{ $url }}" class="inline-flex items-center justify-center w-10 h-10 rounded-corner text-sm font-medium text-gray-700 hover:bg-gray-100 transition-colors">
                    {{ $page }}
                </a>
            @endif
        @endforeach

        {{-- Next --}}
        @if($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex items-center gap-1 px-3 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-colors">
                Next
                <x-heroicon-m-chevron-right class="h-4 w-4" />
            </a>
        @else
            <span class="inline-flex items-center gap-1 px-3 py-2 text-sm text-gray-300 cursor-not-allowed">
                Next
                <x-heroicon-m-chevron-right class="h-4 w-4" />
            </span>
        @endif
    </nav>
@endif
