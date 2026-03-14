<?php

use App\Models\Post;
use App\Models\TeamMember;
use App\Models\Testimonial;

/*
|--------------------------------------------------------------------------
| Page Smoke Tests
|--------------------------------------------------------------------------
|
| Verify every public page returns a 200 response.
|
*/

// Static pages (no database dependencies)
dataset('static_pages', [
    'services education index' => '/services/education',
    'services education school' => '/services/education/school',
    'services education english' => '/services/education/english',
    'services education vet-tafe' => '/services/education/vet-tafe',
    'services education degrees' => '/services/education/degrees',
    'services migration index' => '/services/migration',
    'services migration student-visas' => '/services/migration/student-visas',
    'services migration graduate-work' => '/services/migration/graduate-work',
    'services migration permanent-residence' => '/services/migration/permanent-residence',
    'services career' => '/services/career',
    'services student-support' => '/services/student-support',
    'programs index' => '/programs',
    'programs buddy-programme' => '/programs/buddy-programme',
    'programs study-tours' => '/programs/study-tours',
    'programs scsa-associate' => '/programs/scsa-associate',
    'programs executive-internship' => '/programs/executive-internship',
    'why-australia' => '/why-australia',
    'faq' => '/faq',
    'admission-requirements' => '/admission-requirements',
    'fees' => '/fees',
    'contact' => '/contact',
    'privacy' => '/privacy',
    'terms' => '/terms',
]);

it('renders static pages', function (string $uri) {
    $this->get($uri)->assertSuccessful();
})->with('static_pages');

// Pages that need seeded data
it('renders the home page', function () {
    Testimonial::factory()->active()->count(3)->create();

    $this->get('/')->assertSuccessful();
});

it('renders the about page', function () {
    $this->get('/about')->assertSuccessful();
});

it('renders the about team page', function () {
    TeamMember::factory()->australian()->count(2)->create();
    TeamMember::factory()->international()->count(2)->create();

    $this->get('/about/team')->assertSuccessful();
});

it('renders the about partners page', function () {
    $this->get('/about/partners')->assertSuccessful();
});

it('renders the blog listing page', function () {
    Post::factory()->published()->count(3)->create();

    $this->get('/blog')->assertSuccessful();
});

it('renders the blog listing page when empty', function () {
    $this->get('/blog')->assertSuccessful();
});

it('renders a blog post', function () {
    $post = Post::factory()->published()->create();

    $this->get('/blog/'.$post->slug)->assertSuccessful();
});

it('returns 404 for nonexistent blog post', function () {
    $this->get('/blog/nonexistent-slug-12345')->assertNotFound();
});

it('renders the showcase page', function () {
    $this->get('/showcase')->assertSuccessful();
});
