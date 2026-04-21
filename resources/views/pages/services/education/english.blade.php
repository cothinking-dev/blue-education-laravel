<x-layout title="English & Foundation Programmes"
          description="High-quality English language courses in Australia to help international students build confidence, improve academic English, and prepare for school, university and future careers.">

    {{-- §1 Hero --}}
    <x-hero title="English and Foundation programmes for students on their way to further studies in Australia."
            subtitle="Most international students need to close one of two gaps before university: English proficiency or academic preparation. Your adviser will assess which applies to you."
            :image="asset('images/heroes/services-education-english.webp')"
            alt="East Asian students in an English language classroom"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Your Pathway --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Your Pathway" subtitle="Your pathway depends on where the gap is. Most students need one stage, some need both." :centered="true" class="mb-10" />
            {{-- Pathway flow diagram --}}
            <div class="flex flex-col items-center gap-6">

                {{-- Step 1: ELICOS --}}
                <div class="w-full max-w-3xl text-center">
                    <div class="inline-flex items-center gap-3 bg-primary-50 border-2 border-primary-200 rounded-corner-lg px-6 py-4">
                        <div class="w-10 h-10 rounded-full bg-primary-800 text-white flex items-center justify-center shrink-0">
                            <x-heroicon-o-chat-bubble-left-right class="w-5 h-5" />
                        </div>
                        <div class="text-left">
                            <p class="font-semibold text-base-900">ELICOS</p>
                            <p class="text-xs text-base-500">10–30 weeks depending on starting point</p>
                        </div>
                    </div>
                </div>

                {{-- Branching arrows --}}
                <div class="flex items-start justify-center w-full max-w-3xl">
                    <div class="flex-1 flex flex-col items-center">
                        <div class="w-0.5 h-6 bg-primary-200"></div>
                        <x-heroicon-s-chevron-down class="w-4 h-4 text-primary-400 -mt-1" />
                    </div>
                    <div class="flex-1 flex flex-col items-center">
                        <div class="w-0.5 h-6 bg-primary-200"></div>
                        <x-heroicon-s-chevron-down class="w-4 h-4 text-primary-400 -mt-1" />
                    </div>
                    <div class="flex-1 flex flex-col items-center">
                        <div class="w-0.5 h-6 bg-primary-200"></div>
                        <x-heroicon-s-chevron-down class="w-4 h-4 text-primary-400 -mt-1" />
                    </div>
                </div>

                {{-- Step 2: Three pathway options --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full max-w-3xl">
                    <a href="#foundation" class="border border-base-200 rounded-corner-lg p-5 bg-white text-center hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 rounded-full bg-primary-50 border-2 border-primary-200 text-primary-800 flex items-center justify-center mx-auto mb-3">
                            <x-heroicon-o-academic-cap class="w-5 h-5" />
                        </div>
                        <p class="font-semibold text-base-900 text-sm mb-1">Foundation</p>
                        <p class="text-xs text-base-500">6–18 months academic preparation for university entry</p>
                        <span class="text-primary-800 text-xs font-medium mt-2 inline-block">Learn more &darr;</span>
                    </a>
                    <div class="border-2 border-primary-300 rounded-corner-lg p-5 bg-white text-center relative">
                        <span class="absolute -top-2.5 left-1/2 -translate-x-1/2 text-xs font-medium px-2.5 py-0.5 rounded-full bg-primary-800 text-white">Most Popular</span>
                        <div class="w-10 h-10 rounded-full bg-primary-50 border-2 border-primary-200 text-primary-800 flex items-center justify-center mx-auto mb-3">
                            <x-heroicon-o-wrench-screwdriver class="w-5 h-5" />
                        </div>
                        <p class="font-semibold text-base-900 text-sm mb-1">VET / TAFE</p>
                        <p class="text-xs text-base-500">Certificate IV is equivalent to Foundation and can lead to university</p>
                        <a href="{{ route('services.education.vet-tafe') }}" class="text-primary-800 text-xs font-medium hover:underline mt-2 inline-block">Learn more &rarr;</a>
                    </div>
                    <a href="{{ route('services.education.degrees') }}" class="border-2 border-dashed border-primary-300 rounded-corner-lg p-5 bg-primary-50/50 text-center hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 rounded-full bg-primary-50 border-2 border-primary-200 text-primary-800 flex items-center justify-center mx-auto mb-3">
                            <x-heroicon-o-arrow-right class="w-5 h-5" />
                        </div>
                        <p class="font-semibold text-base-900 text-sm mb-1">Direct to University</p>
                        <p class="text-xs text-base-500">If your ELICOS results and prior qualifications meet entry requirements</p>
                        <span class="text-primary-800 text-xs font-medium mt-2 inline-block">Explore degrees &rarr;</span>
                    </a>
                </div>

                {{-- Converging arrows --}}
                <div class="flex items-start justify-center w-full max-w-3xl">
                    <div class="flex-1 flex flex-col items-center">
                        <div class="w-0.5 h-6 bg-primary-200"></div>
                        <x-heroicon-s-chevron-down class="w-4 h-4 text-primary-400 -mt-1" />
                    </div>
                    <div class="flex-1 flex flex-col items-center">
                        <div class="w-0.5 h-6 bg-primary-200"></div>
                        <x-heroicon-s-chevron-down class="w-4 h-4 text-primary-400 -mt-1" />
                    </div>
                    <div class="flex-1 flex flex-col items-center">
                        <div class="w-0.5 h-6 bg-primary-200"></div>
                        <x-heroicon-s-chevron-down class="w-4 h-4 text-primary-400 -mt-1" />
                    </div>
                </div>

                {{-- Step 3: University --}}
                <div class="w-full max-w-3xl text-center">
                    <a href="{{ route('services.education.degrees') }}" class="inline-flex items-center gap-3 bg-primary-50 border-2 border-primary-200 rounded-corner-lg px-6 py-4 hover:shadow-lg transition-shadow">
                        <div class="w-10 h-10 rounded-full bg-primary-800 text-white flex items-center justify-center shrink-0">
                            <x-heroicon-o-building-office class="w-5 h-5" />
                        </div>
                        <div class="text-left">
                            <p class="font-semibold text-base-900">University / Further Studies</p>
                            <p class="text-xs text-base-500">Bachelor's, Master's, or Doctoral degree</p>
                        </div>
                    </a>
                </div>
            </div>

            <p class="text-sm text-base-500 mt-8 text-center text-pretty">Your adviser will confirm which pathway suits your qualifications, English level, and target course.</p>
        </div>
    </section>

    {{-- §3 ELICOS Courses --}}
    <x-content-split title="ELICOS Courses" :image="asset('images/services-education-english/elicos-class.webp')" alt="East Asian students in an ELICOS English language class" class="bg-base-50">
        <p>By studying English in Australia, you are compelled to speak and engage others around you in their native language, English. There is no better way to immerse in the beauty, culture and language of your host country so that you may take this experience with you that will change your life forever.</p>
        <p>ELICOS, short for English Language Intensive Courses for Overseas Students, allows international students to be enrolled in full-time English language programmes in Australia, focusing on improving language proficiency for work, travel or further education pathways.</p>
        <p>Duration is 10 to 30 weeks depending on your starting point, and the minimum entry requirement of the university or institution.</p>
    </x-content-split>

    {{-- §4 Course Types --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Course Types" :centered="false" class="mb-10" />
            <x-accordion :items="[
                ['question' => 'General English', 'open' => true, 'answer' => 'General English courses in Australia focus on building overall confidence in everyday communication. Students develop practical speaking, listening, reading and writing skills for real-life situations such as travel, work and social interactions, while expanding vocabulary and improving grammar in an interactive classroom environment.'],
                ['question' => 'Academic English (English Language Bridging) — Most Common', 'answer' => 'Academic English programmes are designed for students who plan to study at Australian high schools, TAFE institutes, colleges or universities. These courses strengthen academic reading and writing, note-taking, presentation skills and critical thinking, so learners can understand lectures, participate in tutorials and complete assignments at the standard expected by Australian institutions.'],
                ['question' => 'Test Preparation', 'answer' => 'English test preparation courses in Australia help students achieve the scores required for study, visa applications or professional registration. With targeted training for exams such as IELTS, TOEFL and PTE Academic, learners develop effective strategies, practise with exam-style tasks and receive feedback to improve their performance on test day. Blue Education is a registered TOEFL iBT test centre.'],
                ['question' => 'English for Business and Career', 'answer' => 'English for Business and Career programmes in Australia support professionals who need to communicate clearly in international workplaces. These courses focus on practical skills such as meetings, presentations, negotiations, professional emails and reports, helping participants use accurate and appropriate language to advance their careers and build strong professional relationships.'],
                ['question' => 'TESOL', 'answer' => 'TESOL (Teaching English to Speakers of Other Languages) programmes in Australia are suitable for people who wish to become English language teachers locally or overseas. Participants learn contemporary teaching methodologies, lesson planning, classroom management and assessment techniques, combining theory with practical experience to deliver engaging and effective English lessons.'],
                ['question' => 'English Study and Holiday Programme', 'answer' => 'English Study and Holiday Programmes in Australia combine language learning with cultural and sightseeing experiences. Students improve their English in the classroom and then apply their skills through excursions and activities, enjoying a safe and fun environment while discovering Australian cities, attractions and lifestyle.'],
            ]" />

            {{-- Mid-page CTA --}}
            <div class="text-center mt-10">
                <p class="text-base-600 mb-3">Not sure which course is right for you?</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-primary-800 text-white font-semibold px-5 py-2.5 rounded-corner text-sm hover:bg-primary-700 transition-colors">
                    Talk to an adviser
                    <x-heroicon-m-arrow-right class="w-4 h-4" />
                </a>
            </div>
        </div>
    </section>

    {{-- §5 Proving Your English Level --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Proving Your English Level" :centered="false" class="mb-8" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-callout title="Free English Placement Test" variant="primary">
                    <x-slot:icon><x-heroicon-o-clipboard-document-check class="w-6 h-6" /></x-slot:icon>
                    Blue Education administers a free internal English test accepted by our partner institutions. In many cases this substitutes for IELTS, TOEFL, or PTE.
                    <a href="{{ route('contact') }}" class="text-primary-800 text-sm font-medium hover:underline mt-2 inline-block">Book your free test &rarr;</a>
                </x-callout>

                <x-callout title="English Admission Exemptions" variant="info">
                    <x-slot:icon><x-heroicon-o-shield-check class="w-6 h-6" /></x-slot:icon>
                    Some qualifications and school systems exempt students from formal English testing entirely — for example, years of English-medium schooling or recognised national English examinations.
                    <a href="{{ route('contact') }}" class="text-blue-800 text-sm font-medium hover:underline mt-2 inline-block">Check your eligibility &rarr;</a>
                </x-callout>

                <x-callout title="English Bridging Pathway" variant="success">
                    <x-slot:icon><x-heroicon-o-arrow-trending-up class="w-6 h-6" /></x-slot:icon>
                    Complete an English Bridging programme and progress directly to your main course without sitting a formal English test. Your adviser confirms if this applies.
                </x-callout>
            </div>
        </div>
    </section>

    {{-- §6 Foundation Studies --}}
    <section class="bg-white" id="foundation">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Foundation Studies" :centered="false" class="mb-6" />
            <p class="text-base-600 mb-8 text-pretty max-w-3xl">Foundation studies in Australia are specially designed pathway programmes that prepare international students for entry into university bachelor degrees. They help you meet academic and English requirements while giving you time to adjust to Australian teaching styles and campus life.</p>

            <div class="grid md:grid-cols-3 gap-6">
                {{-- What is it --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-base-50">
                    <h3 class="text-lg font-semibold text-base-900 mb-3">What is a Foundation Programme?</h3>
                    <p class="text-sm text-base-600 leading-relaxed">A foundation programme is usually a 6–12 month course that sits between high school and university. It combines Academic English, study skills and subject units related to your future degree, such as business, engineering, IT, health, science or arts.</p>
                </div>

                {{-- Who is it for --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-base-50">
                    <h3 class="text-lg font-semibold text-base-900 mb-3">Who is Foundation Studies for?</h3>
                    <x-icon-list>
                        <x-icon-list.item>Year 11–12 students who do not yet meet direct university entry (e.g. those who have completed Cambridge IGCSE, O Level, SPM)</x-icon-list.item>
                        <x-icon-list.item>International students whose home-country qualification is not equivalent to Australian Year 12</x-icon-list.item>
                        <x-icon-list.item>Students who want extra academic support and a smoother transition into first year of university</x-icon-list.item>
                    </x-icon-list>
                </div>

                {{-- Key benefits --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-base-50">
                    <h3 class="text-lg font-semibold text-base-900 mb-3">Key benefits for international students</h3>
                    <x-icon-list>
                        <x-icon-list.item>Clear pathway into selected Australian bachelor degrees once you meet the required grades</x-icon-list.item>
                        <x-icon-list.item>Smaller classes and closer support than in first-year university</x-icon-list.item>
                        <x-icon-list.item>Focus on Academic English, essay writing, presentations and exam skills</x-icon-list.item>
                        <x-icon-list.item>Chance to experience Australian teaching methods before starting your main degree</x-icon-list.item>
                        <x-icon-list.item>Time to settle into Australian life, make friends and build confidence in a new study environment</x-icon-list.item>
                    </x-icon-list>
                </div>
            </div>
        </div>
    </section>

    {{-- §7 How Blue Education Supports Your English Journey --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How Blue Education supports your English journey" :centered="false" class="mb-6" />
            <p class="text-base-600 mb-6 text-pretty">From your first enquiry through to course completion, your adviser handles the detail so you can focus on learning.</p>
            <div class="grid sm:grid-cols-2 gap-x-12 gap-y-4">
                <x-icon-list>
                    <x-icon-list.item>School matching based on your level, goals, and budget</x-icon-list.item>
                    <x-icon-list.item>Course enrolment and Confirmation of Enrolment (CoE)</x-icon-list.item>
                    <x-icon-list.item><a href="{{ route('services.migration.student-visas') }}" class="text-primary-800 font-medium hover:underline">Student visa guidance</a> and application support</x-icon-list.item>
                </x-icon-list>
                <x-icon-list>
                    <x-icon-list.item><a href="{{ route('services.student-support') }}" class="text-primary-800 font-medium hover:underline">Homestay and accommodation</a> arrangement</x-icon-list.item>
                    <x-icon-list.item>Airport pickup and orientation on arrival</x-icon-list.item>
                    <x-icon-list.item><a href="{{ route('services.student-support') }}" class="text-primary-800 font-medium hover:underline">Ongoing welfare support</a> and feedback on wellbeing</x-icon-list.item>
                </x-icon-list>
            </div>
        </div>
    </section>

    {{-- §8 CTA --}}
    <x-cta-banner title="Find out where your English sits."
                  subtitle="Book a free education consultation. We'll assess your English level and tell you exactly which course suits your situation and what comes next."
                  primaryText="Take a Free English Assessment"
                  :primaryHref="route('contact')"
                  secondaryText="View Admission Requirements"
                  :secondaryHref="route('admission-requirements')" />

</x-layout>
