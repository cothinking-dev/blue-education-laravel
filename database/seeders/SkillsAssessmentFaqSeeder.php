<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class SkillsAssessmentFaqSeeder extends Seeder
{
    public function run(): void
    {
        $startOrder = (Faq::where('category', 'migration')->max('sort_order') ?? 0) + 1;

        $faqs = [
            [
                'question' => 'What is a skills assessment, in simple terms?',
                'answer' => 'A skills assessment is an independent check to confirm that your qualifications and work experience match Australian standards for your nominated occupation. It is carried out by an authorised assessing body, not by the Department of Home Affairs or your migration agent.',
            ],
            [
                'question' => 'Why is a skills assessment important for my visa?',
                'answer' => 'For many skilled migration and employer-sponsored visas, a positive skills assessment is a key eligibility requirement. It can affect whether you can claim points, lodge an Expression of Interest, or submit a valid visa application, so it is often one of the first steps in your migration plan.',
            ],
            [
                'question' => 'Do all applicants need a skills assessment?',
                'answer' => 'No. Whether you need a skills assessment depends on your visa pathway and your nominated occupation. Some skilled visas and some occupations require it, while others do not. During your consultation, we review your situation and advise you if a skills assessment is likely to be needed.',
            ],
            [
                'question' => 'Who assesses my skills — and can I choose the authority?',
                'answer' => 'Each occupation is linked to a specific assessing authority, so the correct body depends on your profession or skillset. For example, ICT professionals are often assessed by the Australian Computer Society (ACS), engineers by Engineers Australia, many trades and professional roles by TRA or VETASSESS, community and welfare roles by ACWA, social workers by AASW, school teachers by AITSL, and early childhood teachers by ACECQA. You generally must apply to the authority allocated to your occupation, rather than choosing one yourself.',
            ],
            [
                'question' => 'What about health and allied health professions?',
                'answer' => 'For some health occupations, there may be additional registration and professional requirements alongside or separate from a migration skills assessment. This can include registration with bodies such as AHPRA, depending on your role and visa pathway. We can discuss this with you in more detail based on your specific profession.',
            ],
            [
                'question' => 'When should I start my skills assessment?',
                'answer' => 'Because a skills assessment can impact your eligibility, points and timing, it is usually best to address it early in your planning. Starting the process sooner helps you understand your options, avoid delays, and structure your next steps — such as English testing, Expression of Interest or visa lodgement — more effectively.',
            ],
            [
                'question' => 'How can Blue Education help with skills assessment?',
                'answer' => 'We guide you through the skills assessment piece of your migration journey: reviewing your background, identifying whether a skills assessment is likely to be required, explaining which assessing authority applies to your occupation, and outlining typical document and timing expectations. This helps you move forward with a clearer, more realistic migration strategy.',
            ],
            [
                'question' => 'Ready to find out if you need a skills assessment?',
                'answer' => 'Book a migration consultation with our team and we\'ll help you map out your visa options and, where relevant, your skills assessment pathway.',
            ],
        ];

        foreach ($faqs as $i => $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question'], 'category' => 'migration'],
                ['answer' => $faq['answer'], 'sort_order' => $startOrder + $i],
            );
        }
    }
}
