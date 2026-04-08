<?php

use App\Filament\Resources\Posts\Pages\CreatePost;
use App\Filament\Resources\Posts\Pages\EditPost;
use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Testing\TestAction;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Post Resource Tests
|--------------------------------------------------------------------------
|
| CRUD operations, validation, table features, and authorization
| for the Post admin resource.
|
*/

beforeEach(function () {
    $this->admin = User::factory()->admin()->create();
    $this->actingAs($this->admin);
});

it('can render the list page', function () {
    Livewire::test(ListPosts::class)->assertSuccessful();
});

it('can render the create page', function () {
    Livewire::test(CreatePost::class)->assertSuccessful();
});

it('can render the edit page', function () {
    $post = Post::factory()->create();

    Livewire::test(EditPost::class, ['record' => $post->getRouteKey()])
        ->assertSuccessful();
});

it('can list posts', function () {
    $posts = Post::factory()->count(3)->create();

    Livewire::test(ListPosts::class)
        ->assertCanSeeTableRecords($posts);
});

it('can search posts by title', function () {
    $posts = Post::factory()->count(3)->create();
    $target = $posts->first();

    Livewire::test(ListPosts::class)
        ->searchTable($target->title)
        ->assertCanSeeTableRecords($posts->filter(fn ($p) => $p->is($target)))
        ->assertCanNotSeeTableRecords($posts->filter(fn ($p) => ! $p->is($target)));
});

it('can create a post', function () {
    $category = Category::factory()->create();
    $newPost = Post::factory()->make(['category_id' => $category->id]);

    Livewire::test(CreatePost::class)
        ->fillForm([
            'category_id' => $newPost->category_id,
            'title' => $newPost->title,
            'slug' => $newPost->slug,
            'excerpt' => $newPost->excerpt,
            'body' => $newPost->body,
            'is_featured' => $newPost->is_featured,
            'is_published' => $newPost->is_published,
            'published_at' => $newPost->published_at,
            'read_time' => $newPost->read_time,
        ])
        ->call('create')
        ->assertNotified()
        ->assertRedirect();

    $this->assertDatabaseHas(Post::class, [
        'title' => $newPost->title,
        'slug' => $newPost->slug,
    ]);
});

it('can update a post', function () {
    $post = Post::factory()->create();

    Livewire::test(EditPost::class, ['record' => $post->getRouteKey()])
        ->fillForm([
            'title' => 'Updated Title',
        ])
        ->call('save')
        ->assertNotified();

    expect($post->refresh()->title)->toBe('Updated Title');
});

it('can delete a post', function () {
    $post = Post::factory()->create();

    Livewire::test(EditPost::class, ['record' => $post->getRouteKey()])
        ->callAction(DeleteAction::class)
        ->assertNotified()
        ->assertRedirect();

    $this->assertSoftDeleted($post);
});

it('can bulk delete posts', function () {
    $posts = Post::factory()->count(3)->create();

    Livewire::test(ListPosts::class)
        ->assertCanSeeTableRecords($posts)
        ->selectTableRecords($posts)
        ->callAction(TestAction::make(DeleteBulkAction::class)->table()->bulk())
        ->assertNotified()
        ->assertCanNotSeeTableRecords($posts);

    foreach ($posts as $post) {
        $this->assertSoftDeleted($post);
    }
});

it('validates required fields on create', function (array $data, array $errors) {
    $category = Category::factory()->create();
    $newPost = Post::factory()->make(['category_id' => $category->id]);

    Livewire::test(CreatePost::class)
        ->fillForm([
            'category_id' => $newPost->category_id,
            'title' => $newPost->title,
            'slug' => $newPost->slug,
            'body' => $newPost->body,
            'is_featured' => $newPost->is_featured,
            'is_published' => $newPost->is_published,
            'read_time' => $newPost->read_time,
            ...$data,
        ])
        ->call('create')
        ->assertHasFormErrors($errors)
        ->assertNotNotified();
})->with([
    '`title` is required' => [['title' => null], ['title' => 'required']],
    '`slug` is required' => [['slug' => null], ['slug' => 'required']],
    '`category_id` is required' => [['category_id' => null], ['category_id' => 'required']],
]);

it('validates slug uniqueness', function () {
    $existing = Post::factory()->create(['slug' => 'taken-slug']);

    Livewire::test(CreatePost::class)
        ->fillForm([
            'category_id' => $existing->category_id,
            'title' => 'New Post',
            'slug' => 'taken-slug',
            'body' => '<p>Content</p>',
            'is_featured' => false,
            'is_published' => false,
            'read_time' => 5,
        ])
        ->call('create')
        ->assertHasFormErrors(['slug' => 'unique']);
});

it('denies non-admin users access', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(ListPosts::getUrl())
        ->assertForbidden();
});
