@php
    $educationFaqs = [
        [
            'question' => 'How do I choose the right course?',
            'answer' => 'We assess your background, goals, and budget and recommend matching programs from 1,100+ institutions and 20,000+ programs.',

        ],
        [
            'question' => 'What English level do I need?',
            'answer' => '<p>Accepted tests: IELTS, TOEFL, Cambridge CAE, Pearson PTE. Scores valid for 2 years.</p>'
                . '<table class="w-full text-sm mt-3 mb-3">'
                . '<thead><tr class="border-b"><th class="text-left py-2 font-semibold">Program</th><th class="text-left py-2 font-semibold">Min. IELTS</th></tr></thead>'
                . '<tbody>'
                . '<tr class="border-b"><td class="py-2">Certificate I–IV</td><td class="py-2">5.5</td></tr>'
                . '<tr class="border-b"><td class="py-2">VET/TAFE</td><td class="py-2">5.5 – 6.0</td></tr>'
                . '<tr class="border-b"><td class="py-2">Bachelor</td><td class="py-2">6.0 – 6.5</td></tr>'
                . '<tr class="border-b"><td class="py-2">Bachelor Honours</td><td class="py-2">6.5</td></tr>'
                . '<tr class="border-b"><td class="py-2">Graduate Cert/Diploma</td><td class="py-2">6.5 – 7.0</td></tr>'
                . '<tr class="border-b"><td class="py-2">Masters</td><td class="py-2">6.5 – 7.5</td></tr>'
                . '<tr><td class="py-2">Doctoral</td><td class="py-2">6.5 – 8.0</td></tr>'
                . '</tbody></table>'
                . '<p>Not at the required level? ELICOS courses (10–30 weeks) can bridge the gap. <a href="' . route('services.education.english') . '" class="text-primary-800 hover:underline font-medium">English &amp; Foundation &rarr;</a></p>',
        ],
        [
            'question' => 'Can I change courses after I start?',
            'answer' => 'Usually yes, but it may affect your visa conditions. Talk to us before making any changes.',
        ],
    ];

    $migrationFaqs = [
        [
            'question' => 'How long does a student visa take?',
            'answer' => '4–8 weeks typical. We review applications for completeness before submission to avoid delays.',

        ],
        [
            'question' => 'Can I work while studying?',
            'answer' => 'Yes. Student visa holders can work up to 48 hours per fortnight during term and unlimited hours during breaks.',
        ],
        [
            'question' => 'What happens after I graduate?',
            'answer' => '<p>You may be eligible for a Graduate/Post-Study Work Visa (Subclass 485). Two streams:</p>'
                . '<ul class="mt-2 mb-2 space-y-1 text-sm">'
                . '<li><strong>Graduate Work Stream:</strong> 18 months — for graduates with skills on the skilled occupation list.</li>'
                . '<li><strong>Post-Study Work Stream:</strong> Bachelor (2 years), Master (3 years), Doctoral (4 years).</li>'
                . '</ul>'
                . '<p>Both streams provide full work rights and a pathway to permanent residency. <a href="' . route('services.migration.graduate-work') . '" class="text-primary-800 hover:underline font-medium">Graduate &amp; Work Visas &rarr;</a></p>',
        ],
    ];

    $careerFaqs = [
        [
            'question' => 'Do you guarantee job placement?',
            'answer' => 'No. We provide career counselling, job readiness training, employer introductions, and internship placements. These significantly improve employment prospects but do not guarantee placement.',

        ],
        [
            'question' => 'When should I start career planning?',
            'answer' => 'Before choosing your course. Career goals should drive education decisions, not the other way around.',
        ],
    ];

    $supportFaqs = [
        [
            'question' => 'What if there is an emergency?',
            'answer' => 'Contact Blue Education directly for emergency support. All Blue Education clients are covered.',

        ],
        [
            'question' => 'Do you provide accommodation?',
            'answer' => 'Yes. Through the Australian Homestay Network — vetted families, meals included. Guardianship arranged for under-18 students through an approved guardianship provider. <a href="' . route('services.student-support') . '" class="text-primary-800 hover:underline font-medium">Student support services &rarr;</a>',
        ],
    ];

    $feesFaqs = [
        [
            'question' => 'How much does Blue Education charge?',
            'answer' => 'Varies by service and complexity. Initial consultation is free. Full fee breakdown provided before any commitment.',

        ],
        [
            'question' => 'What other costs should I budget for?',
            'answer' => '<ul class="space-y-1 text-sm">'
                . '<li>• Tuition (paid to institution)</li>'
                . '<li>• Accommodation</li>'
                . '<li>• OSHC (mandatory health insurance)</li>'
                . '<li>• Living expenses</li>'
                . '<li>• Visa application fees</li>'
                . '<li>• Medical examination ($240–$380)</li>'
                . '</ul>'
                . '<p class="mt-2"><a href="' . route('fees') . '" class="text-primary-800 hover:underline font-medium">Fees &amp; Investment &rarr;</a></p>',
        ],
    ];

    $allFaqs = array_merge($educationFaqs, $migrationFaqs, $careerFaqs, $supportFaqs, $feesFaqs);

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($allFaqs)->map(fn ($item) => [
            '@type' => 'Question',
            'name' => $item['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => strip_tags($item['answer']),
            ],
        ])->values()->all(),
    ];
@endphp

<x-layout title="FAQ"
          description="Find answers to common questions about studying, working, and living in Australia."
          :json-ld="$faqSchema">

    {{-- §1 Hero --}}
    <x-hero title="Frequently Asked Questions"
            subtitle="Find answers to common questions about studying, working, and living in Australia."
            :image="asset('images/heroes/faq.webp')"
            alt="East Asian student raising hand to ask a question in a lecture"
            variant="centered"
            :breadcrumbs="true" />

    {{-- §2 FAQ Tabs + Accordions --}}
    <section class="bg-white" x-data="{ tab: 'all' }">
        <div class="max-w-4xl mx-auto px-8 lg:px-16 py-14">

            {{-- Tab Navigation --}}
            <div role="tablist" aria-label="FAQ categories" class="flex flex-wrap gap-2 mb-10">
                <button @click="tab = 'all'" role="tab" id="tab-all" aria-controls="panel-all" :aria-selected="tab === 'all'" :class="tab === 'all' ? 'bg-primary-800 text-white' : 'bg-base-100 text-base-700 hover:bg-base-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">All</button>
                <button @click="tab = 'education'" role="tab" id="tab-education" aria-controls="panel-education" :aria-selected="tab === 'education'" :class="tab === 'education' ? 'bg-primary-800 text-white' : 'bg-base-100 text-base-700 hover:bg-base-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Education</button>
                <button @click="tab = 'migration'" role="tab" id="tab-migration" aria-controls="panel-migration" :aria-selected="tab === 'migration'" :class="tab === 'migration' ? 'bg-primary-800 text-white' : 'bg-base-100 text-base-700 hover:bg-base-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Migration & Visas</button>
                <button @click="tab = 'career'" role="tab" id="tab-career" aria-controls="panel-career" :aria-selected="tab === 'career'" :class="tab === 'career' ? 'bg-primary-800 text-white' : 'bg-base-100 text-base-700 hover:bg-base-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Career Services</button>
                <button @click="tab = 'support'" role="tab" id="tab-support" aria-controls="panel-support" :aria-selected="tab === 'support'" :class="tab === 'support' ? 'bg-primary-800 text-white' : 'bg-base-100 text-base-700 hover:bg-base-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Student Support</button>
                <button @click="tab = 'fees'" role="tab" id="tab-fees" aria-controls="panel-fees" :aria-selected="tab === 'fees'" :class="tab === 'fees' ? 'bg-primary-800 text-white' : 'bg-base-100 text-base-700 hover:bg-base-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Fees</button>
            </div>

            {{-- All --}}
            <template x-if="tab === 'all'">
                <div role="tabpanel" id="panel-all" aria-labelledby="tab-all">
                    <h2 class="text-2xl font-bold text-base-900 mb-8">Education</h2>
                    <x-accordion :items="$educationFaqs" />

                    <h2 class="text-2xl font-bold text-base-900 mt-12 mb-8">Migration & Visas</h2>
                    <x-accordion :items="$migrationFaqs" />

                    <h2 class="text-2xl font-bold text-base-900 mt-12 mb-8">Career Services</h2>
                    <x-accordion :items="$careerFaqs" />

                    <h2 class="text-2xl font-bold text-base-900 mt-12 mb-8">Student Support</h2>
                    <x-accordion :items="$supportFaqs" />

                    <h2 class="text-2xl font-bold text-base-900 mt-12 mb-8">Fees & Costs</h2>
                    <x-accordion :items="$feesFaqs" />
                </div>
            </template>

            {{-- Education --}}
            <template x-if="tab === 'education'">
                <div role="tabpanel" id="panel-education" aria-labelledby="tab-education">
                    <h2 class="text-2xl font-bold text-base-900 mb-8">Education</h2>
                    <x-accordion :items="$educationFaqs" />
                </div>
            </template>

            {{-- Migration & Visas --}}
            <template x-if="tab === 'migration'">
                <div role="tabpanel" id="panel-migration" aria-labelledby="tab-migration">
                    <h2 class="text-2xl font-bold text-base-900 mb-8">Migration & Visas</h2>
                    <x-accordion :items="$migrationFaqs" />
                </div>
            </template>

            {{-- Career Services --}}
            <template x-if="tab === 'career'">
                <div role="tabpanel" id="panel-career" aria-labelledby="tab-career">
                    <h2 class="text-2xl font-bold text-base-900 mb-8">Career Services</h2>
                    <x-accordion :items="$careerFaqs" />
                </div>
            </template>

            {{-- Student Support --}}
            <template x-if="tab === 'support'">
                <div role="tabpanel" id="panel-support" aria-labelledby="tab-support">
                    <h2 class="text-2xl font-bold text-base-900 mb-8">Student Support</h2>
                    <x-accordion :items="$supportFaqs" />
                </div>
            </template>

            {{-- Fees --}}
            <template x-if="tab === 'fees'">
                <div role="tabpanel" id="panel-fees" aria-labelledby="tab-fees">
                    <h2 class="text-2xl font-bold text-base-900 mb-8">Fees & Costs</h2>
                    <x-accordion :items="$feesFaqs" />
                </div>
            </template>
        </div>
    </section>

    {{-- §3 CTA --}}
    <x-cta-banner title="Still have questions?"
                  subtitle="Contact us directly. We respond to all enquiries within one business day."
                  primaryText="Contact Us"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
