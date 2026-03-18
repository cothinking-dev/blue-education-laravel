@props([
    'name',
    'role',
    'photo' => null,
    'bio' => null,
    'credentials' => null,
    'languages' => null,
])

<div {{ $attributes->merge(['class' => 'text-center']) }}>
    @if($photo)
        <picture class="block mx-auto mb-4">
            <source srcset="{{ asset(preg_replace('/\.(png|jpe?g)$/i', '.webp', $photo)) }}" type="image/webp">
            <img src="{{ asset($photo) }}"
                 alt="{{ $name }}"
                 class="w-40 h-40 rounded-full object-cover mx-auto"
                 loading="lazy">
        </picture>
    @else
        <div class="w-40 h-40 rounded-full bg-primary-100 flex items-center justify-center mx-auto mb-4">
            <span class="text-3xl font-bold text-primary-600">{{ collect(explode(' ', $name))->map(fn($w) => mb_substr($w, 0, 1))->take(2)->join('') }}</span>
        </div>
    @endif

    <h3 class="text-lg font-bold text-base-900">{{ $name }}</h3>
    <p class="text-sm text-primary-600 font-medium mt-0.5">{{ $role }}</p>

    @if($credentials)
        <p class="text-xs text-base-500 mt-1">{{ $credentials }}</p>
    @endif

    @if($bio)
        <p class="text-sm text-base-600 mt-3 leading-relaxed">{{ $bio }}</p>
    @endif

    @if($languages)
        <p class="text-xs text-base-500 mt-2">
            <span class="font-medium">Languages:</span> {{ $languages }}
        </p>
    @endif
</div>
