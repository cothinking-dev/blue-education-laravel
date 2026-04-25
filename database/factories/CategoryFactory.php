<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->randomElement([
            'Study Tips',
            'Student Life',
            'Migration Updates',
            'Career Advice',
            'University News',
            'Scholarships',
            'Visa Information',
            'Living in Australia',
        ]);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'sort_order' => fake()->unique()->numberBetween(0, 1000),
        ];
    }
}
