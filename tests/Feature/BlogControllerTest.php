<?php

use App\Models\Category;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Blog Controller Tests
|--------------------------------------------------------------------------
|
| Verify blog listing, category filtering, and featured post exclusion.
|
*/

it('renders the blog index', function () {
    Post::factory()->published()->count(3)->create();

    $this->get(route('blog.index'))
        ->assertSuccessful()
        ->assertSeeText('Blog');
});

it('filters posts by category', function () {
    $education = Category::factory()->create(['name' => 'Education', 'slug' => 'education']);
    $migration = Category::factory()->create(['name' => 'Migration', 'slug' => 'migration']);

    Post::factory()->published()->count(2)->create(['category_id' => $education->id]);
    Post::factory()->published()->count(3)->create(['category_id' => $migration->id]);

    $this->get(route('blog.index', ['category' => 'education']))
        ->assertSuccessful()
        ->assertSeeText('Education');
});

it('excludes featured post from paginated list', function () {
    $featured = Post::factory()->featured()->create(['title' => 'Featured Post Title']);
    Post::factory()->published()->count(3)->create();

    $response = $this->get(route('blog.index'));

    $response->assertSuccessful();

    $posts = $response->viewData('posts');
    $featuredPost = $response->viewData('featuredPost');

    expect($featuredPost->id)->toBe($featured->id);
    expect($posts->pluck('id'))->not->toContain($featured->id);
});

it('paginates blog posts', function () {
    $category = Category::factory()->create();
    Post::factory()->published()->count(12)->create(['category_id' => $category->id]);

    $response = $this->get(route('blog.index'));
    $posts = $response->viewData('posts');

    expect($posts)->toHaveCount(9);

    $this->get(route('blog.index', ['page' => 2]))
        ->assertSuccessful();
});
