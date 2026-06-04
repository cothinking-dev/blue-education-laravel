<?php

it('renders Google Tag Manager and Google Analytics from configuration', function () {
    config([
        'services.gtm.container_id' => 'GTM-T4V97SF',
        'services.google_analytics.measurement_id' => 'G-G2WC66L7JH',
    ]);

    $this->get('/contact')
        ->assertSuccessful()
        ->assertSee('https://www.googletagmanager.com/gtm.js?id=', false)
        ->assertSee("})(window,document,'script','dataLayer','GTM-T4V97SF');", false)
        ->assertSee('https://www.googletagmanager.com/ns.html?id=GTM-T4V97SF', false)
        ->assertSee('https://www.googletagmanager.com/gtag/js?id=G-G2WC66L7JH', false)
        ->assertSee("gtag('config', 'G-G2WC66L7JH');", false);
});
