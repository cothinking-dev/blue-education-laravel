<?php

use App\Models\Category;
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
