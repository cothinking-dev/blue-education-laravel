<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Admin user
        User::firstOrCreate(
            ['email' => 'admin@blueeducation.com.au'],
            ['name' => 'Admin', 'password' => bcrypt('password'), 'is_admin' => true],
        );

        // Blog categories and posts (migrated from Wix)
        $this->call(BlogSeeder::class);

        // Testimonials from wireframe
        if (Testimonial::count() === 0) {
            $testimonials = [
                ['quote' => 'The team went above and beyond, helping me find my course of interest and arrange a scholarship to UWA within 2 weeks.', 'name' => 'N.L.', 'initials' => 'NL', 'photo' => 'images/testimonials/nl.webp', 'credential' => 'Bachelor of Commerce — University of Western Australia', 'country' => 'Malaysia'],
                ['quote' => 'Where would I be without the team at Blue Education? They have helped me so much through my time in Perth, that they are now like family. They are always there for me, whatever I need.', 'name' => 'H.T.', 'initials' => 'HT', 'photo' => 'images/testimonials/ht.webp', 'credential' => 'Master of Business Administration — Curtin University', 'country' => 'Japan'],
                ['quote' => 'Blue Education made my dream of becoming a Registered Nurse come true.', 'name' => 'S.W.', 'initials' => 'SW', 'photo' => 'images/testimonials/sw.webp', 'credential' => 'Bachelor of Nursing — Edith Cowan University', 'country' => 'Singapore'],
                ['quote' => 'My first experience with Blue Education was in 2017, renewing my visa for the first time. Everything was handled in order and in a timely manner. The most organised service I\'ve experienced.', 'name' => 'Z.L.', 'initials' => 'ZL', 'photo' => 'images/testimonials/zl.webp', 'credential' => 'Doctor of Philosophy — Murdoch University', 'country' => 'China'],
                ['quote' => 'They went as far as arranging homestay accommodation and planning out the smoothest course for my next few years of study. My transition to Australia couldn\'t have been easier.', 'name' => 'J.K.', 'initials' => 'JK', 'photo' => 'images/testimonials/jk.webp', 'credential' => 'Foundation Studies — North Metropolitan TAFE', 'country' => 'South Korea'],
            ];

            foreach ($testimonials as $i => $data) {
                Testimonial::create([...$data, 'is_active' => true, 'sort_order' => $i]);
            }
        }

        // FAQ seed data
        if (Faq::count() === 0) {
            Faq::factory()->count(5)->create(['category' => 'education']);
            Faq::factory()->count(5)->create(['category' => 'migration']);
            Faq::factory()->count(3)->create(['category' => 'career']);
            Faq::factory()->count(3)->create(['category' => 'support']);
            Faq::factory()->count(3)->create(['category' => 'fees']);
        }

    }
}
