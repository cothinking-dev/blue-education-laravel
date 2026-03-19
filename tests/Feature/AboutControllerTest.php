<?php

use App\Models\TeamMember;

/*
|--------------------------------------------------------------------------
| About Controller Tests
|--------------------------------------------------------------------------
|
| Verify team page displays correct sections and office table structure.
|
*/

it('displays Australian team members on the team page', function () {
    $australians = TeamMember::factory()->australian()->count(3)->create();

    $response = $this->get('/about/team')->assertSuccessful();

    foreach ($australians as $member) {
        $response->assertSeeText($member->name);
    }
});

it('displays International team members on the team page', function () {
    $internationals = TeamMember::factory()->international()->count(3)->create();

    $response = $this->get('/about/team')->assertSuccessful();

    foreach ($internationals as $member) {
        $response->assertSeeText($member->name);
    }
});

it('builds the offices table with correct structure via the team page', function () {
    TeamMember::factory()->australian()->count(2)->create();
    $leadership = TeamMember::factory()->international()->create([
        'team_type' => 'leadership',
        'name' => 'Sonia Test',
    ]);
    TeamMember::factory()->international()->create([
        'team_type' => 'general',
        'region' => 'South Asia',
    ]);

    $response = $this->get('/about/team')->assertSuccessful();

    // HQ row
    $response->assertSeeText('Perth, WA (HQ)');
    $response->assertSeeText('Australia-wide');

    // Leadership row
    $response->assertSeeText('Global (Offshore)');
    $response->assertSeeText('Sonia Test');

    // Regional row
    $response->assertSeeText('South Asia');
});
