<x-layout title="School Programs"
          description="A quality Australian education for your child. We handle school selection, visa, accommodation, and guardianship.">

    {{-- §1 Hero --}}
    <x-hero title="A quality Australian education for your child, with a safety net built around them."
            subtitle="We handle placement, visa, accommodation, and guardianship — so you're not left worrying from the other side of the world."
            :image="asset('images/heroes/services-education-school.webp')"
            alt="Children in school uniforms in an Australian classroom"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 The Australian School System --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 text-pretty" data-animate="fade-up">The Australian School System</h2>
            <p class="text-gray-600 mb-8 text-pretty">Australia's school system spans 13 years:</p>
            <x-data-table :headers="['Stage', 'Years', 'Ages', 'Focus']"
                          :rows="[
                              ['Preparatory', 'Foundation', '~5', 'Early learning, social development'],
                              ['Primary', '1–6 (or 1–7)', '6–12', 'Core subjects across all learning areas'],
                              ['Lower Secondary', '7–10 (or 8–10)', '12–16', 'Broader learning with growing elective choices'],
                              ['Upper Secondary', '11–12', '16–18', 'Subjects chosen for further education or career'],
                          ]" />
            <div class="mt-6 space-y-2 text-sm text-gray-600">
                <p>Compulsory until age 16 in most states and territories.</p>
                <p>Public and private schools available — we match your child to the right fit.</p>
                <p>Blue Education is an SCSA Associate — officially named by SCSA to promote the WA curriculum internationally. <a href="{{ route('programs.scsa-associate') }}" class="text-primary-800 hover:underline font-medium">Learn about SCSA &rarr;</a></p>
            </div>
        </div>
    </section>

    {{-- §3 What We Handle — Before Arrival --}}
    <section class="bg-primary-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty" data-animate="fade-up">What We Handle</h2>
            <p class="text-gray-600 mb-10">Before Arrival — sequential steps your advisor coordinates for you.</p>
            <x-timeline :steps="[
                ['title' => 'School Selection & Placement', 'description' => 'We match your child to the right school based on location, curriculum, fees, learning profile, and long-term goals. Public and private options across Australia.'],
                ['title' => 'Student Visa (Subclass 500)', 'description' => 'Full visa application management for minors — documentation, health checks, character requirements, lodgement. We handle the process end to end.'],
                ['title' => 'Accommodation', 'description' => 'Homestay placement through the Australian Homestay Network. Vetted families, meals included, safe living environment — all arranged before your child arrives.'],
            ]" />
        </div>
    </section>

    {{-- §4 Once They're There --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="mb-8">
                <img src="{{ asset('images/services-education-school/school-campus.webp') }}" alt="Australian school campus with playground" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/1] max-h-[240px]" loading="lazy">
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3 text-pretty" data-animate="fade-up">Once They're There</h2>
            <p class="text-gray-600 mb-8">These services run in parallel — not a sequence.</p>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="Guardianship"
                        description="Legal guardianship arranged through Professional Student Care Australia or International Student Alliance. Required by the Department of Home Affairs for unaccompanied students under 18."
                        :href="route('services.student-support')"
                        linkText="Full guardianship details" />
                <x-card title="Welfare Monitoring"
                        description="Regular welfare checks, school liaison, and parental reporting — so you always know how your child is settling in, not just at enrolment time."
                        :href="route('services.student-support')"
                        linkText="Full welfare support details" />
                <x-card title="Cultural Adaptation"
                        description="The first weeks in a new country can be disorienting for young students. We provide ongoing integration support. For a structured introduction, our Buddy Programme places students alongside Australian peers for 14 days."
                        :href="route('programs.buddy-programme')"
                        linkText="Learn about the Buddy Programme" />
                <x-card title="School Transfer & Change of Programme"
                        description="Already enrolled but need to change schools or programmes? We manage the full transfer — notifying the institution, updating enrolment records, and advising on any visa implications." />
            </div>
        </div>
    </section>

    {{-- §5 For Parents --}}
    <x-content-split title="For Parents" :image="asset('images/services-education-school/parent-child-school.webp')" alt="Parent and child at a school consultation" class="bg-gray-50">
        <p>Sending your child overseas is a significant decision. Here's what we put in place before they board the plane:</p>
        <ul class="space-y-2 text-sm">
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">✓</span> 24/7 emergency hotline — for parents and students, any time</li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">✓</span> Regular welfare reports — school updates and wellbeing checks</li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">✓</span> Direct communication with guardianship providers</li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">✓</span> On-ground support in Perth and across major Australian cities</li>
        </ul>
        <p class="font-semibold text-gray-700 mt-4">Your child is never on their own. Neither are you.</p>
    </x-content-split>

    {{-- §6 CTA --}}
    <x-cta-banner title="Start with a conversation."
                  subtitle="Tell us your child's age, year level, and preferences — we'll recommend schools and walk you through exactly what the process involves."
                  primaryText="Enquire About School Placements"
                  :primaryHref="route('contact')"
                  secondaryText="Explore the Buddy Programme"
                  :secondaryHref="route('programs.buddy-programme')" />

</x-layout>
