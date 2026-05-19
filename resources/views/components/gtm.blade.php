@props(['containerId' => null])

@php
    $containerId ??= config('services.gtm.container_id');
@endphp

@if ($containerId)
    {{-- Google Consent Mode v2 — default to denied, updated when the user accepts. --}}
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}

        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied',
            'functionality_storage': 'granted',
            'security_storage': 'granted',
            'wait_for_update': 500
        });

        try {
            const stored = localStorage.getItem('cookie_consent');
            if (stored === 'granted') {
                gtag('consent', 'update', {
                    'ad_storage': 'granted',
                    'ad_user_data': 'granted',
                    'ad_personalization': 'granted',
                    'analytics_storage': 'granted'
                });
                dataLayer.push({'event': 'cookie_consent_accepted'});
            }
        } catch (e) { /* localStorage unavailable */ }
    </script>

    {{-- Google Tag Manager --}}
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ $containerId }}');</script>
    {{-- End Google Tag Manager --}}
@endif
