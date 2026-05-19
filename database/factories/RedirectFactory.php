<?php

namespace Database\Factories;

use App\Models\Redirect;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Redirect>
 */
class RedirectFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'from_path' => '/'.$this->faker->unique()->slug(2),
            'to_path' => '/'.$this->faker->slug(2),
            'status_code' => 301,
            'enabled' => true,
            'hits' => 0,
            'last_hit_at' => null,
            'source' => null,
            'notes' => null,
        ];
    }

    public function disabled(): static
    {
        return $this->state(['enabled' => false]);
    }

    public function fromWix(): static
    {
        return $this->state(['source' => 'wix-import']);
    }
}
