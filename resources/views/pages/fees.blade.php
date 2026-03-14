<x-layout title="Fees & Costs"
          description="All fees communicated upfront, before any work begins. Transparent pricing for education, migration, and support services.">

    {{-- §1 Hero --}}
    <x-hero title="Fees & Costs"
            subtitle="All fees communicated upfront, before any work begins."
            :image="asset('images/heroes/fees.webp')"
            alt="Financial planning and budgeting"
            variant="left" />

    {{-- §2 Our Approach --}}
    <x-content-split title="Transparent pricing. Always." :image="asset('images/fees/transparent-pricing.webp')" alt="Transparent business pricing consultation">
        <p>Blue Education's fees vary based on the services you need and the complexity of your situation. Every journey is different — so pricing is personalised, not one-size-fits-all.</p>
        <p>Before we do any work, we tell you exactly what it will cost and why. Our initial consultation is used to assess your situation — we provide a personalised quote before you commit to anything.</p>
        <ul class="space-y-3 text-sm mt-4">
            <li class="flex items-start gap-3"><span class="text-primary-600 font-bold mt-0.5">&#10003;</span> <span><strong>Fees by service</strong> — You pay for what you need, not a package that includes what you don't.</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 font-bold mt-0.5">&#10003;</span> <span><strong>Personalised quotes</strong> — Every situation is different; pricing reflects that.</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 font-bold mt-0.5">&#10003;</span> <span><strong>Upfront breakdown</strong> — Full cost picture provided at consultation, before any application work begins.</span></li>
        </ul>
    </x-content-split>

    {{-- §3 Cost Overview --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">Cost Overview</h2>
            <x-data-table :headers="['Cost Category', 'Who Sets It', 'Paid To', 'Amount']"
                          :rows="[
                              ['Blue Education service fees', 'Blue Education', 'Blue Education', 'Varies by case'],
                              ['STAC charges', 'Blue Education', 'Blue Education', 'Varies by visa history'],
                              ['Medical examination', 'Panel physicians', 'Medical provider', '$240 – $380'],
                              ['Visa application', 'Dept of Home Affairs', 'Australian Government', 'Varies by subclass'],
                              ['Tuition', 'Institution', 'Institution', 'Varies by program'],
                          ]" />
        </div>
    </section>

    {{-- §4 What You'll Pay --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">What You'll Pay</h2>
            <div class="space-y-6">
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-gray-900 mb-2">Blue Education Service Fees</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">Our service fees cover consultation, pathway planning, application processing, document compilation, and ongoing support. Fees vary by case — contact us for a personalised quote.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-gray-900 mb-2">Student Travel Advice & Consent (STAC)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">STAC charges are based on each applicant's visa history and specific circumstances. We provide transparent calculations at initial consultation.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-gray-900 mb-2">Medical Examinations</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">Required for visa applications. Cost ranges from $240 to $380 depending on examination type (standard health check vs comprehensive medical assessment).</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-gray-900 mb-2">Visa Application Fees</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">Set by the Australian Government Department of Home Affairs. Vary by visa subclass. <a href="{{ route('services.migration.student-visas') }}" class="text-primary-800 hover:underline font-medium">See student visa details &rarr;</a> Separate from Blue Education fees.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-gray-900 mb-2">Tuition Fees</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">Paid directly to your educational institution. Vary by institution, program, and duration.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-10">
            <img src="{{ asset('images/fees/scholarship.webp') }}" alt="Student scholarship and education funding opportunity" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/1] max-h-[240px]" loading="lazy">
        </div>
    </section>

    {{-- §5 Additional Support Services --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">Additional Support Services</h2>
            <x-data-table :headers="['Service', 'Description']"
                          :rows="[
                              ['24/7 Emergency Hotline', 'Round-the-clock crisis support'],
                              ['Document Translation', 'NAATI-certified'],
                              ['Airport Transfers', 'Meet, greet, transport'],
                              ['Study Tour Programs', 'Short-term tour coordination'],
                              ['Specialised Consultations', 'Expert advice sessions'],
                          ]" />
        </div>
    </section>

    {{-- §6 What Students Budget Separately --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty" data-animate="fade-up">What Students Budget Separately</h2>
            <p class="text-gray-600 mb-8 text-pretty">These costs are not part of Blue Education's service fees. You pay for these directly.</p>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="border border-gray-200 rounded-corner-lg p-5">
                    <h3 class="font-bold text-gray-900 mb-1">Accommodation</h3>
                    <p class="text-gray-600 text-sm text-pretty">Homestay, rental, or student housing</p>
                </div>
                <div class="border border-gray-200 rounded-corner-lg p-5">
                    <h3 class="font-bold text-gray-900 mb-1">Guardianship</h3>
                    <p class="text-gray-600 text-sm text-pretty">Required for students under 18 (Professional Student Care Australia or International Student Alliance)</p>
                </div>
                <div class="border border-gray-200 rounded-corner-lg p-5">
                    <h3 class="font-bold text-gray-900 mb-1">OSHC</h3>
                    <p class="text-gray-600 text-sm text-pretty">Overseas Student Health Cover — mandatory for all student visas</p>
                </div>
                <div class="border border-gray-200 rounded-corner-lg p-5">
                    <h3 class="font-bold text-gray-900 mb-1">Living Expenses</h3>
                    <p class="text-gray-600 text-sm text-pretty">Transport, food, personal costs</p>
                </div>
                <div class="sm:col-span-2 border border-gray-200 rounded-corner-lg p-5">
                    <h3 class="font-bold text-gray-900 mb-1">Tuition</h3>
                    <p class="text-gray-600 text-sm text-pretty">Course fees paid directly to your institution</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §7 CTA --}}
    <x-cta-banner title="Get your cost breakdown."
                  subtitle="Tell us your situation — education level, visa status, and what you're trying to achieve. We'll provide an itemised quote before any work begins."
                  primaryText="Get a Personalised Quote"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
