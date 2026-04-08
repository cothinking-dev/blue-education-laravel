<?php

use App\Filament\Resources\Categories\Pages\CreateCategory;
use App\Filament\Resources\Categories\Pages\EditCategory;
use App\Filament\Resources\Categories\Pages\ListCategories;
use App\Models\Category;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Category Resource Tests
|--------------------------------------------------------------------------
|
| CRUD operations, validation, and authorization for the Category
| admin resource.
|
*/

beforeEach(function () {
    $this->admin = User::factory()->admin()->create();
    $this->actingAs($this->admin);
});

it('can render the list page', function () {
    Livewire::test(ListCategories::class)->assertSuccessful();
});

it('can render the create page', function () {
    Livewire::test(CreateCategory::class)->assertSuccessful();
});

it('can render the edit page', function () {
    $category = Category::factory()->create();

    Livewire::test(EditCategory::class, ['record' => $category->getRouteKey()])
        ->assertSuccessful();
});

it('can list categories', function () {
    $categories = Category::factory()->count(3)->create();

    Livewire::test(ListCategories::class)
        ->assertCanSeeTableRecords($categories);
});

it('can create a category', function () {
    Livewire::test(CreateCategory::class)
        ->fillForm([
            'name' => 'Test Category',
            'slug' => 'test-category',
            'sort_order' => 10,
        ])
        ->call('create')
        ->assertNotified()
        ->assertRedirect();

    $this->assertDatabaseHas(Category::class, [
        'name' => 'Test Category',
        'slug' => 'test-category',
    ]);
});

it('can update a category', function () {
    $category = Category::factory()->create();

    Livewire::test(EditCategory::class, ['record' => $category->getRouteKey()])
        ->fillForm([
            'name' => 'Updated Name',
        ])
        ->call('save')
        ->assertNotified();

    expect($category->refresh()->name)->toBe('Updated Name');
});

it('can delete a category', function () {
    $category = Category::factory()->create();

    Livewire::test(EditCategory::class, ['record' => $category->getRouteKey()])
        ->callAction(DeleteAction::class)
        ->assertNotified()
        ->assertRedirect();

    $this->assertModelMissing($category);
});

it('validates required fields on create', function (array $data, array $errors) {
    Livewire::test(CreateCategory::class)
        ->fillForm([
            'name' => 'Valid Name',
            'slug' => 'valid-slug',
            'sort_order' => 0,
            ...$data,
        ])
        ->call('create')
        ->assertHasFormErrors($errors)
        ->assertNotNotified();
})->with([
    '`name` is required' => [['name' => null], ['name' => 'required']],
    '`slug` is required' => [['slug' => null], ['slug' => 'required']],
]);

it('validates slug uniqueness', function () {
    Category::factory()->create(['slug' => 'taken-slug']);

    Livewire::test(CreateCategory::class)
        ->fillForm([
            'name' => 'New Category',
            'slug' => 'taken-slug',
            'sort_order' => 0,
        ])
        ->call('create')
        ->assertHasFormErrors(['slug' => 'unique']);
});

it('denies non-admin users access', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(ListCategories::getUrl())
        ->assertForbidden();
});
