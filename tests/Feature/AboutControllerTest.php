<?php

use App\Http\Controllers\AboutController;
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

it('builds the offices table with correct structure', function () {
    $australians = TeamMember::factory()->australian()->count(2)->create();
    $international = TeamMember::factory()->international()->create([
        'team_type' => 'leadership',
        'name' => 'Sonia Test',
    ]);
    $regional = TeamMember::factory()->international()->create([
        'team_type' => 'general',
        'region' => 'South Asia',
    ]);

    $controller = new AboutController;
    $offices = (new \ReflectionMethod($controller, 'buildOfficesTable'))
        ->invoke($controller, $australians, $international, collect([$regional]));

    // HQ row
    expect($offices[0][0])->toBe('Perth, WA (HQ)');
    expect($offices[0][2])->toBe('Australia-wide');

    // Leadership row
    expect($offices[1][0])->toBe('Global (Offshore)');
    expect($offices[1][1])->toContain('Sonia Test');

    // Regional row
    expect($offices[2][1])->toContain($regional->name);
});
