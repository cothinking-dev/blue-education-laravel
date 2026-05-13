<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Faq>
 */
class FaqFactory extends Factory
{
    /**
     * @var array<string, list<array{question: string, answer: string}>>
     */
    private static array $faqPool = [
        'study' => [
            [
                'question' => 'What types of courses can I study in Australia?',
                'answer' => 'Australia offers a wide range of courses including vocational education (VET/TAFE), undergraduate degrees, postgraduate degrees, research programmes, and English language courses. Popular fields include business, IT, engineering, health sciences, and hospitality.',
            ],
            [
                'question' => 'How do I choose the right university or institution?',
                'answer' => 'We help you select the right institution based on your academic background, career goals, budget, and preferred location. We partner with leading universities, TAFEs, and colleges across Australia to find the best fit for you.',
            ],
            [
                'question' => 'What are the English language requirements?',
                'answer' => 'Most institutions require an IELTS score of 6.0-7.0 overall, depending on the course level. Some institutions also accept TOEFL, PTE Academic, or Cambridge English scores. We can advise you on the specific requirements for your chosen course.',
            ],
        ],
        'visa' => [
            [
                'question' => 'What visa do I need to study in Australia?',
                'answer' => 'Most international students require a Student Visa (subclass 500). The application requires a Confirmation of Enrolment (CoE), proof of financial capacity, English proficiency, health insurance (OSHC), and a genuine temporary entrant statement.',
            ],
            [
                'question' => 'Can I work while studying in Australia?',
                'answer' => 'Yes, international students on a student visa can work up to 48 hours per fortnight during term and unlimited hours during scheduled breaks. This helps you gain work experience and support your living expenses.',
            ],
        ],
        'living' => [
            [
                'question' => 'What support does Blue Education provide after I arrive in Australia?',
                'answer' => 'We offer ongoing support including assistance with accommodation, airport pickup coordination, orientation guidance, bank account setup, and general settlement advice. Our Perth-based team is always available to help you adjust to life in Australia.',
            ],
            [
                'question' => 'What are the living costs in Perth?',
                'answer' => 'The Australian government recommends a minimum of AUD 29,710 per year for living expenses. Perth is generally more affordable than Sydney or Melbourne, with average weekly costs of AUD 450-750 for accommodation, food, transport, and personal expenses.',
            ],
        ],
        'post-study' => [
            [
                'question' => 'Can I stay in Australia after completing my studies?',
                'answer' => 'Yes, graduates may be eligible for a Temporary Graduate Visa (subclass 485), which allows you to live and work in Australia for 2-4 years after graduation. This can be a pathway to permanent residency depending on your occupation and circumstances.',
            ],
            [
                'question' => 'Does Blue Education help with job placement?',
                'answer' => 'While we don\'t directly place students in jobs, we provide career guidance, resume assistance, and connect you with resources to help you find employment in Australia. We also advise on courses that lead to occupations in demand.',
            ],
        ],
        'fees' => [
            [
                'question' => 'Is there a fee for Blue Education\'s services?',
                'answer' => 'Blue Education does not charge any fees for course counselling or advice on your study options. Fees may apply for other services, such as student visa application lodgement, visa-related advice and ongoing visa support.',
            ],
            [
                'question' => 'Are scholarships available for international students?',
                'answer' => 'Yes, many Australian institutions offer scholarships for international students based on academic merit, financial need, or specific criteria. We help identify and apply for relevant scholarships to reduce your financial burden.',
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
            'sort_order' => fake()->unique()->numberBetween(0, 1000),
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
