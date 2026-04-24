<x-layout title="Migration & Visas"
          description="Experienced migration lawyers and Registered Migration Agents in Australia. From student visas to permanent residency, we support a wide range of visa pathways.">

    {{-- §1 Hero --}}
    <x-hero title="Visa applications, handled with care from the start"
            subtitle="We provide you access to a team of experienced migration lawyers and Registered Migration Agents in Australia. With decades of combined experience, we support a wide range of visa pathways: from student visas to permanent residency; partner and family sponsored visas; and skilled and work sponsorship visas."
            :image="asset('images/heroes/services-migration.webp')"
            alt="East Asian woman adviser in a professional consultation meeting"
            :breadcrumbs="true" />

    {{-- §2 Compact pathway stepper --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-8">
            <div class="flex items-center justify-between max-w-2xl mx-auto">
                <div class="flex flex-col items-center gap-1.5">
                    <div class="w-12 h-12 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center">
                        <x-heroicon-o-book-open class="w-5 h-5" />
                    </div>
                    <span class="text-xs font-semibold text-base-700">Study</span>
                </div>
                <div class="flex-1 h-0.5 bg-primary-200 mx-2"></div>
                <div class="flex flex-col items-center gap-1.5">
                    <div class="w-12 h-12 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <span class="text-xs font-semibold text-base-700">Graduate</span>
                </div>
                <div class="flex-1 h-0.5 bg-primary-200 mx-2"></div>
                <div class="flex flex-col items-center gap-1.5">
                    <div class="w-12 h-12 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center">
                        <x-heroicon-o-briefcase class="w-5 h-5" />
                    </div>
                    <span class="text-xs font-semibold text-base-700">Work</span>
                </div>
                <div class="flex-1 h-0.5 bg-primary-200 mx-2"></div>
                <div class="flex flex-col items-center gap-1.5">
                    <div class="w-12 h-12 rounded-full bg-green-100 text-green-700 flex items-center justify-center">
                        <x-heroicon-o-home class="w-5 h-5" />
                    </div>
                    <span class="text-xs font-semibold text-base-700">Settle</span>
                </div>
            </div>
            <p class="text-xs text-base-500 text-center mt-4">Your path may skip steps or combine them. We plan around your specific situation.</p>
        </div>
    </section>

    {{-- §3 Categories of Visas --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Categories of Visas" :centered="false" class="mb-4" />
            <p class="text-base-600 mb-10 text-pretty">We can assist you with a broad range of visa types and including skills assessment.</p>

            {{-- Study & Graduate --}}
            <h3 class="text-sm font-semibold text-primary-800 uppercase tracking-wider mb-6">Study & Graduate</h3>
            <x-definition-grid :columns="3" :items="[
                ['term' => 'Visitor Visas', 'description' => 'For short stays to travel, see family or friends, or attend business meetings and events.', 'detail' => 'We help you understand which visitor visa best fits your plans and support you with the forms, documents, and explanations needed.'],
                ['term' => 'Student and Training Visas', 'description' => 'To study, undertake workplace-based training, or participate in professional development in Australia.', 'detail' => 'We assist with course and visa option reviews, guiding you in meeting Genuine Student requirements and English language proficiency criteria.', 'href' => route('services.migration.student-visas'), 'linkText' => 'Student visa details'],
                ['term' => 'Graduate Visas', 'description' => 'For recent international students to stay in Australia temporarily after completing eligible study.', 'detail' => 'We help you understand the current Graduate visa settings, confirm eligibility, and prepare a clear application.', 'href' => route('services.migration.graduate-work'), 'linkText' => 'Graduate & work visas'],
            ]" class="mb-14" />

            {{-- Work & Skilled --}}
            <h3 class="text-sm font-semibold text-primary-800 uppercase tracking-wider mb-6">Work & Skilled</h3>
            <x-definition-grid :columns="3" :items="[
                ['term' => 'Skilled and Work Visas', 'description' => 'For people with qualifications and experience that are in demand in Australia.', 'detail' => 'We help assess your eligibility, navigate skills assessments, points tests and occupation lists.'],
                ['term' => 'Employer Sponsored Visas', 'description' => 'For Australian businesses to sponsor overseas workers for specific roles.', 'detail' => 'We assist both employers and applicants with sponsorship and nomination requirements.'],
                ['term' => 'Business and Investor Visas', 'description' => 'For people who want to own, manage, or invest in businesses in Australia. Note: this visa category is temporarily not available for application.', 'detail' => 'We help you understand the different business and investment streams and prepare a clear, compliant application.'],
            ]" class="mb-14" />

            {{-- Family & Settlement --}}
            <h3 class="text-sm font-semibold text-primary-800 uppercase tracking-wider mb-6">Family & Settlement</h3>
            <x-definition-grid :columns="3" :items="[
                ['term' => 'Partner and Family Visas', 'description' => 'For eligible partners and family members to live together in Australia.', 'detail' => 'We assist with partner, parent, child and other family visa pathways.', 'href' => route('services.migration.permanent-residence'), 'linkText' => 'Permanent residence pathways'],
                ['term' => 'Humanitarian and Protection Visas', 'description' => 'For people who need Australia\'s protection or have compelling humanitarian circumstances.', 'detail' => 'We provide careful, respectful guidance on the process and requirements.'],
                ['term' => 'Resident Return Visas and Citizenship', 'description' => 'For current and former permanent residents to renew travel facility, or apply for citizenship.', 'detail' => 'We assess travel history and ties to Australia, and support citizenship applications.'],
            ]" />
        </div>
    </section>

    {{-- §4 Skills Assessment --}}
    <section class="bg-base-50" id="skills-assessment">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-callout title="Skilled Migration and Skills Assessment" variant="info">
                <x-slot:icon><x-heroicon-o-clipboard-document-check class="w-6 h-6" /></x-slot:icon>
                <p class="text-sm text-base-600 mb-3">If you are considering skilled migration to Australia, one of the first steps is identifying whether your occupation is eligible and whether you need a skills assessment. For many skilled migration pathways, a positive skills assessment may be required before you can progress with your application strategy.</p>
                <p class="text-sm text-base-600 mb-3">A skills assessment is not the same as a visa application. It is completed by the relevant assessing authority for your occupation, and the correct authority depends on the occupation you nominate. The Department of Home Affairs publishes assessing authorities for different occupations, which is why choosing the right pathway early is important.</p>
                <p class="text-sm text-base-600 mb-3">At Blue Education, we help you understand:</p>
                <x-icon-list class="mt-0 mb-3">
                    <x-icon-list.item>Whether your occupation may require a skills assessment</x-icon-list.item>
                    <x-icon-list.item>Which assessing authority may apply to your background and nominated occupation</x-icon-list.item>
                    <x-icon-list.item>What supporting documents you may need before moving forward</x-icon-list.item>
                    <x-icon-list.item>How skills assessment fits into your broader skilled migration strategy</x-icon-list.item>
                </x-icon-list>
                <a href="{{ route('faq') }}" class="inline-flex items-center gap-1.5 bg-primary-800 text-white font-semibold px-5 py-2.5 rounded-corner text-sm hover:bg-primary-700 transition-colors mt-2">
                    Skills Assessment FAQs
                    <x-heroicon-m-arrow-right class="w-4 h-4" />
                </a>
            </x-callout>
        </div>
    </section>

    {{-- Visual separator --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-10">
            <img src="{{ asset('images/services-migration/family-lifestyle.webp') }}" alt="Happy family blowing bubbles together in a sunny garden" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/1] shadow-lg" loading="lazy">
        </div>
    </section>

    {{-- §5 Why Trust Us --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pb-14">
            <x-section-heading title="Why Trust Us With Your Future" :centered="false" />
            <p class="text-base-600 leading-relaxed mb-4 text-pretty">Visa applications are complex, change frequently and can be costly to get wrong. Instead of relying on hearsay or leaving things to chance, seeking timely professional advice helps you understand how the rules affect you, address issues early, and move forward with a clearer, more confident plan.</p>
            <p class="text-base-700 font-medium mb-6 text-pretty">Remember: there is never a one-size that fits all!</p>
            <div class="flex flex-col lg:flex-row gap-10">
                <div class="flex-1">
                    <p class="text-base-800 font-semibold mb-4">Why book a consult with us?</p>
                    <div class="grid sm:grid-cols-2 gap-x-6 gap-y-3">
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <p class="text-base-700 text-sm">Personalised visa advice</p>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <p class="text-base-700 text-sm">Expert review of your situation</p>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <p class="text-base-700 text-sm">Clear view of risks and options</p>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <p class="text-base-700 text-sm">Step-by-step action plan</p>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <p class="text-base-700 text-sm">Plain-English answers to questions</p>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <p class="text-base-700 text-sm">Save time, stress and money</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-[35%]">
                    <h3 class="font-semibold text-base-700 mb-4 text-sm">Credentials & Memberships</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <x-credential-card name="Migration Alliance" logo="images/credentials/migration-alliance.svg" description="" />
                        <div class="border border-base-200 rounded-corner-lg p-5 flex flex-col items-center justify-center text-center bg-white">
                            <span class="text-3xl font-bold text-primary-800">{{ date('Y') - 1998 }}<span class="text-lg">yr</span></span>
                            <p class="text-base-500 text-xs mt-1">{{ date('Y') - 1998 }} years experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Get an honest read on your visa options"
                  subtitle="A registered migration agent will assess your situation, identify the right pathway, and tell you if something won't work, before it costs you."
                  primaryText="Book a Migration Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
