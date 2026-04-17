<?php

use App\Filament\Resources\Enquiries\Pages\ListEnquiries;
use App\Filament\Resources\Enquiries\Pages\ViewEnquiry;
use App\Models\Enquiry;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Enquiry Resource Tests
|--------------------------------------------------------------------------
|
| View-only operations, infolist display, and authorization for the
| Enquiry admin resource.
|
*/

beforeEach(function () {
    $this->admin = User::factory()->admin()->create();
    $this->actingAs($this->admin);
});

it('can render the list page', function () {
    Livewire::test(ListEnquiries::class)->assertSuccessful();
});

it('can render the view page', function () {
    $enquiry = Enquiry::factory()->create();

    Livewire::test(ViewEnquiry::class, ['record' => $enquiry->getRouteKey()])
        ->assertSuccessful();
});

it('can list enquiries', function () {
    $enquiries = Enquiry::factory()->count(3)->create();

    Livewire::test(ListEnquiries::class)
        ->assertCanSeeTableRecords($enquiries);
});

it('displays enquiry details in the infolist', function () {
    $enquiry = Enquiry::factory()->create();

    Livewire::test(ViewEnquiry::class, ['record' => $enquiry->getRouteKey()])
        ->assertSchemaStateSet([
            'full_name' => $enquiry->full_name,
            'email' => $enquiry->email,
            'enquiry_type' => $enquiry->enquiry_type,
            'message' => $enquiry->message,
        ]);
});

it('can delete an enquiry from the view page', function () {
    $enquiry = Enquiry::factory()->create();

    Livewire::test(ViewEnquiry::class, ['record' => $enquiry->getRouteKey()])
        ->callAction(DeleteAction::class)
        ->assertNotified()
        ->assertRedirect();

    $this->assertModelMissing($enquiry);
});

it('can search enquiries by name', function () {
    $enquiries = Enquiry::factory()->count(3)->create();
    $target = $enquiries->first();

    Livewire::test(ListEnquiries::class)
        ->searchTable($target->full_name)
        ->assertCanSeeTableRecords($enquiries->filter(fn ($e) => $e->is($target)))
        ->assertCanNotSeeTableRecords($enquiries->filter(fn ($e) => ! $e->is($target)));
});

it('marks a new enquiry as read when viewed', function () {
    $enquiry = Enquiry::factory()->create(['status' => 'new']);

    Livewire::test(ViewEnquiry::class, ['record' => $enquiry->getRouteKey()])
        ->assertSuccessful();

    $enquiry->refresh();
    expect($enquiry->status)->toBe('read')
        ->and($enquiry->read_at)->not->toBeNull();
});

it('does not overwrite status when viewing an already-read enquiry', function () {
    $enquiry = Enquiry::factory()->create([
        'status' => 'replied',
        'read_at' => now()->subDay(),
    ]);

    $originalReadAt = $enquiry->read_at->toDateTimeString();

    Livewire::test(ViewEnquiry::class, ['record' => $enquiry->getRouteKey()])
        ->assertSuccessful();

    $enquiry->refresh();
    expect($enquiry->status)->toBe('replied')
        ->and($enquiry->read_at->toDateTimeString())->toBe($originalReadAt);
});

it('denies non-admin users access', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(ListEnquiries::getUrl())
        ->assertForbidden();
});
