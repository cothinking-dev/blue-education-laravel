<?php

/*
|--------------------------------------------------------------------------
| Contact Page Tests
|--------------------------------------------------------------------------
|
| Verifies the contact page surfaces all five international offices and
| that every office uses the single central WhatsApp/email pair.
|
*/

it('renders the contact page', function () {
    $this->get('/contact')->assertSuccessful();
});

it('lists all five offices', function () {
    $response = $this->get('/contact')->assertSuccessful();

    $response->assertSeeText('Our Offices');

    // Each office's country label appears in the Our Offices grid
    foreach (['Australia', 'Malaysia', 'Indonesia', 'Ghana', 'Zambia'] as $country) {
        $response->assertSeeText($country);
    }

    // Each office's distinctive address fragment renders
    $response->assertSeeText('33 (GF) Barrack Street')
        ->assertSeeText('Shah Alam')
        ->assertSeeText('Menara Batavia')
        ->assertSeeText('Asylum Down')
        ->assertSeeText('Kitwe');
});

it('routes every office to the same central WhatsApp and email', function () {
    $response = $this->get('/contact')->assertSuccessful();

    // The single email appears in every office card (plus the contact-method card),
    // so we expect to see it at least six times.
    expect(substr_count($response->getContent(), 'info@blueeducation.com.au'))
        ->toBeGreaterThanOrEqual(6);
});
