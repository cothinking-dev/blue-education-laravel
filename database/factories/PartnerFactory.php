<?php

namespace Database\Factories;

use App\Enums\PartnerCategory;
use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Partner> */
class PartnerFactory extends Factory
{
    protected $model = Partner::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'logo' => null,
            'category' => fake()->randomElement(PartnerCategory::cases()),
            'url' => fake()->optional()->url(),
            'description' => fake()->optional()->sentence(),
            'is_active' => fake()->boolean(90),
            'sort_order' => fake()->unique()->numberBetween(0, 1000),
        ];
    }

    public function active(): static
    {
        return $this->state(['is_active' => true]);
    }

    public function inactive(): static
    {
        return $this->state(['is_active' => false]);
    }

    public function university(): static
    {
        return $this->state(['category' => PartnerCategory::University]);
    }

    public function credential(): static
    {
        return $this->state(['category' => PartnerCategory::Credential]);
    }

    public function internationalOffice(): static
    {
        return $this->state(fn () => [
            'category' => PartnerCategory::InternationalOffice,
            'logo' => null,
            'representative' => fake()->name(),
            'coverage' => fake()->randomElement(['Southeast Asia', 'Northeast Asia', 'Southern Africa', 'West Africa', 'Oceania']),
        ]);
    }
}
