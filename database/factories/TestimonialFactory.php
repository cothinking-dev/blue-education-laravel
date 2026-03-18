<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quotes = [
            'Blue Education made my dream of studying in Australia a reality. From visa guidance to university selection, they were with me every step of the way.',
            'I was overwhelmed by the application process until I found Blue Education. Their team simplified everything and I got into my first-choice university.',
            'The personalised attention I received was incredible. They didn\'t just help me with paperwork — they genuinely cared about my career goals.',
            'Thanks to Blue Education, I secured a scholarship that I didn\'t even know existed. Their knowledge of Australian universities is unmatched.',
            'Moving to Perth was the best decision I\'ve ever made, and Blue Education made the transition seamless. I felt supported from day one.',
            'Their migration advice was spot on. I now have a clear pathway from my student visa to permanent residency.',
            'I recommend Blue Education to every international student I meet. They go above and beyond what any agency I\'ve worked with has done.',
            'The team helped me find a course that perfectly aligned with my career aspirations. I\'m now working in my dream role in Australia.',
            'From IELTS preparation tips to accommodation advice, Blue Education covered everything. They truly offer end-to-end support.',
            'I was nervous about studying abroad, but the Blue Education team made me feel confident and prepared. I couldn\'t have done it without them.',
            'What sets Blue Education apart is their honesty. They gave me realistic expectations and helped me plan accordingly.',
            'My consultant understood the education system inside out. Their expertise saved me time, money, and a lot of stress.',
        ];

        $credentials = [
            'Bachelor of Commerce — UWA',
            'Master of IT — Curtin University',
            'Bachelor of Nursing — Edith Cowan University',
            'Master of Engineering — University of Adelaide',
            'Bachelor of Business — Murdoch University',
            'Diploma of Hospitality — TAFE WA',
            'Master of Accounting — UWA',
            'Bachelor of Education — Curtin University',
            'Master of Social Work — Flinders University',
            'Graduate Certificate in Data Science — UWA',
            'Bachelor of Science — University of Melbourne',
            'MBA — Curtin University',
        ];

        $countries = [
            'India', 'Nepal', 'Vietnam', 'Philippines', 'China',
            'South Korea', 'Indonesia', 'Pakistan', 'Bangladesh',
            'Sri Lanka', 'Thailand', 'Kenya', 'Nigeria', 'Colombia',
        ];

        $name = fake()->name();
        $nameParts = explode(' ', $name);
        $initials = collect($nameParts)
            ->map(fn (string $part) => mb_strtoupper(mb_substr($part, 0, 1)))
            ->implode('');

        return [
            'quote' => fake()->randomElement($quotes),
            'name' => $name,
            'initials' => $initials,
            'credential' => fake()->randomElement($credentials),
            'country' => fake()->randomElement($countries),
            'is_active' => fake()->boolean(90),
            'sort_order' => fake()->unique()->numberBetween(0, 1000),
        ];
    }

    /**
     * Mark the testimonial as active.
     */
    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => true,
        ]);
    }

    /**
     * Mark the testimonial as inactive.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => false,
        ]);
    }
}
