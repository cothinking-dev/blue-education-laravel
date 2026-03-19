<?php

/*
|--------------------------------------------------------------------------
| OG Image Generation Tests
|--------------------------------------------------------------------------
|
| Verify the dynamic OG image endpoint responds correctly.
|
*/

it('returns a PNG image for the home page', function () {
    $response = $this->get('/og-image');

    $response->assertSuccessful();
    $response->assertHeader('Content-Type', 'image/png');
});

it('returns a PNG image for a nested page path', function () {
    $response = $this->get('/og-image/services/education');

    $response->assertSuccessful();
    $response->assertHeader('Content-Type', 'image/png');
});

it('resolves the route label as title', function () {
    // The contact route has label "Contact" — the image should generate without error
    $response = $this->get('/og-image/contact');

    $response->assertSuccessful();
    $response->assertHeader('Content-Type', 'image/png');
});

it('includes dynamic og:image URL in page meta tags', function () {
    $response = $this->get('/contact');

    $response->assertSuccessful();
    $response->assertSee('og-image/contact', false);
});
