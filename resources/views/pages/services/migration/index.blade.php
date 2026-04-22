<x-layout title="Migration & Visas"
          description="Experienced migration lawyers and Registered Migration Agents in Australia. From student visas to permanent residency, we support a wide range of visa pathways.">

    {{-- §1 Hero --}}
    <x-hero title="Visa applications, handled with care from the start"
            subtitle="We provide you access to a team of experienced migration lawyers and Registered Migration Agents in Australia. With decades of combined experience, we support a wide range of visa pathways — from student visas to permanent residency; partner and family sponsored visas; and skilled and work sponsorship visas."
            :image="asset('images/heroes/services-migration.webp')"
            alt="East Asian woman adviser in a professional consultation meeting"
            :breadcrumbs="true" />

    {{-- §2 Categories of Visas --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Categories of Visas" :centered="false" class="mb-8" />
            <p class="text-base-600 mb-10 text-pretty">We can assist you with a broad range of visa types.</p>
            <x-definition-grid :columns="2" :items="[
                ['term' => 'Visitor Visas', 'description' => 'For short stays to travel, see family or friends, or attend business meetings and events.', 'detail' => 'We help you understand which visitor visa best fits your plans and support you with the forms, documents, and explanations needed so your application clearly shows your purpose of travel and ties to your home country.'],
                ['term' => 'Student and Training Visas', 'description' => 'To study, undertake workplace-based training, or participate in professional development in Australia.', 'detail' => 'We assist with course and visa option reviews, guiding you in meeting Genuine Student requirements, financial capacity and English language proficiency criteria, as well as coordination with your education provider.', 'href' => route('services.migration.student-visas'), 'linkText' => 'Student visa details'],
                ['term' => 'Graduate Visas', 'description' => 'For recent international students to stay in Australia temporarily after completing eligible study, to gain work experience or work towards longer-term visa options.', 'detail' => 'We help you understand the current Graduate visa settings, confirm whether your course and qualifications are eligible, whether you need a preliminary skills assessment and prepare a clear application.', 'href' => route('services.migration.graduate-work'), 'linkText' => 'Graduate & work visas'],
                ['term' => 'Skilled and Work Visas', 'description' => 'For people with qualifications and experience that are in demand in Australia.', 'detail' => 'We help assess your eligibility, navigate skills assessments, points tests and occupation lists, and prepare a structured application that explains your background, skills, and work history.'],
                ['term' => 'Employer Sponsored Visas', 'description' => 'For Australian businesses to sponsor overseas workers for specific roles when suitable local workers are not available.', 'detail' => 'We assist both employers and applicants with sponsorship and nomination requirements, position descriptions, labour market evidence, and visa applications.'],
                ['term' => 'Business and Investor Visas', 'description' => 'For people who want to own, manage, or invest in businesses and enterprises in Australia.', 'detail' => 'We help you understand the different business and investment streams, source and organise the required financial and business documentation, and prepare a clear, compliant application.'],
                ['term' => 'Partner and Family Visas', 'description' => 'For eligible partners and family members of Australian citizens, permanent residents, or eligible New Zealand citizens to live together in Australia.', 'detail' => 'We assist with partner, parent, child and other family visa pathways, helping you organise relationship and family evidence, prepare statements, and present your family circumstances clearly.', 'href' => route('services.migration.permanent-residence'), 'linkText' => 'Permanent residence pathways'],
                ['term' => 'Humanitarian and Protection Visas', 'description' => 'For people who need Australia\'s protection or have compelling humanitarian circumstances.', 'detail' => 'We provide careful, respectful guidance on the process and requirements, and help you prepare evidence and statements that accurately and clearly explain your situation and the risks you face.'],
                ['term' => 'Resident Return Visas and Citizenship', 'description' => 'For current and former permanent residents to renew or regain their travel facility, and for eligible residents to apply for Australian citizenship.', 'detail' => 'We assess travel history and ties to Australia, prepare clear applications for residence or substantial ties requirements, and support citizenship applications including eligibility checks and character considerations.'],
            ]" />


        </div>
    </section>

    {{-- §2b Skills Assessment --}}
    <section class="bg-base-50" id="skills-assessment">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-callout title="Skilled Migration and Skills Assessment" variant="info">
                <x-slot:icon><x-heroicon-o-clipboard-document-check class="w-6 h-6" /></x-slot:icon>
                <p class="text-sm text-base-600 mb-3">If you are considering skilled migration to Australia, one of the first steps is identifying whether your occupation is eligible and whether you need a skills assessment. For many skilled migration pathways, a positive skills assessment may be required before you can progress with your application strategy.</p>
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

    {{-- §3 Why Trust Us --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-14 items-start">
                <div class="flex-1">
                    <x-section-heading title="Why Trust Us With Your Future" :centered="false" />
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">Visa applications are complex, change frequently and can be costly to get wrong. Instead of relying on hearsay or leaving things to chance, seeking timely professional advice helps you understand how the rules affect you, address issues early, and move forward with a clearer, more confident plan.</p>
                    <p class="text-base-700 font-medium mb-6 text-pretty">Remember — there is never a one-size that fits all!</p>
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
                <div class="lg:w-[40%]">
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

    {{-- §4 CTA --}}
    <x-cta-banner title="Get an honest read on your visa options"
                  subtitle="A registered migration agent will assess your situation, identify the right pathway, and tell you if something won't work — before it costs you."
                  primaryText="Book a Migration Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
