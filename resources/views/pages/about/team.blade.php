<x-layout title="Our Team"
          description="Meet the Blue Education team — multilingual specialists across five countries, delivering education, migration, and career advice.">

    @php
        $australianTeam = [
            ['name' => 'Glen Ong', 'role' => 'Managing Director | Registered Migration Agent MARN: 1385471', 'photo' => 'images/team/glen-ong.webp', 'bio' => 'Glen brings nearly 20 years of experience across private and government education sectors. As Managing Director, he leads Blue\'s long-term strategy while remaining personally accessible to clients. A Registered Migration Agent, Glen is experienced in student visas, skilled migration, family and partner visas, and resident return visas.', 'credentials' => 'BCom (Marketing), BArts (Asian Studies) — Curtin University; Grad Certificate in Migration Law & Practice; MARN 1385471', 'languages' => 'English, Cantonese, Bahasa Malaysia'],
            ['name' => 'Monica Gaikwad', 'role' => 'Associate Counsellor', 'photo' => 'images/team/monica-gaikwad.webp', 'bio' => 'Originally from India, Monica grew up in Kuwait before moving to Australia. She joined Blue through the Executive Internship Programme and has grown into a valued member of the team. With financial acumen and a natural aptitude for counselling, Monica supports students through their study and enrolment journeys.', 'credentials' => 'MBA — Curtin University; BBusiness (Accounting & Auditing) — S.N.D.T Women\'s University, Mumbai', 'languages' => 'English, Hindi, Marathi'],
            ['name' => 'Flora Wang', 'role' => 'Marketing Executive | Counsellor', 'photo' => 'images/team/flora-wang.webp', 'bio' => 'Flora is an Education Counsellor dedicated to helping students find the right pathway to a rewarding career. Originally from China, Flora has lived and studied in the United States and travelled extensively across Japan, Korea, and the Philippines. Her firsthand experience as an international student gives her genuine insight into the challenges students face.', 'credentials' => 'Master of Marketing and Innovation Management — Edith Cowan University; BBusiness — Guangdong University of Foreign Studies', 'languages' => 'English, Mandarin, Cantonese'],
            ['name' => 'Shen Sekhon', 'role' => 'Associate Counsellor', 'photo' => 'images/team/shen-sekhon.webp', 'bio' => 'With over 20 years in international higher education, Shen brings deep expertise in marketing, recruitment, and student enrolment. She spent 14 years at Curtin University as Marketing & Communications Manager, recruiting across Southeast Asia, West Asia, the subcontinent, and Europe.', 'credentials' => 'MBA — Curtin University; Bachelor of Mass Communications (Journalism & PR) — Curtin University; Diploma in Multimedia — LimKokWing University', 'languages' => 'English, Bahasa Malaysia'],
        ];

        $legalTeam = [
            ['name' => 'Mansheel Kaur', 'role' => 'Solicitor | Immigration Lawyer', 'photo' => 'images/team/mansheel-kaur.webp', 'bio' => 'Mansheel comes with over 35 years of legal experience spanning Australia and Malaysia. She has a strong track record across business migration, skilled migration, family and partner visas, contributory parent visas, and resident return visas. She is a Notary Public and an accredited Mediator, and speaks five languages.', 'credentials' => 'LL.B & Bachelor of Jurisprudence — Monash University; Solicitor (NSW); Advocate & Solicitor (Malaysia); Accredited Mediator; Notary Public', 'languages' => 'English, Malay, Indonesian, Punjabi, Hindi'],
            ['name' => 'Arwinder Pal Singh', 'role' => 'Registered Migration Agent MARN: 1574550', 'photo' => 'images/team/arwinder-singh.webp', 'bio' => 'Arwinder is one of Blue\'s Registered Migration Agents, with a comprehensive track record across employer-sponsored programmes, skilled migration, family migration, student visas, and Administrative Appeals Tribunal matters. His technical background in engineering and law gives him a structured, thorough approach to complex migration cases.', 'credentials' => 'Bachelor of Computer Science — GND University; Master of Engineering — University of South Australia; Juris Doctor (in progress) — Deakin University; MARN 1574550', 'languages' => 'English, Hindi, Punjabi'],
        ];

        $sonia = ['name' => 'Sonia Ong', 'role' => 'Executive Director | International Operations', 'photo' => 'images/team/sonia-ong.webp', 'bio' => 'Sonia leads Blue\'s offshore initiatives, bringing over 20 years of experience in strategy, risk, and governance consulting. Her background spans multi-national corporations, public listed companies, and senior management advisory across Asia. She speaks fluently in five languages.', 'credentials' => 'MBA — Deakin University (Strategy & Planning); BCom — University of Western Australia; CPA (Australia); Chartered Accountant (Malaysia)', 'languages' => 'English, Mandarin, Cantonese, Bahasa Malaysia, Bahasa Indonesia'];

        $internationalTeam = [
            ['name' => 'Elaine Ho', 'role' => 'Regional Head, Malaysia', 'photo' => 'images/team/elaine-ho.webp', 'bio' => 'Elaine brings a rare combination of legal training, international procurement experience, and education counselling. After practising law in Malaysia, she moved into governance and strategy roles with the UN and a major Asia Pacific airline before dedicating herself to student and migration counselling.', 'credentials' => 'Barrister at Law — Lincoln\'s Inn', 'languages' => 'English, Malay, Cantonese', 'region' => 'Malaysia, Southeast Asia'],
            ['name' => 'Monica Low', 'role' => 'Associate Counsellor, Malaysia', 'photo' => 'images/team/monica-low.webp', 'bio' => 'A native of Kuala Lumpur, Monica brings years of business and interpersonal skills developed across hotel management in Seattle, retail banking in Singapore, and now education counselling in Malaysia. Her approachable personality and multilingual fluency make her a natural fit for student interaction across Southeast Asia.', 'credentials' => 'BSc in Hospitality & Tourism Management — Purdue University; Postgraduate Diploma in Marketing — Curtin University', 'languages' => 'English, Bahasa Malaysia, Mandarin, Cantonese', 'region' => 'Malaysia, Southeast Asia'],
            ['name' => 'Hana Hursepuny', 'role' => 'Executive Assistant | Indonesia Representative', 'photo' => 'images/team/hana-hursepuny.webp', 'bio' => 'Hana is an integral member of the Blue family. She started as an intern and has grown into the team\'s go-to expert on enrolment process requirements and student visa guidelines — and a trainer for the wider team. She serves as translator and interpreter for Indonesian and Malaysian students on short-term study tours.', 'credentials' => null, 'languages' => 'English, Indonesian', 'region' => 'Indonesia, Malaysia'],
            ['name' => 'Minami Sakamoto', 'role' => 'Associate Counsellor, Japan', 'photo' => 'images/team/minami-sakamoto.webp', 'bio' => 'Based in Japan, Minami first came to Australia to study English, then joined Blue as an intern before becoming a counsellor. Her own experience as an international student — having studied in France and New York — gives her a genuine connection with clients navigating life away from home.', 'credentials' => 'World Liberal Arts — Nagoya University of Foreign Studies', 'languages' => 'Japanese, English', 'region' => 'Japan, Northeast Asia'],
            ['name' => 'Nino Sekyere-Boakye', 'role' => 'Regional Director, Ghana | Registered Migration Agent MARN: 0959773', 'photo' => 'images/team/nino-sekyere-boakye.webp', 'bio' => 'Nino is an academician and researcher who has spent over a decade helping African students pursue education and work experience in Australia. He has travelled and worked in over 25 African countries. As a Registered Migration Agent, Nino advises on courses, visa pathways, career options, and life in Australia.', 'credentials' => 'BA (Hons) — University of Ghana; Master of Professional Marketing — Edith Cowan University; Graduate Diploma of Migration Law — Murdoch University; MARN 0959773', 'languages' => 'English, French (conversational)', 'region' => 'Ghana, West Africa'],
            ['name' => 'Elijah Chongo', 'role' => 'Regional Head, Zambia', 'photo' => 'images/team/elijah-chongo.webp', 'bio' => 'Based in Lusaka, Elijah assists clients across Zambia and neighbouring countries in planning their pathway to Australia — whether to study, work, visit, or migrate. He brings over 20 years of research, risk management, and strategic advisory experience across both private and public sectors.', 'credentials' => 'Master\'s in Business Management — Wales University; Bachelor of Public Administration — University of Lusaka; Certificate in Basic Prosecution in Law — NIPA Zambia', 'languages' => 'English, ici Bemba, ci Nyanja', 'region' => 'Zambia, Southern Africa'],
            ['name' => 'Priscilla Bwalya Mwansa', 'role' => 'Regional Advisor, Lusaka | Senior Counsellor', 'photo' => 'images/team/priscilla-mwansa.webp', 'bio' => 'Priscilla is a Senior Counsellor responsible for planning, advising, and supporting students from Zambia and the broader region who wish to pursue education in Australia. With a background in strategic management and chartered accounting, she provides insight into both career planning and the financial considerations of studying abroad.', 'credentials' => 'Bachelor of Accounting — Copperbelt University; MBA (Finance, in progress); Chartered Accountant — ZICA', 'languages' => 'English, ici Bemba', 'region' => 'Zambia, Southern Africa'],
            ['name' => 'Sherene Chan', 'role' => 'Regional Head, New Zealand', 'photo' => 'images/team/sherene-chan.webp', 'bio' => 'Based in Auckland, Sherene facilitates options for those intending to study, work, and live in New Zealand. Her background as a migrant gives her invaluable firsthand perspective. Prior to education counselling, Sherene worked with a Big 4 firm and led stakeholder relationship management for prominent institutions including the United Nations Development Programme.', 'credentials' => 'MBA — University of South Australia; former Big 4 accounting firm consultant', 'languages' => 'English, Malay, Cantonese', 'region' => 'New Zealand, Oceania'],
        ];

        $offices = [
            ['Perth, WA (HQ)', 'Glen, Monica, Flora, Shen', 'Australia-wide'],
            ['Global (Offshore)', 'Sonia Ong (Executive Director)', 'International operations'],
            ['Malaysia', 'Elaine Ho, Monica Low', 'Malaysia, Southeast Asia'],
            ['Indonesia', 'Hana Hursepuny', 'Indonesia, Malaysia'],
            ['Japan', 'Minami Sakamoto', 'Japan, Northeast Asia'],
            ['Ghana', 'Nino Sekyere-Boakye (MARN)', 'Ghana, West Africa'],
            ['Zambia', 'Elijah Chongo, Priscilla Bwalya Mwansa', 'Zambia, Southern Africa'],
            ['New Zealand', 'Sherene Chan', 'New Zealand, Oceania'],
        ];
    @endphp

    {{-- §1 Hero --}}
    <x-hero title="Multilingual specialists across five countries."
            subtitle="Education, migration, and career experts — headquartered in Perth, represented across Asia, Africa, and the Pacific."
            :image="asset('images/about-team/team-meeting.webp')"
            alt="Blue Education team in a professional meeting"
            variant="left"
            :breadcrumbs="true" />

    {{-- Intro --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <p class="text-base-600 text-lg leading-relaxed text-pretty max-w-3xl">Our team spans continents, industries, and languages. From Registered Migration Agents to chartered accountants, solicitors to career counsellors — we bring real-world expertise to every consultation. Most of us are multilingual, and we are committed to getting it right for you.</p>
        </div>
    </section>

    {{-- §2 Australian Team --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Australian Team" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" data-animate="stagger">
                @foreach($australianTeam as $member)
                    @php
                        $isLeader = str_contains($member['role'], 'Managing Director');
                    @endphp
                    <x-team-member :name="$member['name']"
                                   :role="$member['role']"
                                   :photo="$member['photo']"
                                   :bio="$member['bio']"
                                   :credentials="$member['credentials']"
                                   :languages="$member['languages']"
                                   :badge="$isLeader ? 'Managing Director · MARN 1385471' : null"
                                   :leadership="$isLeader" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §3 International Operations --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="International Operations" :centered="false" />
            <p class="text-base-600 mb-10 text-lg leading-relaxed max-w-3xl text-pretty">Blue's international reach is powered by a team of regional representatives who provide localised support — in your language, in your time zone, with on-the-ground knowledge of your country's education and migration landscape.</p>

            {{-- Sonia Ong — featured full-width lead --}}
            <x-team-member :name="$sonia['name']"
                           :role="$sonia['role']"
                           :photo="$sonia['photo']"
                           :bio="$sonia['bio']"
                           :credentials="$sonia['credentials']"
                           :languages="$sonia['languages']"
                           variant="featured"
                           badge="Executive Director · International Operations"
                           :leadership="true"
                           class="mb-6" />

            {{-- Regional team grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5" data-animate="stagger">
                @foreach($internationalTeam as $member)
                    <x-team-member :name="$member['name']"
                                   :role="$member['role']"
                                   :photo="$member['photo']"
                                   :bio="$member['bio']"
                                   :credentials="$member['credentials']"
                                   :languages="$member['languages']"
                                   :badge="($member['region'] ?? null) ? $member['role'] : null"
                                   :leadership="str_contains($member['role'], 'Director')" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §4 Migration & Legal Specialists --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Migration & Legal Specialists" :centered="false" />
            <p class="text-base-600 mb-10 leading-relaxed max-w-3xl text-pretty">Blue's migration and legal specialists are fully registered and credentialled. Whether you need visa advice, migration strategy, or legal representation — we have qualified professionals on the team.</p>
            <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6" data-animate="stagger">
                @foreach($legalTeam as $member)
                    <x-team-member :name="$member['name']"
                                   :role="$member['role']"
                                   :photo="$member['photo']"
                                   :bio="$member['bio']"
                                   :credentials="$member['credentials']"
                                   :languages="$member['languages']"
                                   variant="legal"
                                   :badge="$member['role']" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §5 Our Expertise --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Expertise" />
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-8" data-animate="stagger">
                @foreach([
                    ['icon' => 'academic-cap', 'title' => 'Education Specialists', 'desc' => 'Institution matching. Pathway planning. Course selection. We know the Australian education system inside out — from English language programmes to postgraduate degrees.'],
                    ['icon' => 'briefcase', 'title' => 'Career Specialists', 'desc' => 'Job readiness. Employer connections. Career mapping. We bridge the gap between qualification and employment, with real-world insight into the Australian job market.'],
                    ['icon' => 'globe-alt', 'title' => 'Migration Specialists', 'desc' => 'Registered agents. Visa applications. Legal compliance. Blue holds MARN 1385471 and QEAC S165. We navigate the system so you don\'t have to.'],
                ] as $item)
                    <article class="bg-white rounded-corner-lg p-8 border border-base-200 text-center shadow-md">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-5">
                            <x-dynamic-component :component="'heroicon-o-' . $item['icon']" class="w-7 h-7 text-primary-700" />
                        </div>
                        <h3 class="font-bold text-base-900 text-lg mb-3">{{ $item['title'] }}</h3>
                        <p class="text-base-600 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §6 International Offices --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="International Offices" :centered="false" />
            <x-data-table class="shadow-xl" :headers="['Location', 'Representative(s)', 'Market Coverage']"
                          :rows="$offices" />
        </div>
    </section>

    {{-- §7 Credentials & Registrations --}}
    <section class="bg-base-50 border-y border-base-200">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-8">
            <h2 class="sr-only">Credentials and registrations</h2>
            <div class="flex items-center gap-4 flex-wrap">
                <span class="text-base-500 text-xs font-medium uppercase tracking-wider">Registrations:</span>
                @foreach([
                    'MARN 1385471 — Glen Ong',
                    'MARN 0959773 — Nino Sekyere-Boakye',
                    'MARN 1574550 — Arwinder Pal Singh',
                    'QEAC S165',
                    'MARA Registered',
                ] as $credential)
                    <span class="font-mono text-xs bg-white border border-base-200 rounded px-3 py-1.5 text-base-600">{{ $credential }}</span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §8 CTA Banner --}}
    <x-cta-banner title="Work with a team that understands your world."
                  subtitle="Book a consultation with an advisor who speaks your language and knows your market."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  secondaryText="Learn About Blue Education"
                  :secondaryHref="route('about.index')" />

</x-layout>
