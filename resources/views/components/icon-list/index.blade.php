{{--
| Prop    | Type   | Default | Description                                              |
|---------|--------|---------|----------------------------------------------------------|
| variant | string | 'check' | Icon variant: check, arrow, shield, star, badge          |
--}}
@props([
    'variant' => 'check',
])

<ul {{ $attributes->merge(['class' => 'space-y-2 mt-3']) }} role="list">
    {{ $slot }}
</ul>
