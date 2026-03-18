<?php

use App\Models\Category;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Post;
use App\Models\TeamMember;
use App\Models\Testimonial;

/*
|--------------------------------------------------------------------------
| Model Scope Tests
|--------------------------------------------------------------------------
|
| Verify Eloquent scopes filter correctly.
|
*/

it('filters published posts', function () {
    Post::factory()->published()->count(2)->create();
    Post::factory()->draft()->count(3)->create();

    expect(Post::published()->count())->toBe(2);
});

it('filters featured posts', function () {
    Post::factory()->featured()->count(1)->create();
    Post::factory()->published()->create(['is_featured' => false]);

    expect(Post::featured()->count())->toBe(1);
});

it('filters active testimonials', function () {
    Testimonial::factory()->active()->count(3)->create();
    Testimonial::factory()->inactive()->count(2)->create();

    expect(Testimonial::active()->count())->toBe(3);
});

it('filters team members by section', function () {
    TeamMember::factory()->australian()->count(2)->create();
    TeamMember::factory()->international()->count(3)->create();

    expect(TeamMember::section('australian')->count())->toBe(2);
    expect(TeamMember::section('international')->count())->toBe(3);
});

it('relates posts to a category', function () {
    $category = Category::factory()->create();
    Post::factory()->published()->count(3)->create(['category_id' => $category->id]);

    expect($category->posts)->toHaveCount(3);
});

it('filters FAQs by category', function () {
    Faq::factory()->forCategory('education')->count(2)->create();
    Faq::factory()->forCategory('migration')->count(3)->create();

    expect(Faq::category('education')->count())->toBe(2);
    expect(Faq::category('migration')->count())->toBe(3);
});

it('filters partners by type', function () {
    Partner::factory()->university()->count(2)->create();
    Partner::factory()->tafe()->count(3)->create();

    expect(Partner::type('university')->count())->toBe(2);
    expect(Partner::type('tafe')->count())->toBe(3);
});

it('returns excerpt as seo description when available', function () {
    $post = Post::factory()->published()->create(['excerpt' => 'Custom excerpt']);

    expect($post->seo_description)->toBe('Custom excerpt');
});

it('falls back to truncated body for seo description', function () {
    $post = Post::factory()->published()->create([
        'excerpt' => null,
        'body' => str_repeat('a', 200),
    ]);

    expect(strlen($post->seo_description))->toBeLessThanOrEqual(163);
    expect($post->seo_description)->toEndWith('...');
});

it('returns absolute seo image url when featured image exists', function () {
    $post = Post::factory()->published()->create(['featured_image' => 'images/test.jpg']);

    expect($post->seo_image)->toContain('images/test.jpg');
});

it('returns null seo image when no featured image', function () {
    $post = Post::factory()->published()->create(['featured_image' => null]);

    expect($post->seo_image)->toBeNull();
});
