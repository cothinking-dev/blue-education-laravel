<x-layout title="Our Team"
          description="Meet the Blue Education team: multilingual specialists who have engaged with more than 145 nations, delivering education, migration, and career advice.">

    @php
        $mainTeam = [
            [
                'name' => 'Glen Ong',
                'photo' => 'images/team/glen-ong.webp',
                'languages' => 'English, Cantonese, Bahasa Malaysia',
                'badge' => 'Managing Director · MARN 1385471',
                'leadership' => true,
                'bio' => 'Glen brings nearly 20 years of experience across private and government education sectors. As Managing Director, he leads Blue\'s long-term strategy while remaining personally accessible to clients. A Registered Migration Agent, Glen is experienced in student visas, skilled migration, family and partner visas, and resident return visas.',
            ],
            [
                'name' => 'Sonia Ong',
                'photo' => 'images/team/sonia-ong.webp',
                'languages' => 'English, Mandarin, Cantonese, Bahasa Malaysia, Bahasa Indonesia',
                'badge' => 'Executive Director · International Operations',
                'leadership' => true,
                'bio' => 'Sonia leads Blue\'s offshore initiatives, bringing over 20 years of experience in strategy, risk, and governance consulting. Her background spans multi-national corporations, public listed companies, and senior management advisory across Asia. She speaks fluently in five languages.',
            ],
            [
                'name' => 'Monica Gaikwad',
                'photo' => 'images/team/monica-gaikwad.webp',
                'languages' => 'English, Hindi, Marathi',
                'badge' => 'Service Manager',
                'leadership' => false,
                'bio' => 'Monica joined Blue through the Executive Internship Programme and quickly proved herself a real asset to the team. As Service Manager, she oversees onshore client experience, coordinating between institutions and stakeholders to keep each case progressing smoothly and transparently. Originally from India, Monica enjoys cooking, calligraphy and relaxed brunches with friends.',
            ],
            [
                'name' => 'Elaine Ho',
                'photo' => 'images/team/elaine-ho.webp',
                'languages' => 'English, Malay, Cantonese',
                'badge' => 'Regional Head, Malaysia',
                'leadership' => false,
                'bio' => 'Elaine brings a rare combination of legal training, international procurement experience, and education counselling. After practising law in Malaysia, she moved into governance and strategy roles with the UN and a major Asia Pacific airline before dedicating herself to student and migration counselling.',
            ],
            [
                'name' => 'Monica Low',
                'photo' => 'images/team/monica-low.webp',
                'languages' => 'English, Bahasa Malaysia, Mandarin, Cantonese',
                'badge' => 'Associate Counsellor, Malaysia',
                'leadership' => false,
                'bio' => 'A native of Kuala Lumpur, Monica brings years of business and interpersonal skills developed across hotel management in Seattle, retail banking in Singapore, and now education counselling in Malaysia. Her approachable personality and multilingual fluency make her a natural fit for student interaction across Southeast Asia.',
            ],
            [
                'name' => 'Ruby Aglagoh',
                'photo' => 'images/team/ruby-aglagoh.webp',
                'languages' => 'English',
                'badge' => 'Regional Adviser, Ghana & West Africa',
                'leadership' => false,
                'bio' => 'Ruby Aglagoh is the Regional Adviser for Ghana and West Africa through an established strategic alliance with Blue Education. She provides guidance on international study pathways, student placement, and cross-border academic advisory services, supporting students and families in making informed study-abroad decisions.

Called to the Ghana Bar in 2001 and as Notary Public in 2012, Mrs. Ruby Aglagoh has built a distinguished legal career spanning over two decades.',
            ],
            [
                'name' => 'Nino Sekyere-Boakye',
                'photo' => 'images/team/nino-sekyere-boakye.webp',
                'languages' => 'English, French (conversational)',
                'badge' => 'Regional Director, Ghana · MARN 0959773',
                'leadership' => true,
                'bio' => 'Nino is an academician and researcher who has spent over a decade helping African students pursue education and work experience in Australia. He has travelled and worked in over 25 African countries. As a Registered Migration Agent, Nino advises on courses, visa pathways, career options, and life in Australia.',
            ],
            [
                'name' => 'Mansheel Kaur',
                'photo' => 'images/team/mansheel-kaur.webp',
                'languages' => 'English, Malay, Indonesian, Punjabi, Hindi',
                'badge' => 'Solicitor · Immigration Lawyer',
                'leadership' => false,
                'bio' => 'Mansheel comes with over 35 years of legal experience spanning Australia and Malaysia. She has a strong track record across business migration, skilled migration, family and partner visas, contributory parent visas, and resident return visas. She is a Notary Public and an accredited Mediator, and speaks five languages.',
            ],
            [
                'name' => 'Priscilla Bwalya Mwansa',
                'photo' => 'images/team/priscilla-mwansa.webp',
                'languages' => 'English, ici Bemba',
                'badge' => 'Senior Counsellor, Lusaka',
                'leadership' => false,
                'bio' => 'Priscilla is a Senior Counsellor responsible for planning, advising, and supporting students from Zambia and the broader region who wish to pursue education in Australia. With a background in strategic management and chartered accounting, she provides insight into both career planning and the financial considerations of studying abroad.',
            ],
        ];

        $supportTeam = [
            ['name' => 'Hana Hursepuny', 'photo' => 'images/team/hana-hursepuny.webp'],
            ['name' => 'Tamsyn Ong', 'photo' => 'images/team/tamsyn-ong.webp'],
            ['name' => 'Noor Ghafar', 'photo' => 'images/team/noor-ghafar.webp'],
            ['name' => 'Nurainy Desa', 'photo' => 'images/team/nurainy-desa.webp'],
            ['name' => 'Lucy Lim', 'photo' => 'images/team/lucy-lim.webp'],
            ['name' => 'Claudine Macaculop', 'photo' => 'images/team/claudine-macaculop.webp'],
        ];
    @endphp

    {{-- §1 Hero --}}
    <x-hero title="Multilingual specialists who have engaged with more than 145 nations"
            subtitle="Education, migration, and career experts, headquartered in Perth, represented across Asia, Africa, and the Pacific."
            :image="asset('images/about-team/team-meeting.webp')"
            alt="Blue Education team in a professional meeting"
            variant="left"
            :breadcrumbs="true" />

    {{-- Intro --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <p class="text-base-600 text-lg leading-relaxed text-pretty max-w-3xl">Our team spans continents, industries, and languages. From Registered Migration Agents to chartered accountants, solicitors to career counsellors, we bring real-world expertise to every consultation. Most of us are multilingual, and we are committed to getting it right for you.</p>
        </div>
    </section>

    {{-- §2 Our Team --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Team" :centered="false" />

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                @foreach($mainTeam as $member)
                    <x-team-member :name="$member['name']"
                                   :photo="$member['photo']"
                                   :bio="$member['bio']"
                                   :languages="$member['languages']"
                                   :badge="$member['badge']"
                                   :leadership="$member['leadership']" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §3 Associates & Back-Office Support --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Associates and Back-Office Support Team" :centered="false" />
            <div class="text-base-600 leading-relaxed max-w-3xl space-y-4 mb-10">
                <p class="text-pretty">Behind every successful outcome for our clients is a dedicated group of Associates and back-office team members. These are the faces of those who tirelessly support both our clients and our counsellors, coordinating high-volume administrative work and resource-intensive processes to uphold consistent service standards and timely operations.</p>
                <p class="text-pretty">Our team play a pivotal role in verifying information and documentation from clients, organising documentation, and assisting to facilitate course enrolments and the related visa application processes.</p>
                <p class="text-pretty">Without this committed team, we simply would not be able to support our clients effectively.</p>
                <p class="text-pretty">Our team members are located across the Asia-Pacific region and have supported Blue for more than a decade. Over the years, they have developed a deep understanding of every aspect of our internal processes and external requirements. Their experience, attention to detail and client-focused approach mean they consistently strive to achieve the best possible outcomes for every student and family we work with.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6" data-animate="stagger">
                @foreach($supportTeam as $member)
                    <div class="flex flex-col items-center text-center">
                        <x-avatar :name="$member['name']" :photo="$member['photo']" size="md" />
                        <p class="text-sm font-semibold text-base-900 mt-3">{{ $member['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §4 Our Expertise --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Expertise" />
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-8" data-animate="stagger">
                @foreach([
                    ['icon' => 'academic-cap', 'title' => 'Education', 'desc' => 'Institution matching. Pathway planning. Course selection. We know the Australian education system inside out, from English language programmes to postgraduate degrees.'],
                    ['icon' => 'briefcase', 'title' => 'Career', 'desc' => 'Job readiness. Employer connections. Career mapping. We bridge the gap between qualification and employment, with real-world insight into the Australian job market.'],
                    ['icon' => 'globe-alt', 'title' => 'Migration', 'desc' => 'Registered agents. Visa applications. Legal compliance. Blue holds MARN 1385471 and QEAC S165. We navigate the system so you don\'t have to.'],
                ] as $item)
                    <article class="bg-white rounded-corner-lg p-8 border border-base-200 text-center shadow-md">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-5">
                            <x-dynamic-component :component="'heroicon-o-' . $item['icon']" class="w-7 h-7 text-primary-700" />
                        </div>
                        <h3 class="font-bold text-base-900 text-lg mb-3">{{ $item['title'] }}</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">{{ $item['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §5 Credentials & Registrations --}}
    <section class="bg-base-50 border-y border-base-200">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-8">
            <h2 class="sr-only">Credentials and registrations</h2>
            <div class="flex flex-col sm:flex-row items-center gap-6 sm:gap-8">
                {{-- Credential logos --}}
                <div class="flex items-center gap-6 shrink-0">
                    <img src="{{ asset('images/credentials/qeac.svg') }}" alt="QEAC Certified" class="h-10 w-auto opacity-70" loading="lazy">
                    <img src="{{ asset('images/credentials/migration-alliance.svg') }}" alt="Migration Alliance" class="h-10 w-auto opacity-70" loading="lazy">
                    <img src="{{ asset('images/credentials/mia.svg') }}" alt="Migration Institute of Australia" class="h-10 w-auto opacity-70" loading="lazy">
                    <img src="{{ asset('images/credentials/australian-bar-association.svg') }}" alt="Australian Bar Association" class="h-10 w-auto opacity-70" loading="lazy">
                </div>
                {{-- Registration badges --}}
                <div class="flex items-center gap-3 flex-wrap">
                    @foreach([
                        'MARN 1385471',
                        'MARN 0959773',
                        'QEAC S165',
                    ] as $credential)
                        <span class="font-mono text-xs bg-white border border-base-200 rounded px-3 py-1.5 text-base-600">{{ $credential }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- §6 CTA Banner --}}
    <x-cta-banner title="Work with a team that understands your world"
                  subtitle="Book a consultation with an adviser who speaks your language and knows your market."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  secondaryText="Learn About Blue Education"
                  :secondaryHref="route('about.index')" />

</x-layout>
