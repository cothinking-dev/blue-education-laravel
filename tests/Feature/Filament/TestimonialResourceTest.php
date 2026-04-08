<?php

use App\Filament\Resources\Testimonials\Pages\CreateTestimonial;
use App\Filament\Resources\Testimonials\Pages\EditTestimonial;
use App\Filament\Resources\Testimonials\Pages\ListTestimonials;
use App\Models\Testimonial;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Testimonial Resource Tests
|--------------------------------------------------------------------------
|
| CRUD operations, validation, and authorization for the Testimonial
| admin resource.
|
*/

beforeEach(function () {
    $this->admin = User::factory()->admin()->create();
    $this->actingAs($this->admin);
});

it('can render the list page', function () {
    Livewire::test(ListTestimonials::class)->assertSuccessful();
});

it('can render the create page', function () {
    Livewire::test(CreateTestimonial::class)->assertSuccessful();
});

it('can render the edit page', function () {
    $testimonial = Testimonial::factory()->create();

    Livewire::test(EditTestimonial::class, ['record' => $testimonial->getRouteKey()])
        ->assertSuccessful();
});

it('can list testimonials', function () {
    $testimonials = Testimonial::factory()->count(3)->create();

    Livewire::test(ListTestimonials::class)
        ->assertCanSeeTableRecords($testimonials);
});

it('can create a testimonial', function () {
    Livewire::test(CreateTestimonial::class)
        ->fillForm([
            'quote' => 'This service changed my life!',
            'name' => 'John Doe',
            'initials' => 'JD',
            'credential' => 'PhD Student',
            'country' => 'Australia',
            'is_active' => true,
            'sort_order' => 1,
        ])
        ->call('create')
        ->assertNotified()
        ->assertRedirect();

    $this->assertDatabaseHas(Testimonial::class, [
        'name' => 'John Doe',
        'quote' => 'This service changed my life!',
    ]);
});

it('can update a testimonial', function () {
    $testimonial = Testimonial::factory()->create();

    Livewire::test(EditTestimonial::class, ['record' => $testimonial->getRouteKey()])
        ->fillForm([
            'name' => 'Jane Updated',
        ])
        ->call('save')
        ->assertNotified();

    expect($testimonial->refresh()->name)->toBe('Jane Updated');
});

it('can delete a testimonial', function () {
    $testimonial = Testimonial::factory()->create();

    Livewire::test(EditTestimonial::class, ['record' => $testimonial->getRouteKey()])
        ->callAction(DeleteAction::class)
        ->assertNotified()
        ->assertRedirect();

    $this->assertSoftDeleted($testimonial);
});

it('validates required fields on create', function (array $data, array $errors) {
    Livewire::test(CreateTestimonial::class)
        ->fillForm([
            'quote' => 'Valid quote.',
            'name' => 'Valid Name',
            'is_active' => true,
            'sort_order' => 0,
            ...$data,
        ])
        ->call('create')
        ->assertHasFormErrors($errors)
        ->assertNotNotified();
})->with([
    '`quote` is required' => [['quote' => null], ['quote' => 'required']],
    '`name` is required' => [['name' => null], ['name' => 'required']],
]);

it('denies non-admin users access', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(ListTestimonials::getUrl())
        ->assertForbidden();
});
