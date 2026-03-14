<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    private static int $sortCounter = 0;

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

        $colors = ['#3b82f6', '#ef4444', '#10b981', '#f59e0b', '#8b5cf6', '#ec4899', '#06b6d4', '#f97316'];

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'color' => fake()->randomElement($colors),
            'sort_order' => self::$sortCounter++,
        ];
    }
}
