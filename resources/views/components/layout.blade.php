@props([
    'title' => null,
    'description' => null,
    'ogImage' => null,
    'ogType' => null,
    'robots' => null,
    'canonical' => null,
    'noSuffix' => false,
    'jsonLd' => null,
    'articlePublishedTime' => null,
    'articleModifiedTime' => null,
    'transparentNav' => true,
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
        :og-image="$ogImage"
        :og-type="$ogType"
        :robots="$robots"
        :canonical="$canonical"
        :no-suffix="$noSuffix"
        :json-ld="$jsonLd"
        :article-published-time="$articlePublishedTime"
        :article-modified-time="$articleModifiedTime"
    />

    <x-favicon />

    {{-- Fonts — preload CSS then apply --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Vite assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Per-page head content --}}
    {{ $head ?? '' }}
</head>
<body class="bg-white text-base-900 font-sans antialiased">

    <x-nav :transparent="$transparentNav" />

    <main id="main-content">
        {{ $slot }}
    </main>

    <x-footer />

    <x-whatsapp-widget />

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.15.8/dist/cdn.min.js"></script>

    {{-- Per-page scripts --}}
    {{ $scripts ?? '' }}
</body>
</html>
