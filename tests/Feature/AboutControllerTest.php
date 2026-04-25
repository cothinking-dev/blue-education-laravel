<?php

/*
|--------------------------------------------------------------------------
| About Controller Tests
|--------------------------------------------------------------------------
|
| Verify team page displays correct sections and office table structure.
|
*/

it('displays Australian team members on the team page', function () {
    $this->get('/about/team')
        ->assertSuccessful()
        ->assertSeeText('Glen Ong')
        ->assertSeeText('Monica Gaikwad')
        ->assertSeeText('Flora Wang')
        ->assertSeeText('Shen Sekhon');
});

it('displays International team members on the team page', function () {
    $this->get('/about/team')
        ->assertSuccessful()
        ->assertSeeText('Sonia Ong')
        ->assertSeeText('Elaine Ho')
        ->assertSeeText('Sherene Chan');
});

it('displays the expertise section on the team page', function () {
    $this->get('/about/team')
        ->assertSuccessful()
        ->assertSeeText('Our Expertise')
        ->assertSeeText('Education')
        ->assertSeeText('Migration');
});
