<x-layout title="Study Abroad"
          description="Spend a semester or year at a Western Australian university. Blue Education helps with academic planning, admissions, accommodation and ongoing support in Perth.">

    {{-- §1 Hero --}}
    <x-hero title="Study abroad at a Western Australian university"
            subtitle="Spend a semester or year in Perth while counting credit back to your degree. Blue Education works with you and our partner universities so your time in Australia is structured, supported and academically meaningful."
            :image="asset('images/heroes/services-education-degrees.webp')"
            alt="East Asian university students studying together on campus"
            badge="Semester or Year · Murdoch · ECU · Curtin"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Who Study Abroad is for --}}
    <x-content-split title="Is Study Abroad right for you?"
                     :image="asset('images/about-partners/university-campus.webp')"
                     alt="Modern university campus buildings and walkway">
        <p>A Study Abroad semester or year is ideal if you:</p>
        <x-icon-list variant="check">
            <x-icon-list.item>Are currently enrolled at a university overseas and want to spend one or two semesters in Australia while counting credit back to your degree.</x-icon-list.item>
            <x-icon-list.item>Want a shorter, focused international experience without committing to a full Australian degree.</x-icon-list.item>
            <x-icon-list.item>Are looking to strengthen your English, build confidence and experience a different teaching style.</x-icon-list.item>
            <x-icon-list.item>Want to try out Australian universities before deciding on a full undergraduate or postgraduate programme later.</x-icon-list.item>
        </x-icon-list>
    </x-content-split>

    {{-- §3 University Partners --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our University Partners" :centered="false" />
            <p class="text-base-600 mb-8 -mt-2 text-pretty">We work with leading universities in Perth to match you to the right Study Abroad experience. You can mix subjects across areas of interest (subject to prerequisites and availability) while remaining enrolled at your home institution.</p>
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Murdoch University</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Known for hands-on learning, media, veterinary and environmental sciences, and a welcoming campus environment.</p>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Edith Cowan University (ECU)</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Strong in education, nursing, performing arts and applied disciplines, with modern campuses and industry connections.</p>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Curtin University</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">A large, internationally recognised university with strengths in business, engineering, health sciences and design, and a vibrant campus life.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §4 What the Study Abroad experience includes --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What the experience includes" :centered="false" />
            <x-definition-grid :columns="1" :items="[
                ['term' => 'Academic planning and subject selection', 'description' => 'We help you choose units that align with your home degree, meet prerequisites, and maximise your chances of credit transfer when you return.'],
                ['term' => 'Admissions and documentation', 'description' => 'We guide you through university applications, offer acceptance, Confirmation of Enrolment (CoE) and supporting documents for your student visa.'],
                ['term' => 'Accommodation options', 'description' => 'Support with on-campus housing, student apartments or homestay, depending on your budget, preferences and length of stay.'],
                ['term' => 'Airport arrival and orientation', 'description' => 'Pre-departure information, airport pickup guidance and orientation so you understand your campus, city and key visa conditions from the start.'],
                ['term' => 'Ongoing support in Perth', 'description' => 'Check-ins during your study period, help with practical issues, and advice if you consider extending, changing courses or planning further study in Australia.'],
            ]" />
        </div>
    </section>

    {{-- §5 Why Western Australia --}}
    <x-content-split title="Why choose Western Australia"
                     :image="asset('images/home/wa-perth-liveable.webp')"
                     alt="Perth CBD skyline viewed from Kings Park with Swan River and greenery"
                     :reverse="true"
                     class="bg-base-50">
        <p>Western Australia offers a relaxed, safe lifestyle, strong universities, and direct access to some of the most unique natural environments in the world.</p>
        <p>Students can balance serious study with beaches, national parks, city culture and a growing innovation and tech scene in Perth. It is an ideal location if you want high-quality teaching in English without the crowding and cost of some larger study destinations.</p>
    </x-content-split>

    {{-- §6 How we help you get started --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How we help you get started" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Discuss your goals', 'description' => 'We discuss your current degree, goals and preferred timing to understand what you need from your Study Abroad experience.'],
                ['title' => 'Shortlist and map', 'description' => 'We shortlist suitable options with Murdoch, ECU and Curtin and map possible subjects that align with your home degree.'],
                ['title' => 'Apply and prepare', 'description' => 'We help with applications, documentation and visa preparation so everything is in order before you travel.'],
                ['title' => 'Support in Perth', 'description' => 'We stay in touch during your time in Perth to support you academically and personally throughout your stay.'],
            ]" />
        </div>
    </section>

    {{-- §7 CTA --}}
    <x-cta-banner title="Ready to study abroad?"
                  subtitle="Contact us to discuss your degree, preferred universities, and timing. We will help you build a realistic Study Abroad plan."
                  primaryText="Enquire About Study Abroad"
                  :primaryHref="route('contact')" />

</x-layout>
