<?php

use App\Models\Partner;

/*
|--------------------------------------------------------------------------
| Partner Page Tests
|--------------------------------------------------------------------------
|
| Verify the public partners page displays data from the database.
|
*/

it('renders the partners page with seeded data', function () {
    Partner::factory()->active()->university()->create(['name' => 'Test University']);
    Partner::factory()->active()->credential()->create([
        'name' => 'Test Credential',
        'description' => 'A test credential description.',
    ]);
    Partner::factory()->active()->internationalOffice()->create([
        'name' => 'Test Office',
        'representative' => 'Jane Doe',
        'coverage' => 'Oceania',
    ]);

    $this->get('/about/partners')
        ->assertSuccessful()
        ->assertSeeText('Test University')
        ->assertSeeText('Test Credential')
        ->assertSeeText('A test credential description.')
        ->assertSeeText('Test Office')
        ->assertSeeText('Jane Doe')
        ->assertSeeText('Oceania');
});

it('renders the partners page when empty', function () {
    $this->get('/about/partners')->assertSuccessful();
});

it('does not display inactive partners', function () {
    Partner::factory()->inactive()->university()->create(['name' => 'Hidden University']);

    $this->get('/about/partners')
        ->assertSuccessful()
        ->assertDontSeeText('Hidden University');
});
