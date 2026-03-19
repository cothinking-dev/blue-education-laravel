<?php

use App\Filament\Resources\Categories\Pages\ListCategories;
use App\Filament\Resources\Enquiries\Pages\ListEnquiries;
use App\Filament\Resources\Faqs\Pages\ListFaqs;
use App\Filament\Resources\Partners\Pages\ListPartners;
use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Filament\Resources\Subscribers\Pages\ListSubscribers;
use App\Filament\Resources\TeamMembers\Pages\ListTeamMembers;
use App\Filament\Resources\Testimonials\Pages\ListTestimonials;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Filament Admin Tests
|--------------------------------------------------------------------------
|
| Verify admin panel pages are accessible to authenticated users
| and protected from guests.
|
*/

it('redirects guests from the admin dashboard to login', function () {
    $this->get('/admin')->assertRedirect('/admin/login');
});

it('shows the login page', function () {
    $this->get('/admin/login')->assertSuccessful();
});

it('lets an admin access the dashboard', function () {
    $this->actingAs(User::factory()->admin()->create())
        ->get('/admin')
        ->assertSuccessful();
});

it('denies non-admin users access to the dashboard', function () {
    $this->actingAs(User::factory()->create())
        ->get('/admin')
        ->assertForbidden();
});

dataset('filament_list_pages', [
    'posts' => ListPosts::class,
    'categories' => ListCategories::class,
    'team members' => ListTeamMembers::class,
    'testimonials' => ListTestimonials::class,
    'faqs' => ListFaqs::class,
    'partners' => ListPartners::class,
    'subscribers' => ListSubscribers::class,
    'enquiries' => ListEnquiries::class,
]);

it('renders admin list pages', function (string $page) {
    $this->actingAs(User::factory()->admin()->create());

    Livewire\Livewire::test($page)->assertSuccessful();
})->with('filament_list_pages');
