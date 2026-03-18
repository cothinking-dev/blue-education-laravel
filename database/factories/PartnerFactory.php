<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * @var array<string, list<string>>
     */
    private static array $partnerPool = [
        'university' => [
            'University of Western Australia',
            'Curtin University',
            'Murdoch University',
            'Edith Cowan University',
            'University of Adelaide',
            'Flinders University',
            'University of South Australia',
            'Deakin University',
            'La Trobe University',
            'Griffith University',
            'University of Tasmania',
            'Charles Darwin University',
        ],
        'tafe' => [
            'North Metropolitan TAFE',
            'South Metropolitan TAFE',
            'TAFE Queensland',
            'TAFE NSW',
            'TAFE SA',
            'Holmesglen Institute',
            'Box Hill Institute',
            'Melbourne Polytechnic',
        ],
        'credential' => [
            'QEAC — Qualified Education Agent Counsellor',
            'MARA — Migration Agents Registration Authority',
            'PIER — Professional International Education Resources',
            'EATC — Education Agent Training Course',
            'AAERI — Australian Association of Education Representatives in India',
            'ISANA — International Education Association',
        ],
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement(array_keys(self::$partnerPool));
        $name = fake()->randomElement(self::$partnerPool[$type]);

        return [
            'name' => $name,
            'logo' => null,
            'type' => $type,
            'url' => fake()->boolean(70) ? fake()->url() : null,
            'sort_order' => fake()->unique()->numberBetween(0, 1000),
        ];
    }

    /**
     * Set the partner type to university.
     */
    public function university(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => fake()->randomElement(self::$partnerPool['university']),
                'type' => 'university',
            ];
        });
    }

    /**
     * Set the partner type to TAFE.
     */
    public function tafe(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => fake()->randomElement(self::$partnerPool['tafe']),
                'type' => 'tafe',
            ];
        });
    }

    /**
     * Set the partner type to credential.
     */
    public function credential(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => fake()->randomElement(self::$partnerPool['credential']),
                'type' => 'credential',
            ];
        });
    }
}
