@props([
    'partners',
    'title',
])

@if($partners->isNotEmpty())
    <h3 class="text-xl font-semibold text-base-800 mb-4 mt-10">{{ $title }}</h3>
    {{ $slot }}
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
        @foreach($partners as $partner)
            <div class="bg-base-50 border border-base-200 rounded-corner-lg p-6 flex items-center justify-center shadow-md" style="min-height:90px;">
                @if($partner->logo)
                    <img src="{{ $partner->logoUrl() }}" alt="{{ $partner->name }} logo" class="h-10 w-auto object-contain" loading="lazy">
                @else
                    <span class="text-xs text-base-400 font-medium">{{ $partner->name }}</span>
                @endif
            </div>
        @endforeach
    </div>
@endif
