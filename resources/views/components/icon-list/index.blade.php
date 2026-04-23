{{--
| Prop    | Type   | Default | Description                                              |
|---------|--------|---------|----------------------------------------------------------|
| variant | string | 'check' | Icon variant: check, arrow, shield, star, badge          |
| theme   | string | 'light' | Colour theme: light (default) or dark (for dark bgs)     |
--}}
@props([
    'variant' => 'check',
    'theme' => 'light',
])

<ul {{ $attributes->merge(['class' => 'space-y-2 mt-3']) }} role="list">
    {{ $slot }}
</ul>
