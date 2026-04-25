<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(6, 12));

        return [
            'category_id' => Category::factory(),
            'title' => $title,
            'slug' => Str::slug($title).'-'.fake()->unique()->randomNumber(5),
            'excerpt' => fake()->paragraph(2),
            'body' => $this->generateMarkdownBody(),
            'featured_image' => null,
            'is_featured' => fake()->boolean(20),
            'is_published' => fake()->boolean(80),
            'published_at' => fake()->boolean(80) ? fake()->dateTimeBetween('-6 months', 'now') : null,
            'read_time' => fake()->numberBetween(3, 15),
        ];
    }

    /**
     * Generate realistic markdown blog content.
     */
    private function generateMarkdownBody(): string
    {
        $sections = [];

        $sections[] = fake()->paragraph(3);

        $headings = [
            'Why Choose Australia for Your Studies',
            'Understanding the Application Process',
            'Key Requirements to Keep in Mind',
            'Tips for International Students',
            'What to Expect After Arrival',
            'Making the Most of Your Experience',
            'Financial Planning for Students',
            'Building Your Career in Australia',
        ];

        $usedHeadings = fake()->randomElements($headings, rand(2, 4));

        foreach ($usedHeadings as $heading) {
            $sections[] = "## {$heading}";
            $sections[] = fake()->paragraph(rand(2, 4));

            if (fake()->boolean(50)) {
                $items = [];
                for ($i = 0; $i < rand(3, 5); $i++) {
                    $items[] = '- '.fake()->sentence();
                }
                $sections[] = implode("\n", $items);
            }

            $sections[] = fake()->paragraph(rand(2, 3));
        }

        $sections[] = '## Final Thoughts';
        $sections[] = fake()->paragraph(2);

        return implode("\n\n", $sections);
    }

    /**
     * Mark the post as published.
     */
    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => true,
            'published_at' => fake()->dateTimeBetween('-6 months', 'now'),
        ]);
    }

    /**
     * Mark the post as featured.
     */
    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_featured' => true,
            'is_published' => true,
            'published_at' => fake()->dateTimeBetween('-3 months', 'now'),
        ]);
    }

    /**
     * Mark the post as a draft.
     */
    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_published' => false,
            'published_at' => null,
        ]);
    }
}
