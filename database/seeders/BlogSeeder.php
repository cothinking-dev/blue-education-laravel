<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $categories = collect([
            ['name' => 'Migration & Visas', 'slug' => 'migration-visas'],
            ['name' => 'Education', 'slug' => 'education'],
            ['name' => 'Career & Employment', 'slug' => 'career-employment'],
            ['name' => 'Student Life', 'slug' => 'student-life'],
        ])->mapWithKeys(fn (array $data, int $key) => [
            $data['slug'] => Category::firstOrCreate(['slug' => $data['slug']], [...$data, 'sort_order' => $key]),
        ]);

        $posts = require database_path('seeders/data/posts.php');

        foreach ($posts as $post) {
            $categorySlug = $post['category'];
            unset($post['category']);

            Post::create([
                ...$post,
                'category_id' => $categories[$categorySlug]->id,
                'is_published' => true,
            ]);
        }
    }
}
