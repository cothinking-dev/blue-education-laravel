@props([
    'title' => null,
    'description' => null,
    'keywords' => null,
    'ogImage' => null,
    'ogType' => null,
    'robots' => null,
    'canonical' => null,
    'noSuffix' => false,
    'jsonLd' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-seo
        :title="$title"
        :description="$description"
        :keywords="$keywords"
        :og-image="$ogImage"
        :og-type="$ogType"
        :robots="$robots"
        :canonical="$canonical"
        :no-suffix="$noSuffix"
        :json-ld="$jsonLd"
    />

    <x-favicon />

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Vite assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Per-page head content --}}
    {{ $head ?? '' }}
</head>
<body class="bg-white text-gray-900 font-sans antialiased">

    <x-nav />

    <main id="main-content">
        {{ $slot }}
    </main>

    <x-footer />

    <x-whatsapp-widget />

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Per-page scripts --}}
    {{ $scripts ?? '' }}
</body>
</html>
