<x-layout title="English & Foundation Programs"
          description="ELICOS and Foundation programmes for students on their way to an Australian university. Build your English and bridge to degree entry.">

    {{-- §1 Hero --}}
    <x-hero title="English and Foundation programmes for students on their way to an Australian university."
            subtitle="ELICOS and Foundation programmes cover the two most common gaps: English proficiency and academic preparation. Your advisor will assess which applies to you."
            :image="asset('images/heroes/services-education-english.webp')"
            alt="East Asian students in an English language classroom"
            :breadcrumbs="true" />

    {{-- §2 ELICOS Courses --}}
    <x-content-split title="ELICOS Courses" :image="asset('images/services-education-english/elicos-class.webp')" alt="East Asian students in an ELICOS English language class">
        <h3 class="text-lg font-semibold text-gray-800 mb-2">What is ELICOS?</h3>
        <p class="text-sm">Most Australian universities require an IELTS score of 6.5 or higher for undergraduate entry. ELICOS is how you get there — structured English courses delivered at private colleges and university English colleges across Australia.</p>
        <p class="text-sm">Classes cover the four core skills: reading, writing, listening, and speaking. Duration depends on where your English is now — your advisor will assess your level before you enrol.</p>
    </x-content-split>

    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h3 class="text-xl font-semibold text-gray-800 mb-6">Course Durations</h3>
            <x-data-table :headers="['Block', 'Duration', 'Best For']"
                          :rows="[
                              ['Intensive', '10 weeks', 'Upper-intermediate students close to target score'],
                              ['Comprehensive', '20 weeks', 'Intermediate students building toward entry'],
                              ['Extended', '30 weeks', 'Beginner to lower-intermediate'],
                          ]" />
        </div>
    </section>

    {{-- §3 Course Types --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Course Types" :centered="false" />
            <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="General English"
                        description="The foundation course. Covers all four skills — speaking, listening, reading, and writing — with a focus on using English in real situations.">
                    <x-slot:icon>
                        <x-heroicon-o-chat-bubble-left-right class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Academic English"
                        badge="Most Common"
                        description="Structured preparation for study at an English-speaking university. Covers essay writing, academic referencing, research skills, and critical analysis.">
                    <x-slot:icon>
                        <x-heroicon-o-book-open class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Test Preparation"
                        description="Built around IELTS, PTE Academic, Cambridge CAE, and TOEFL iBT — strategy and timed practice, not general English revision. Blue Education is a registered TOEFL iBT test centre.">
                    <x-slot:icon>
                        <x-heroicon-o-clipboard-document-list class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §4 Teaching English --}}
    <x-callout title="Teaching English professionally? There's a qualification for that." variant="info">
        <p class="text-sm mb-3">Blue Education also assists in obtaining professional English teaching qualifications — for educators pursuing careers in international English instruction.</p>
        <div class="flex flex-wrap gap-2">
            <span class="inline-block bg-white border border-gray-200 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">TESOL</span>
            <span class="inline-block bg-white border border-gray-200 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">CELTA</span>
            <span class="inline-block bg-white border border-gray-200 text-gray-700 text-xs font-medium px-3 py-1 rounded-full">EfTC</span>
        </div>
    </x-callout>

    {{-- §5 Foundation Studies --}}
    <x-content-split title="Foundation Studies" :image="asset('images/services-education-english/foundation-studies.webp')" alt="East Asian students in a foundation studies classroom preparing for university">
        <h3 class="text-lg font-semibold text-gray-800 mb-2">What are Foundation programmes?</h3>
        <p class="text-sm">Foundation programmes are for international students who've finished high school but don't yet meet direct entry requirements for an Australian university.</p>
        <p class="text-sm">Rather than waiting or reapplying, you complete a one-year programme that builds the academic skills your target degree expects — and earns you a place at a partner university on completion.</p>
        <h3 class="text-lg font-semibold text-gray-800 mb-2 mt-4">What you get</h3>
        <ul class="space-y-1 text-sm text-gray-600">
            <li>Subject-specific preparation aligned to your intended degree</li>
            <li>Academic writing, research methods, and critical thinking</li>
            <li>Credit towards your first year of university in some programmes</li>
            <li>Direct entry to a partner university on successful completion</li>
        </ul>
    </x-content-split>

    {{-- §6 Your Pathway --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty" data-animate="fade-up">Your Pathway</h2>
            <p class="text-gray-600 mb-10 text-pretty">Your pathway depends on where the gap is. Most students need one stage, some need both.</p>
            <x-timeline :steps="[
                ['title' => 'ELICOS', 'description' => 'Your English reaches the level required — for your course, your visa, and your first day of lectures. Duration is 10 to 30 weeks depending on your starting point.'],
                ['title' => 'Foundation', 'description' => 'One year of structured academic preparation aligned to your intended degree. You cover the subject knowledge and study skills your first year expects, then enter directly into a partner university.'],
                ['title' => 'University', 'description' => 'You start your degree having already covered the groundwork it requires. Once you receive your university offer, you\'ll need to apply for a student visa.'],
            ]" />
        </div>
    </section>

    {{-- §7 CTA --}}
    <x-cta-banner title="Find out where your English sits."
                  subtitle="An English level assessment takes the guesswork out. Your advisor will tell you exactly which course suits your situation and what comes next."
                  primaryText="Assess My English Level"
                  :primaryHref="route('contact')"
                  secondaryText="View Admission Requirements"
                  :secondaryHref="route('admission-requirements')" />

</x-layout>
