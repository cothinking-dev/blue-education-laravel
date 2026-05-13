<?php

/*
|--------------------------------------------------------------------------
| Fees & Costs Page Tests
|--------------------------------------------------------------------------
|
| Asserts the rewritten fees page surfaces the key docx-sourced amounts
| and links (Home Affairs VAC, Bupa MVS, cost-of-living calculator).
|
*/

it('renders the fees page successfully', function () {
    $this->get('/fees')->assertSuccessful()->assertSeeText('Fees & Costs');
});

it('shows the key cost figures from the docx', function () {
    $response = $this->get('/fees')->assertSuccessful();

    $response->assertSeeText('AUD 300')          // skills assessment / migration consultation
        ->assertSeeText('AUD 2,000')             // student visa VAC base
        ->assertSeeText('AUD 1,500')             // OSHC ~2 years
        ->assertSeeText('AUD 268.30')            // medical exam 501
        ->assertSeeText('AUD 138.60')            // chest X-ray 502
        ->assertSeeText('AUD 450')               // weekly living min
        ->assertSeeText('AUD 750');              // weekly living max
});

it('cross-links to Home Affairs, Bupa MVS, and the cost-of-living calculator', function () {
    $response = $this->get('/fees')->assertSuccessful();

    $response->assertSee('immi.homeaffairs.gov.au/visas/getting-a-visa/fees-and-charges/current-visa-pricing', false)
        ->assertSee('bupa.com.au/bupamvs/more-information/fees/australian-mvs', false)
        ->assertSee('intl-student-living-cost-australia.base44.app', false);
});

it('cross-links to OSHC and student support pages internally', function () {
    $response = $this->get('/fees')->assertSuccessful();

    $response->assertSee(route('services.oshc'), false)
        ->assertSee(route('services.student-support'), false)
        ->assertSee(route('services.migration.student-visas'), false);
});
