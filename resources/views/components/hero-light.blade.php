{{--
| Prop        | Type    | Default | Description                          |
|-------------|---------|---------|--------------------------------------|
| title       | string  | —       | Page heading (h1)                    |
| subtitle    | ?string | null    | Paragraph below title                |
| badge       | ?string | null    | Small label above the title          |
| breadcrumbs | mixed   | null    | Truthy value enables auto-breadcrumb |
| height      | string  | '80dvh' | CSS min-height value                 |
--}}
@props([
    'title',
    'subtitle' => null,
    'badge' => null,
    'breadcrumbs' => null,
    'height' => '80dvh',
])

<section {{ $attributes->merge(['class' => 'relative']) }} style="min-height:{{ $height }}; background: linear-gradient(180deg, var(--color-primary-50) 0%, white 100%);">
    <div class="relative z-10 px-8 py-20 max-w-3xl mx-auto text-center">
        @if($breadcrumbs)
            <x-auto-breadcrumb class="mb-6 justify-center" />
        @endif
        @if($badge)
            <x-badge variant="primary-light" size="md" class="mb-4">{{ $badge }}</x-badge>
        @endif
        <h1 class="text-4xl lg:text-5xl font-bold text-base-900 mb-5 leading-tight text-pretty">{{ $title }}</h1>
        @if($subtitle)
            <p class="text-xl text-base-600 mb-8 text-pretty">{{ $subtitle }}</p>
        @endif
        {{ $slot }}
    </div>
</section>
