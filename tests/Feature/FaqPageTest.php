<?php

use App\Models\Faq;
use Database\Seeders\FaqSeeder;

/*
|--------------------------------------------------------------------------
| FAQ Page Tests
|--------------------------------------------------------------------------
|
| Validates the FAQ page renders all 5 docx-sourced categories, surfaces
| key cross-references, and emits a valid FAQPage JSON-LD payload.
|
*/

beforeEach(function () {
    $this->seed(FaqSeeder::class);
});

it('renders the FAQ page with all five docx categories', function () {
    $this->get('/faq')
        ->assertSuccessful()
        ->assertSee('Study Options')
        ->assertSee('Student Visa')
        ->assertSee('Living in Australia')
        ->assertSee('Employment &amp; Visa Options', false)
        ->assertSee('Our Fees');
});

it('seeds exactly 19 FAQs from the docx (3 study + 5 visa + 3 living + 3 post-study + 5 fees)', function () {
    expect(Faq::count())->toBe(19);
});

it('seeds the expected number of FAQs per category', function () {
    expect(Faq::where('category', 'study')->count())->toBe(3)
        ->and(Faq::where('category', 'visa')->count())->toBe(5)
        ->and(Faq::where('category', 'living')->count())->toBe(3)
        ->and(Faq::where('category', 'post-study')->count())->toBe(3)
        ->and(Faq::where('category', 'fees')->count())->toBe(5);
});

it('renders at least one question per category', function () {
    $response = $this->get('/faq')->assertSuccessful();

    $response->assertSee('What types of courses can I study in Australia?', false);
    $response->assertSee('What types of visa can I use to study in Australia?', false);
    $response->assertSee('What is the living cost in Australia?', false);
    $response->assertSee('Can I remain in Australia after I complete my course?', false);
    $response->assertSee('Is there a fee for Blue Education', false);
});

it('cross-links FAQ answers to OSHC and other internal pages', function () {
    $response = $this->get('/faq')->assertSuccessful();

    $response->assertSee(route('services.oshc'), false);
    $response->assertSee(route('services.education.english'), false);
    $response->assertSee(route('services.migration.graduate-work'), false);
    $response->assertSee(route('services.career'), false);
    $response->assertSee(route('contact'), false);
});

it('emits a FAQPage JSON-LD payload', function () {
    $this->get('/faq')
        ->assertSuccessful()
        ->assertSee('"FAQPage"', false)
        ->assertSee('application/ld+json', false);
});
