<?php

use App\Models\Testimonial;

it('returns a successful response for the home page', function () {
    Testimonial::factory()->active()->count(3)->create();

    $this->get('/')->assertSuccessful();
});
