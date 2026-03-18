<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $section = fake()->randomElement(['australian', 'international', 'partner']);

        $roles = [
            'australian' => [
                'Education Consultant',
                'Senior Education Advisor',
                'Student Services Coordinator',
                'Admissions Manager',
                'Marketing Director',
                'Operations Manager',
            ],
            'international' => [
                'Regional Representative',
                'Country Manager',
                'International Liaison Officer',
                'Recruitment Specialist',
            ],
            'partner' => [
                'Partner Relations Manager',
                'Institutional Liaison',
                'Academic Partnerships Coordinator',
            ],
        ];

        $regions = ['South Asia', 'Southeast Asia', 'East Asia', 'Middle East', 'Africa', 'Latin America', 'Europe'];

        $languageSets = [
            'English, Mandarin',
            'English, Hindi, Urdu',
            'English, Vietnamese',
            'English, Arabic',
            'English, Korean',
            'English, Thai',
            'English, Bahasa Indonesia',
            'English, Spanish',
            'English, Japanese',
            'English, Nepali',
        ];

        $credentialOptions = [
            'QEAC Certified',
            'MARA Registered',
            'PIER Certified',
            'Graduate Diploma in Education',
            'Master of Education',
            'MBA',
            'QEAC & MARA Certified',
            null,
        ];

        return [
            'name' => fake()->name(),
            'role' => fake()->randomElement($roles[$section]),
            'photo' => null,
            'bio' => fake()->paragraph(3),
            'credentials' => fake()->randomElement($credentialOptions),
            'languages' => fake()->randomElement($languageSets),
            'section' => $section,
            'region' => $section === 'international' ? fake()->randomElement($regions) : null,
            'sort_order' => fake()->unique()->numberBetween(0, 1000),
        ];
    }

    /**
     * Set the team member to the Australian section.
     */
    public function australian(): static
    {
        return $this->state(fn (array $attributes) => [
            'section' => 'australian',
            'region' => null,
            'role' => fake()->randomElement([
                'Education Consultant',
                'Senior Education Advisor',
                'Student Services Coordinator',
                'Admissions Manager',
            ]),
        ]);
    }

    /**
     * Set the team member to the international section.
     */
    public function international(): static
    {
        return $this->state(fn (array $attributes) => [
            'section' => 'international',
            'region' => fake()->randomElement(['South Asia', 'Southeast Asia', 'East Asia', 'Middle East', 'Africa']),
            'role' => fake()->randomElement([
                'Regional Representative',
                'Country Manager',
                'International Liaison Officer',
            ]),
        ]);
    }

    /**
     * Set the team member to the partner section.
     */
    public function partner(): static
    {
        return $this->state(fn (array $attributes) => [
            'section' => 'partner',
            'region' => null,
            'role' => fake()->randomElement([
                'Partner Relations Manager',
                'Institutional Liaison',
                'Academic Partnerships Coordinator',
            ]),
        ]);
    }
}
