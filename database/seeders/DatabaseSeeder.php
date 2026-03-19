<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Partner;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Admin user
        User::firstOrCreate(
            ['email' => 'admin@blueeducation.com.au'],
            ['name' => 'Admin', 'password' => bcrypt('password'), 'is_admin' => true],
        );

        // Blog categories and posts (migrated from Wix)
        $this->call(BlogSeeder::class);

        // Testimonials from wireframe
        if (Testimonial::count() === 0) {
            $testimonials = [
                ['quote' => 'The team went above and beyond, helping me find my course of interest and arrange a scholarship to UWA within 2 weeks.', 'name' => 'N.L.', 'initials' => 'NL', 'photo' => 'images/testimonials/nl.webp', 'credential' => 'Bachelor of Commerce — University of Western Australia', 'country' => 'Malaysia'],
                ['quote' => 'Where would I be without the team at Blue Education? They have helped me so much through my time in Perth, that they are now like family. They are always there for me, whatever I need.', 'name' => 'H.T.', 'initials' => 'HT', 'photo' => 'images/testimonials/ht.webp', 'credential' => 'Master of Business Administration — Curtin University', 'country' => 'Japan'],
                ['quote' => 'Blue Education made my dream of becoming a Registered Nurse come true.', 'name' => 'S.W.', 'initials' => 'SW', 'photo' => 'images/testimonials/sw.webp', 'credential' => 'Bachelor of Nursing — Edith Cowan University', 'country' => 'Singapore'],
                ['quote' => 'My first experience with Blue Education was in 2017, renewing my visa for the first time. Everything was handled in order and in a timely manner. The most organised service I\'ve experienced.', 'name' => 'Z.L.', 'initials' => 'ZL', 'photo' => 'images/testimonials/zl.webp', 'credential' => 'Doctor of Philosophy — Murdoch University', 'country' => 'China'],
                ['quote' => 'They went as far as arranging homestay accommodation and planning out the smoothest course for my next few years of study. My transition to Australia couldn\'t have been easier.', 'name' => 'J.K.', 'initials' => 'JK', 'photo' => 'images/testimonials/jk.webp', 'credential' => 'Foundation Studies — North Metropolitan TAFE', 'country' => 'South Korea'],
            ];

            foreach ($testimonials as $i => $data) {
                Testimonial::create([...$data, 'is_active' => true, 'sort_order' => $i]);
            }
        }

        // FAQ seed data
        if (Faq::count() === 0) {
            Faq::factory()->count(5)->create(['category' => 'education']);
            Faq::factory()->count(5)->create(['category' => 'migration']);
            Faq::factory()->count(3)->create(['category' => 'career']);
            Faq::factory()->count(3)->create(['category' => 'support']);
            Faq::factory()->count(3)->create(['category' => 'fees']);
        }

        // Team members (from wireframe)
        if (TeamMember::count() === 0) {
            $teamMembers = [
                // Australian Team (Perth HQ)
                ['name' => 'Glen Ong', 'role' => 'Managing Director | Registered Migration Agent MARN: 1385471', 'photo' => 'images/team/glen-ong.webp', 'bio' => 'Glen brings nearly 20 years of experience across private and government education sectors. As Managing Director, he leads Blue\'s long-term strategy while remaining personally accessible to clients. A Registered Migration Agent, Glen is experienced in student visas, skilled migration, family and partner visas, and resident return visas.', 'credentials' => 'BCom (Marketing), BArts (Asian Studies) — Curtin University; Grad Certificate in Migration Law & Practice; MARN 1385471', 'languages' => 'English, Cantonese, Bahasa Malaysia', 'section' => 'Australia'],
                ['name' => 'Monica Gaikwad', 'role' => 'Associate Counsellor', 'photo' => 'images/team/monica-gaikwad.webp', 'bio' => 'Originally from India, Monica grew up in Kuwait before moving to Australia. She joined Blue through the Executive Internship Programme and has grown into a valued member of the team. With financial acumen and a natural aptitude for counselling, Monica supports students through their study and enrolment journeys.', 'credentials' => 'MBA — Curtin University; BBusiness (Accounting & Auditing) — S.N.D.T Women\'s University, Mumbai', 'languages' => 'English, Hindi, Marathi', 'section' => 'Australia'],
                ['name' => 'Flora Wang', 'role' => 'Marketing Executive | Counsellor', 'photo' => 'images/team/flora-wang.webp', 'bio' => 'Flora is an Education Counsellor dedicated to helping students find the right pathway to a rewarding career. Originally from China, Flora has lived and studied in the United States and travelled extensively across Japan, Korea, and the Philippines. Her firsthand experience as an international student gives her genuine insight into the challenges students face.', 'credentials' => 'Master of Marketing and Innovation Management — Edith Cowan University; BBusiness — Guangdong University of Foreign Studies', 'languages' => 'English, Mandarin, Cantonese', 'section' => 'Australia'],
                ['name' => 'Shen Sekhon', 'role' => 'Associate Counsellor', 'photo' => 'images/team/shen-sekhon.webp', 'bio' => 'With over 20 years in international higher education, Shen brings deep expertise in marketing, recruitment, and student enrolment. She spent 14 years at Curtin University as Marketing & Communications Manager, recruiting across Southeast Asia, West Asia, the subcontinent, and Europe.', 'credentials' => 'MBA — Curtin University; Bachelor of Mass Communications (Journalism & PR) — Curtin University; Diploma in Multimedia — LimKokWing University', 'languages' => 'English, Bahasa Malaysia', 'section' => 'Australia'],
                ['name' => 'Mansheel Kaur', 'role' => 'Solicitor | Immigration Lawyer', 'photo' => 'images/team/mansheel-kaur.webp', 'bio' => 'Mansheel comes with over 35 years of legal experience spanning Australia and Malaysia. She has a strong track record across business migration, skilled migration, family and partner visas, contributory parent visas, and resident return visas. She is a Notary Public and an accredited Mediator, and speaks five languages.', 'credentials' => 'LL.B & Bachelor of Jurisprudence — Monash University; Solicitor (NSW); Advocate & Solicitor (Malaysia); Accredited Mediator; Notary Public', 'languages' => 'English, Malay, Indonesian, Punjabi, Hindi', 'section' => 'Australia', 'team_type' => 'legal'],
                ['name' => 'Arwinder Pal Singh', 'role' => 'Registered Migration Agent MARN: 1574550', 'photo' => 'images/team/arwinder-singh.webp', 'bio' => 'Arwinder is one of Blue\'s Registered Migration Agents, with a comprehensive track record across employer-sponsored programs, skilled migration, family migration, student visas, and Administrative Appeals Tribunal matters. His technical background in engineering and law gives him a structured, thorough approach to complex migration cases.', 'credentials' => 'Bachelor of Computer Science — GND University; Master of Engineering — University of South Australia; Juris Doctor (in progress) — Deakin University; MARN 1574550', 'languages' => 'English, Hindi, Punjabi', 'section' => 'Australia', 'team_type' => 'legal'],

                // International Operations
                ['name' => 'Sonia Ong', 'role' => 'Executive Director | International Operations', 'photo' => 'images/team/sonia-ong.webp', 'bio' => 'Sonia leads Blue\'s offshore initiatives, bringing over 20 years of experience in strategy, risk, and governance consulting. Her background spans multi-national corporations, public listed companies, and senior management advisory across Asia. She speaks fluently in five languages.', 'credentials' => 'MBA — Deakin University (Strategy & Planning); BCom — University of Western Australia; CPA (Australia); Chartered Accountant (Malaysia)', 'languages' => 'English, Mandarin, Cantonese, Bahasa Malaysia, Bahasa Indonesia', 'section' => 'International', 'region' => 'Global', 'team_type' => 'leadership'],
                ['name' => 'Elaine Ho', 'role' => 'Regional Head, Malaysia', 'photo' => 'images/team/elaine-ho.webp', 'bio' => 'Elaine brings a rare combination of legal training, international procurement experience, and education counselling. After practising law in Malaysia, she moved into governance and strategy roles with the UN and a major Asia Pacific airline before dedicating herself to student and migration counselling.', 'credentials' => 'Barrister at Law — Lincoln\'s Inn', 'languages' => 'English, Malay, Cantonese', 'section' => 'International', 'region' => 'Malaysia, Southeast Asia'],
                ['name' => 'Monica Low', 'role' => 'Associate Counsellor, Malaysia', 'photo' => 'images/team/monica-low.webp', 'bio' => 'A native of Kuala Lumpur, Monica brings years of business and interpersonal skills developed across hotel management in Seattle, retail banking in Singapore, and now education counselling in Malaysia. Her approachable personality and multilingual fluency make her a natural fit for student interaction across Southeast Asia.', 'credentials' => 'BSc in Hospitality & Tourism Management — Purdue University; Postgraduate Diploma in Marketing — Curtin University', 'languages' => 'English, Bahasa Malaysia, Mandarin, Cantonese', 'section' => 'International', 'region' => 'Malaysia, Southeast Asia'],
                ['name' => 'Hana Hursepuny', 'role' => 'Executive Assistant | Indonesia Representative', 'photo' => 'images/team/hana-hursepuny.webp', 'bio' => 'Hana is an integral member of the Blue family. She started as an intern and has grown into the team\'s go-to expert on enrolment process requirements and student visa guidelines — and a trainer for the wider team. She serves as translator and interpreter for Indonesian and Malaysian students on short-term study tours.', 'credentials' => null, 'languages' => 'English, Indonesian', 'section' => 'International', 'region' => 'Indonesia, Malaysia'],
                ['name' => 'Minami Sakamoto', 'role' => 'Associate Counsellor, Japan', 'photo' => 'images/team/minami-sakamoto.webp', 'bio' => 'Based in Japan, Minami first came to Australia to study English, then joined Blue as an intern before becoming a counsellor. Her own experience as an international student — having studied in France and New York — gives her a genuine connection with clients navigating life away from home.', 'credentials' => 'World Liberal Arts — Nagoya University of Foreign Studies', 'languages' => 'Japanese, English', 'section' => 'International', 'region' => 'Japan, Northeast Asia'],
                ['name' => 'Nino Sekyere-Boakye', 'role' => 'Regional Director, Ghana | Registered Migration Agent MARN: 0959773', 'photo' => 'images/team/nino-sekyere-boakye.webp', 'bio' => 'Nino is an academician and researcher who has spent over a decade helping African students pursue education and work experience in Australia. He has travelled and worked in over 25 African countries. As a Registered Migration Agent, Nino advises on courses, visa pathways, career options, and life in Australia.', 'credentials' => 'BA (Hons) — University of Ghana; Master of Professional Marketing — Edith Cowan University; Graduate Diploma of Migration Law — Murdoch University; MARN 0959773', 'languages' => 'English, French (conversational)', 'section' => 'International', 'region' => 'Ghana, West Africa'],
                ['name' => 'Elijah Chongo', 'role' => 'Regional Head, Zambia', 'photo' => 'images/team/elijah-chongo.webp', 'bio' => 'Based in Lusaka, Elijah assists clients across Zambia and neighbouring countries in planning their pathway to Australia — whether to study, work, visit, or migrate. He brings over 20 years of research, risk management, and strategic advisory experience across both private and public sectors.', 'credentials' => 'Master\'s in Business Management — Wales University; Bachelor of Public Administration — University of Lusaka; Certificate in Basic Prosecution in Law — NIPA Zambia', 'languages' => 'English, ici Bemba, ci Nyanja', 'section' => 'International', 'region' => 'Zambia, Southern Africa'],
                ['name' => 'Priscilla Bwalya Mwansa', 'role' => 'Regional Advisor, Lusaka | Senior Counsellor', 'photo' => 'images/team/priscilla-mwansa.webp', 'bio' => 'Priscilla is a Senior Counsellor responsible for planning, advising, and supporting students from Zambia and the broader region who wish to pursue education in Australia. With a background in strategic management and chartered accounting, she provides insight into both career planning and the financial considerations of studying abroad.', 'credentials' => 'Bachelor of Accounting — Copperbelt University; MBA (Finance, in progress); Chartered Accountant — ZICA', 'languages' => 'English, ici Bemba', 'section' => 'International', 'region' => 'Zambia, Southern Africa'],
                ['name' => 'Sherene Chan', 'role' => 'Regional Head, New Zealand', 'photo' => 'images/team/sherene-chan.webp', 'bio' => 'Based in Auckland, Sherene facilitates options for those intending to study, work, and live in New Zealand. Her background as a migrant gives her invaluable firsthand perspective. Prior to education counselling, Sherene worked with a Big 4 firm and led stakeholder relationship management for prominent institutions including the United Nations Development Programme.', 'credentials' => 'MBA — University of South Australia; former Big 4 accounting firm consultant', 'languages' => 'English, Malay, Cantonese', 'section' => 'International', 'region' => 'New Zealand, Oceania'],
            ];

            foreach ($teamMembers as $i => $data) {
                TeamMember::create([...$data, 'sort_order' => $i]);
            }
        }

        // Partner logos (WA universities)
        if (Partner::count() === 0) {
            $partners = [
                ['name' => 'University of Western Australia', 'logo' => 'images/partners/uwa-logo.svg', 'type' => 'university'],
                ['name' => 'Curtin University', 'logo' => 'images/partners/curtin-logo.webp', 'type' => 'university'],
                ['name' => 'Murdoch University', 'logo' => 'images/partners/murdoch-logo.svg', 'type' => 'university'],
                ['name' => 'Edith Cowan University', 'logo' => 'images/partners/ecu-logo.png', 'type' => 'university'],
                ['name' => 'North Metropolitan TAFE', 'logo' => 'images/partners/nmtafe-logo.svg', 'type' => 'tafe'],
            ];

            foreach ($partners as $i => $data) {
                Partner::create([...$data, 'sort_order' => $i]);
            }
        }
    }
}
