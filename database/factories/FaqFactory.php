<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    private static int $sortCounter = 0;

    /**
     * @var array<string, list<array{question: string, answer: string}>>
     */
    private static array $faqPool = [
        'education' => [
            [
                'question' => 'What types of courses can I study in Australia?',
                'answer' => 'Australia offers a wide range of courses including vocational education (VET/TAFE), undergraduate degrees, postgraduate degrees, research programs, and English language courses. Popular fields include business, IT, engineering, health sciences, and hospitality.',
            ],
            [
                'question' => 'How do I choose the right university or institution?',
                'answer' => 'We help you select the right institution based on your academic background, career goals, budget, and preferred location. We partner with leading universities, TAFEs, and colleges across Australia to find the best fit for you.',
            ],
            [
                'question' => 'What are the English language requirements?',
                'answer' => 'Most institutions require an IELTS score of 6.0-7.0 overall, depending on the course level. Some institutions also accept TOEFL, PTE Academic, or Cambridge English scores. We can advise you on the specific requirements for your chosen course.',
            ],
            [
                'question' => 'Can I work while studying in Australia?',
                'answer' => 'Yes, international students on a student visa can work up to 48 hours per fortnight during term and unlimited hours during scheduled breaks. This helps you gain work experience and support your living expenses.',
            ],
        ],
        'migration' => [
            [
                'question' => 'What visa do I need to study in Australia?',
                'answer' => 'Most international students require a Student Visa (subclass 500). The application requires a Confirmation of Enrolment (CoE), proof of financial capacity, English proficiency, health insurance (OSHC), and a genuine temporary entrant statement.',
            ],
            [
                'question' => 'Can I stay in Australia after completing my studies?',
                'answer' => 'Yes, graduates may be eligible for a Temporary Graduate Visa (subclass 485), which allows you to live and work in Australia for 2-4 years after graduation. This can be a pathway to permanent residency depending on your occupation and circumstances.',
            ],
            [
                'question' => 'What is the pathway from student visa to permanent residency?',
                'answer' => 'Common pathways include the Skilled Independent Visa (subclass 189), Skilled Nominated Visa (subclass 190), or employer-sponsored visas. Your eligibility depends on your occupation, skills assessment, points score, and state nomination. We provide guidance on the best pathway for your situation.',
            ],
        ],
        'career' => [
            [
                'question' => 'Does Blue Education help with job placement?',
                'answer' => 'While we don\'t directly place students in jobs, we provide career guidance, resume assistance, and connect you with resources to help you find employment in Australia. We also advise on courses that lead to occupations in demand.',
            ],
            [
                'question' => 'Which courses have the best employment outcomes in Australia?',
                'answer' => 'Courses in nursing, engineering, IT, accounting, and trades consistently have strong employment outcomes. We stay updated on the latest skills shortage lists and can advise on courses that align with current and projected labour market needs.',
            ],
        ],
        'support' => [
            [
                'question' => 'What support does Blue Education provide after I arrive in Australia?',
                'answer' => 'We offer ongoing support including assistance with accommodation, airport pickup coordination, orientation guidance, bank account setup, and general settlement advice. Our Perth-based team is always available to help you adjust to life in Australia.',
            ],
            [
                'question' => 'Is there a fee for Blue Education\'s services?',
                'answer' => 'Our core education consultancy services are free for students, as we are funded by our partner institutions. Some specialised migration services may have associated fees, which we discuss transparently upfront.',
            ],
        ],
        'fees' => [
            [
                'question' => 'How much does it cost to study in Australia?',
                'answer' => 'Tuition fees vary by institution and course level. Vocational courses range from AUD 4,000-22,000 per year, undergraduate degrees from AUD 20,000-45,000, and postgraduate degrees from AUD 22,000-50,000. We help you find options that fit your budget.',
            ],
            [
                'question' => 'Are scholarships available for international students?',
                'answer' => 'Yes, many Australian institutions offer scholarships for international students based on academic merit, financial need, or specific criteria. We help identify and apply for relevant scholarships to reduce your financial burden.',
            ],
            [
                'question' => 'What are the living costs in Perth?',
                'answer' => 'The Australian government recommends a minimum of AUD 24,505 per year for living expenses. Perth is generally more affordable than Sydney or Melbourne, with average weekly costs of AUD 350-500 for accommodation, food, transport, and personal expenses.',
            ],
        ],
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = fake()->randomElement(array_keys(self::$faqPool));
        $faq = fake()->randomElement(self::$faqPool[$category]);

        return [
            'question' => $faq['question'],
            'answer' => $faq['answer'],
            'category' => $category,
            'sort_order' => self::$sortCounter++,
        ];
    }

    /**
     * Set the FAQ to a specific category.
     */
    public function forCategory(string $category): static
    {
        return $this->state(function (array $attributes) use ($category) {
            $faq = fake()->randomElement(self::$faqPool[$category]);

            return [
                'question' => $faq['question'],
                'answer' => $faq['answer'],
                'category' => $category,
            ];
        });
    }
}
