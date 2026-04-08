<?php

use App\Filament\Resources\Faqs\Pages\CreateFaq;
use App\Filament\Resources\Faqs\Pages\EditFaq;
use App\Filament\Resources\Faqs\Pages\ListFaqs;
use App\Models\Faq;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| FAQ Resource Tests
|--------------------------------------------------------------------------
|
| CRUD operations, validation, and authorization for the FAQ
| admin resource.
|
*/

beforeEach(function () {
    $this->admin = User::factory()->admin()->create();
    $this->actingAs($this->admin);
});

it('can render the list page', function () {
    Livewire::test(ListFaqs::class)->assertSuccessful();
});

it('can render the create page', function () {
    Livewire::test(CreateFaq::class)->assertSuccessful();
});

it('can render the edit page', function () {
    $faq = Faq::factory()->create();

    Livewire::test(EditFaq::class, ['record' => $faq->getRouteKey()])
        ->assertSuccessful();
});

it('can list faqs', function () {
    $faqs = Faq::factory()->count(3)->create();

    Livewire::test(ListFaqs::class)
        ->assertCanSeeTableRecords($faqs);
});

it('can create a faq', function () {
    Livewire::test(CreateFaq::class)
        ->fillForm([
            'question' => 'What is the meaning of life?',
            'answer' => 'To learn and grow.',
            'category' => 'education',
            'sort_order' => 1,
        ])
        ->call('create')
        ->assertNotified()
        ->assertRedirect();

    $this->assertDatabaseHas(Faq::class, [
        'question' => 'What is the meaning of life?',
    ]);
});

it('can update a faq', function () {
    $faq = Faq::factory()->create();

    Livewire::test(EditFaq::class, ['record' => $faq->getRouteKey()])
        ->fillForm([
            'question' => 'Updated question?',
        ])
        ->call('save')
        ->assertNotified();

    expect($faq->refresh()->question)->toBe('Updated question?');
});

it('can delete a faq', function () {
    $faq = Faq::factory()->create();

    Livewire::test(EditFaq::class, ['record' => $faq->getRouteKey()])
        ->callAction(DeleteAction::class)
        ->assertNotified()
        ->assertRedirect();

    $this->assertSoftDeleted($faq);
});

it('validates required fields on create', function (array $data, array $errors) {
    Livewire::test(CreateFaq::class)
        ->fillForm([
            'question' => 'Valid question?',
            'answer' => 'Valid answer.',
            'category' => 'education',
            'sort_order' => 0,
            ...$data,
        ])
        ->call('create')
        ->assertHasFormErrors($errors)
        ->assertNotNotified();
})->with([
    '`question` is required' => [['question' => null], ['question' => 'required']],
    '`answer` is required' => [['answer' => null], ['answer' => 'required']],
    '`category` is required' => [['category' => null], ['category' => 'required']],
]);

it('denies non-admin users access', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(ListFaqs::getUrl())
        ->assertForbidden();
});
