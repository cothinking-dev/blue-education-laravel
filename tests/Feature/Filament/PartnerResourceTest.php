<?php

use App\Enums\PartnerCategory;
use App\Filament\Resources\Partners\Pages\CreatePartner;
use App\Filament\Resources\Partners\Pages\EditPartner;
use App\Filament\Resources\Partners\Pages\ListPartners;
use App\Models\Partner;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Partner Resource Tests
|--------------------------------------------------------------------------
|
| CRUD operations, validation, and authorization for the Partner
| admin resource.
|
*/

beforeEach(function () {
    $this->admin = User::factory()->admin()->create();
    $this->actingAs($this->admin);
});

it('can render the list page', function () {
    Livewire::test(ListPartners::class)->assertSuccessful();
});

it('can render the create page', function () {
    Livewire::test(CreatePartner::class)->assertSuccessful();
});

it('can render the edit page', function () {
    $partner = Partner::factory()->create();

    Livewire::test(EditPartner::class, ['record' => $partner->getRouteKey()])
        ->assertSuccessful();
});

it('can list partners', function () {
    $partners = Partner::factory()->count(3)->create();

    Livewire::test(ListPartners::class)
        ->assertCanSeeTableRecords($partners);
});

it('can create a partner', function () {
    Livewire::test(CreatePartner::class)
        ->fillForm([
            'name' => 'Test University',
            'category' => PartnerCategory::University->value,
            'is_active' => true,
            'sort_order' => 1,
        ])
        ->call('create')
        ->assertNotified()
        ->assertRedirect();

    $this->assertDatabaseHas(Partner::class, [
        'name' => 'Test University',
        'category' => PartnerCategory::University->value,
    ]);
});

it('can update a partner', function () {
    $partner = Partner::factory()->create();

    Livewire::test(EditPartner::class, ['record' => $partner->getRouteKey()])
        ->fillForm([
            'name' => 'Updated Partner Name',
        ])
        ->call('save')
        ->assertNotified();

    expect($partner->refresh()->name)->toBe('Updated Partner Name');
});

it('can delete a partner', function () {
    $partner = Partner::factory()->create();

    Livewire::test(EditPartner::class, ['record' => $partner->getRouteKey()])
        ->callAction(DeleteAction::class)
        ->assertNotified()
        ->assertRedirect();

    $this->assertSoftDeleted($partner);
});

it('validates required fields on create', function (array $data, array $errors) {
    Livewire::test(CreatePartner::class)
        ->fillForm([
            'name' => 'Valid Name',
            'category' => PartnerCategory::University->value,
            'is_active' => true,
            'sort_order' => 0,
            ...$data,
        ])
        ->call('create')
        ->assertHasFormErrors($errors)
        ->assertNotNotified();
})->with([
    '`name` is required' => [['name' => null], ['name' => 'required']],
    '`category` is required' => [['category' => null], ['category' => 'required']],
]);

it('denies non-admin users access', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(ListPartners::getUrl())
        ->assertForbidden();
});
