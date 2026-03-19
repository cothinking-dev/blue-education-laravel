<?php

/*
|--------------------------------------------------------------------------
| OG Image Generation Tests
|--------------------------------------------------------------------------
|
| Verify the dynamic OG image endpoint responds correctly.
|
*/

it('returns a PNG image with default title', function () {
    $response = $this->get(route('og-image'));

    $response->assertSuccessful();
    $response->assertHeader('Content-Type', 'image/png');
});

it('returns a PNG image with a custom title', function () {
    $response = $this->get(route('og-image', ['title' => 'Education Services']));

    $response->assertSuccessful();
    $response->assertHeader('Content-Type', 'image/png');
});

it('returns a PNG image with title and subtitle', function () {
    $response = $this->get(route('og-image', [
        'title' => 'Study in Australia',
        'subtitle' => 'World-class education from Perth, WA',
    ]));

    $response->assertSuccessful();
    $response->assertHeader('Content-Type', 'image/png');
});

it('includes dynamic og:image URL in page meta tags', function () {
    $response = $this->get('/contact');

    $response->assertSuccessful();
    $response->assertSee('og-image?title=', false);
});
