<x-layout title="FAQ"
          description="Find answers to common questions about studying, working, and living in Australia.">

    {{-- §1 Hero --}}
    <x-hero title="Frequently Asked Questions"
            subtitle="Find answers to common questions about studying, working, and living in Australia."
            :image="asset('images/heroes/faq.webp')"
            alt="Help desk and information service"
            variant="centered"
            :breadcrumbs="true" />

    {{-- Visual context --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/faq/student-question.webp') }}" alt="Student asking a question during an information session" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/faq/info-session.webp') }}" alt="Education information session presentation" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §2 FAQ Tabs + Accordions --}}
    <section class="bg-white" x-data="{ tab: 'education' }">
        <div class="max-w-4xl mx-auto px-8 lg:px-16 py-14">

            {{-- Tab Navigation --}}
            <div class="flex flex-wrap gap-2 mb-10">
                <button @click="tab = 'education'" :class="tab === 'education' ? 'bg-primary-800 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Education</button>
                <button @click="tab = 'migration'" :class="tab === 'migration' ? 'bg-primary-800 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Migration & Visas</button>
                <button @click="tab = 'career'" :class="tab === 'career' ? 'bg-primary-800 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Career Services</button>
                <button @click="tab = 'support'" :class="tab === 'support' ? 'bg-primary-800 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Student Support</button>
                <button @click="tab = 'fees'" :class="tab === 'fees' ? 'bg-primary-800 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-4 py-2 rounded-full text-sm font-medium transition-colors">Fees</button>
            </div>

            {{-- Education --}}
            <div x-show="tab === 'education'" x-cloak>
                <x-accordion :items="[
                    [
                        'question' => 'How do I choose the right course?',
                        'answer' => 'We assess your background, goals, and budget and recommend matching programs from 1,100+ institutions and 20,000+ programs.',
                        'open' => true,
                    ],
                    [
                        'question' => 'What English level do I need?',
                        'answer' => '<p>Accepted tests: IELTS, TOEFL, Cambridge CAE, Pearson PTE. Scores valid for 2 years.</p><table class=\"w-full text-sm mt-3 mb-3\"><thead><tr class=\"border-b\"><th class=\"text-left py-2 font-semibold\">Program</th><th class=\"text-left py-2 font-semibold\">Min. IELTS</th></tr></thead><tbody><tr class=\"border-b\"><td class=\"py-2\">Certificate I–IV</td><td class=\"py-2\">5.5</td></tr><tr class=\"border-b\"><td class=\"py-2\">VET/TAFE</td><td class=\"py-2\">5.5 – 6.0</td></tr><tr class=\"border-b\"><td class=\"py-2\">Bachelor</td><td class=\"py-2\">6.0 – 6.5</td></tr><tr class=\"border-b\"><td class=\"py-2\">Bachelor Honours</td><td class=\"py-2\">6.5</td></tr><tr class=\"border-b\"><td class=\"py-2\">Graduate Cert/Diploma</td><td class=\"py-2\">6.5 – 7.0</td></tr><tr class=\"border-b\"><td class=\"py-2\">Masters</td><td class=\"py-2\">6.5 – 7.5</td></tr><tr><td class=\"py-2\">Doctoral</td><td class=\"py-2\">6.5 – 8.0</td></tr></tbody></table><p>Not at the required level? ELICOS courses (10–30 weeks) can bridge the gap. <a href=\"' . route('services.education.english') . '\" class=\"text-primary-800 hover:underline font-medium\">English & Foundation →</a></p>',
                    ],
                    [
                        'question' => 'Can I change courses after I start?',
                        'answer' => 'Usually yes, but it may affect your visa conditions. Talk to us before making any changes.',
                    ],
                ]" />
            </div>

            {{-- Migration & Visas --}}
            <div x-show="tab === 'migration'" x-cloak>
                <x-accordion :items="[
                    [
                        'question' => 'How long does a student visa take?',
                        'answer' => '4–8 weeks typical. We review applications for completeness before submission to avoid delays.',
                        'open' => true,
                    ],
                    [
                        'question' => 'Can I work while studying?',
                        'answer' => 'Yes. Student visa holders can work up to 48 hours per fortnight during term and unlimited hours during breaks.',
                    ],
                    [
                        'question' => 'What happens after I graduate?',
                        'answer' => '<p>You may be eligible for a Graduate/Post-Study Work Visa (Subclass 485). Two streams:</p><ul class=\"mt-2 mb-2 space-y-1 text-sm\"><li><strong>Graduate Work Stream:</strong> 18 months — for graduates with skills on the skilled occupation list.</li><li><strong>Post-Study Work Stream:</strong> Bachelor (2 years), Master (3 years), Doctoral (4 years).</li></ul><p>Both streams provide full work rights and a pathway to permanent residency. <a href=\"' . route('services.migration.graduate-work') . '\" class=\"text-primary-800 hover:underline font-medium\">Graduate & Work Visas →</a></p>',
                    ],
                ]" />
            </div>

            {{-- Career Services --}}
            <div x-show="tab === 'career'" x-cloak>
                <x-accordion :items="[
                    [
                        'question' => 'Do you guarantee job placement?',
                        'answer' => 'No. We provide career counselling, job readiness training, employer introductions, and internship placements. These significantly improve employment prospects but do not guarantee placement.',
                        'open' => true,
                    ],
                    [
                        'question' => 'When should I start career planning?',
                        'answer' => 'Before choosing your course. Career goals should drive education decisions, not the other way around.',
                    ],
                ]" />
            </div>

            {{-- Student Support --}}
            <div x-show="tab === 'support'" x-cloak>
                <x-accordion :items="[
                    [
                        'question' => 'What if there is an emergency?',
                        'answer' => 'Contact Blue Education directly for emergency support. All Blue Education clients are covered.',
                        'open' => true,
                    ],
                    [
                        'question' => 'Do you provide accommodation?',
                        'answer' => 'Yes. Through the Australian Homestay Network — vetted families, meals included. Guardianship arranged for under-18 students through an approved guardianship provider. <a href=\"' . route('services.student-support') . '\" class=\"text-primary-800 hover:underline font-medium\">Student support services →</a>',
                    ],
                ]" />
            </div>

            {{-- Fees --}}
            <div x-show="tab === 'fees'" x-cloak>
                <x-accordion :items="[
                    [
                        'question' => 'How much does Blue Education charge?',
                        'answer' => 'Varies by service and complexity. Initial consultation is free. Full fee breakdown provided before any commitment.',
                        'open' => true,
                    ],
                    [
                        'question' => 'What other costs should I budget for?',
                        'answer' => '<ul class=\"space-y-1 text-sm\"><li>• Tuition (paid to institution)</li><li>• Accommodation</li><li>• OSHC (mandatory health insurance)</li><li>• Living expenses</li><li>• Visa application fees</li><li>• Medical examination ($240–$380)</li></ul><p class=\"mt-2\"><a href=\"' . route('fees') . '\" class=\"text-primary-800 hover:underline font-medium\">Fees & Investment →</a></p>',
                    ],
                ]" />
            </div>
        </div>
    </section>

    {{-- §3 CTA --}}
    <x-cta-banner title="Still have questions?"
                  subtitle="Contact us directly. We respond to all enquiries within one business day."
                  primaryText="Contact Us"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
