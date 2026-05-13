<?php

/*
|--------------------------------------------------------------------------
| Legal Page Tests
|--------------------------------------------------------------------------
|
| Smoke-tests the Privacy Policy, Terms of Use, and Zero Tolerance to Abuse
| pages plus the footer legal row's required external link to MARA.
|
*/

it('renders the privacy policy with the live-site sections', function () {
    $this->get('/privacy')
        ->assertSuccessful()
        ->assertSeeText('Privacy Policy')
        ->assertSeeText('Collection of your Personal Information')
        ->assertSeeText('Sharing of your Personal Information')
        ->assertSeeText('Use of your Personal Information')
        ->assertSeeText('Safeguarding your Personal Information')
        ->assertSeeText('Accessing Your Personal Information')
        ->assertSee('info@blueeducation.com.au');
});

it('renders the terms of use page', function () {
    $this->get('/terms')
        ->assertSuccessful()
        ->assertSeeText('Terms of Use');
});

it('renders the zero tolerance to abuse page with the live-site sections', function () {
    $this->get('/zero-tolerance-to-abuse')
        ->assertSuccessful()
        ->assertSeeText('Zero Tolerance to Abuse')
        ->assertSeeText('Policy Overview')
        ->assertSeeText('Definition of Abusive Behaviour')
        ->assertSeeText('Reporting Process')
        ->assertSeeText('Investigation and Consequences')
        ->assertSeeText('Communication of Policy')
        ->assertSeeText('Continuous Improvement');
});

it('exposes all four legal links in the footer', function () {
    $response = $this->get('/')->assertSuccessful();

    $response->assertSee(route('privacy'), false);
    $response->assertSee(route('terms'), false);
    $response->assertSee(route('zero-tolerance-to-abuse'), false);
    $response->assertSee('https://www.mara.gov.au/tools-for-registered-agents/code-of-conduct', false);
    $response->assertSeeText('Migration Agents Code of Conduct');
    $response->assertSeeText('Zero Tolerance to Abuse');
});

it('opens the MARA Code of Conduct link in a new tab with noopener', function () {
    $html = $this->get('/')->assertSuccessful()->getContent();

    expect($html)->toMatch('/<a[^>]+href="https:\/\/www\.mara\.gov\.au\/tools-for-registered-agents\/code-of-conduct"[^>]*target="_blank"[^>]*rel="[^"]*noopener[^"]*"/');
});
