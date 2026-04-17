<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Partner;
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

        // Testimonials from blueeducation.com.au/copy-of-testimonies
        if (Testimonial::count() === 0) {
            $testimonials = [
                [
                    'quote' => "They even went as far as to arrange a home stay for me and plan out the smoothest course for my next few years of study. I am especially grateful to Sonia and Monica who made my transition to Australia extremely easy.\n\nSince then, I head to them with any queries regarding my studies or any difficulties I'm facing in Australia. I highly recommend BLUE education for their professionalism and dedication.",
                    'name' => 'Natalie Koh',
                    'initials' => 'NK',
                    'photo' => 'images/testimonials/natalie-koh.webp',
                    'credential' => 'Bachelor of Biomedical Science',
                    'country' => 'Singapore',
                ],
                [
                    'quote' => "Where would I be without the team at Blue Education? They have helped me so much through my time in Perth, that they are now like family. They are always there for me to help with whatever I need, to reassure me that everything will be okay.\n\nI found Blue Education and they found time that day, after I called, to have me meet them in their office. It was a sigh of relief. All the staff there are so kind, professional, and will do anything in their power to help you succeed.\n\nPerth is home because of them. You're in good hands with Blue Education.",
                    'name' => 'Tiffany Ailing',
                    'initials' => 'TA',
                    'photo' => 'images/testimonials/tiffany-ailing.webp',
                    'credential' => 'Masters of Public Health',
                    'country' => 'United States of America',
                ],
                [
                    'quote' => "My first experience with Blue Education Migration was in 2017 when I was renewing my visa for the first time in Australia. I experienced the most organised service. Everything was done in order and in a timely manner.\n\nAnytime I want any information to do with the best university and best course I have always approached the team. They also keep checking on you throughout to see how you are doing and whether you are having any issues with studies. The support is just extraordinary.\n\nSonia and Monica are very professional and caring at the same time. Blue Education Migration have made my dream of being a Registered Nurse come true.",
                    'name' => 'Sheilah Kogo',
                    'initials' => 'SK',
                    'photo' => 'images/testimonials/sheilah-kogo.webp',
                    'credential' => 'Bachelor of Nursing',
                    'country' => 'Kenya',
                ],
                [
                    'quote' => 'Excellent student services and very responsive staff with effective communication and problem-solving capabilities to support students. I highly recommend Blue education & migration for the best student services in the city.',
                    'name' => 'Hameed Mohammad',
                    'initials' => 'HM',
                    'photo' => 'images/testimonials/hameed-mohammad.webp',
                    'credential' => 'Bachelor of Nursing',
                    'country' => 'India',
                ],
            ];

            foreach ($testimonials as $i => $data) {
                Testimonial::create([...$data, 'is_active' => true, 'sort_order' => $i]);
            }
        }

        // Partners
        if (Partner::count() === 0) {
            $this->call(PartnerSeeder::class);
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
