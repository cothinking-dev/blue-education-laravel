<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('faqs')->truncate();

        $contact = route('contact');
        $oshc = route('services.oshc');
        $english = route('services.education.english');
        $studentSupport = route('services.student-support');
        $graduateWork = route('services.migration.graduate-work');
        $career = route('services.career');
        $admission = route('admission-requirements');
        $fees = route('fees');

        $faqs = [
            // ─── 1. Study Options ──────────────────────────────────────────
            [
                'category' => 'study',
                'question' => 'What types of courses can I study in Australia?',
                'answer' => <<<HTML
<p>Australia offers a very wide range of study options for international students at different levels. You can choose from:</p>
<ul>
    <li><strong>Study tours and school holiday programmes</strong> &mdash; short-term group programmes (often 1&ndash;4 weeks) that combine English study or school visits with cultural and sightseeing activities, usually during school holidays. These are popular for school groups who want a &ldquo;taste&rdquo; of Australian education and lifestyle without committing to a long course.</li>
    <li><strong>High school and school holiday programmes</strong> &mdash; government and independent secondary schools for Years 7&ndash;12, plus holiday programmes where students can experience Australian schooling, improve English and join local activities during term breaks.</li>
    <li><strong><a href="{$english}">English language (ELICOS)</a></strong> &mdash; general English, academic English and test-preparation courses (IELTS, PTE, TOEFL) of various lengths for students who want to build language skills before or alongside other study.</li>
    <li><strong>Vocational Education and Training (VET) / TAFE</strong> &mdash; practical, skills-focused Certificates I&ndash;IV, Diplomas and Advanced Diplomas in areas such as business, IT, hospitality, automotive, community services, childcare, design and trades.</li>
    <li><strong>Pathway and foundation programmes</strong> &mdash; preparatory programmes that help you meet academic and English requirements for a bachelor degree and adapt to Australian academic standards.</li>
    <li><strong>Undergraduate degrees</strong> &mdash; Associate and Bachelor degrees in fields like business, IT, engineering, health, nursing, education, creative arts, science and social sciences.</li>
    <li><strong>Postgraduate coursework</strong> &mdash; Graduate Certificates, Graduate Diplomas and Masters by coursework for students who already hold a degree and want to gain advanced professional knowledge or change career direction.</li>
    <li><strong>Higher degree by research</strong> &mdash; Masters by Research and Doctor of Philosophy (PhD) for students interested in academic or research careers, focusing on independent research projects under academic supervision.</li>
</ul>
<p>Because there are thousands of courses and providers, the best choice depends on your age, academic background, English level, budget and long-term goals. Blue Education can help you compare options and design a study pathway&mdash;from short study tours and high school programmes through to VET, university and research degrees.</p>
<p>If you are unsure where to start, you are welcome to <a href="{$contact}">contact us for a free consultation</a> about your study options in Australia so we can review your profile and suggest suitable programmes and institutions.</p>
HTML,
            ],
            [
                'category' => 'study',
                'question' => 'What are some popular programmes for international students in Australia?',
                'answer' => <<<HTML
<p>International students in Australia are drawn to programmes that offer strong career outcomes, global recognition and good migration or work opportunities. Some of the most popular areas of study include Business and Management, Accounting and Finance, Engineering, Information Technology (IT), Nursing and Health Sciences, Hospitality and Tourism, Education/Teaching, and various trade and vocational courses such as automotive, cookery and construction. Many students also choose fields like data and computer science, cybersecurity, environmental science, law and creative arts, reflecting global demand and Australia&rsquo;s strengths in these disciplines.</p>
<p>Within these fields, both university degrees (bachelor, masters, research) and VET/TAFE qualifications are popular, depending on whether students prefer a more academic pathway or a practical, skills-based route into the workforce. The &ldquo;best&rdquo; programme is different for each student and depends on interests, academic background, budget, and long-term plans (for example, returning home, building an international career, or seeking migration pathways). If you are unsure which programme might suit you, <a href="{$contact}">Blue Education can help you compare popular options</a> and match them to your goals.</p>
HTML,
            ],
            [
                'category' => 'study',
                'question' => 'What are the general entry criteria to enrol in a study programme in Australia?',
                'answer' => <<<HTML
<p>In general, you will need to meet three main types of entry criteria:</p>
<ul>
    <li><strong>Academic requirements</strong> &mdash; your previous school or university results and any subject prerequisites.</li>
    <li><strong><a href="{$english}">English language requirements</a></strong> &mdash; for example, IELTS or PTE scores, or other proof of English.</li>
    <li><strong>Visa-related requirements</strong> &mdash; such as the Genuine Student requirement, financial capacity and health insurance for your student visa.</li>
</ul>
<p>Each school, college and university sets its own specific entry standards for each programme, which can vary depending on your level (high school, VET, bachelor, masters or research) and your home-country qualifications. Students should always check the detailed entry requirements on the official website of their chosen provider. If you are unsure whether you meet the criteria, you can <a href="{$contact}">contact Blue Education</a> and we can review your background and help you understand which programmes and pathways you are eligible for. You can also browse our <a href="{$admission}">admission requirements overview</a> for a starting point.</p>
HTML,
            ],

            // ─── 2. Student Visa ───────────────────────────────────────────
            [
                'category' => 'visa',
                'question' => 'What types of visa can I use to study in Australia?',
                'answer' => <<<HTML
<p>For most international students who want to study full time in Australia, the main visa is the <strong>Student visa (subclass 500)</strong>. This visa is used for a wide range of courses, including English language (ELICOS), high school, vocational (VET/TAFE), foundation programmes, bachelor degrees and postgraduate study. It lets you stay in Australia for the duration of your course, study full time and usually work part time within the allowed hours.</p>
<p>There are also some other visa types that allow shorter or more specialised study. For example, visitor visas and Working Holiday Maker visas (subclass 600/601/651, 417 and 462) can be used for short-term study only (generally up to 3&ndash;4 months), such as a short English course or study tour, where the main purpose is tourism or a working holiday rather than long-term study.</p>
<p>Because each visa has different purposes, conditions and study limits, the right option depends on your course length, goals and personal situation. <a href="{$contact}">Blue Education can explain which visa type suits your study plan</a> and help you prepare the correct documents for your application.</p>
HTML,
            ],
            [
                'category' => 'visa',
                'question' => 'What do you need to prepare for a student visa?',
                'answer' => <<<HTML
<p>For an Australian student visa (subclass 500), students can think of the documents in three main groups: <strong>who you are, what you will study, and how you will pay for it</strong>. This usually means preparing identity documents (such as a valid passport and, where available, a birth certificate or national ID), plus your Letter of Offer and Confirmation of Enrolment (CoE) from your education provider. Students also need to show their academic background and English level through school or university transcripts and any required English test results, and explain why they are a genuine student and temporary entrant through a personal statement and supporting evidence like previous study or work records and ties to their home country.</p>
<p>On top of that, students must show they have enough money to cover tuition fees, living costs and travel, using documents such as bank statements, loan approvals, sponsor income documents or scholarship letters. They also need <a href="{$oshc}">Overseas Student Health Cover (OSHC)</a> for the full visa period, and may be asked to provide health and character documents such as medical examination results and police clearances. Extra documents can be required in special cases, for example guardian and welfare arrangements if the student is under 18, or marriage and birth certificates if family members are included in the application.</p>
<p>Because requirements can change and vary by country and personal circumstances, students should always check the latest official checklist for their own situation&mdash;and if they are unsure, they can <a href="{$contact}">contact Blue Education</a> for help confirming exactly which documents they personally need to prepare first.</p>
HTML,
            ],
            [
                'category' => 'visa',
                'question' => 'How early should I apply for a student visa?',
                'answer' => <<<HTML
<p>You should apply for your Australian student visa as early as possible once you have your Confirmation of Enrolment (CoE) from your school or university. As a general guide, many advisers recommend lodging your visa application around <strong>3&ndash;4 months before your course start date</strong>, to allow enough time for processing, health checks and any extra documents that might be requested. You can usually submit your application earlier than this (up to several months before your course), but you must already have a valid CoE when you apply.</p>
<p>Visa processing times can change and may be longer in busy periods, so students should always check the current processing times on the <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/student-500" target="_blank" rel="noopener noreferrer">Department of Home Affairs website</a> and avoid leaving their application to the last minute. If you are unsure when to start, you can <a href="{$contact}">contact Blue Education</a> and we can help you plan a suitable timeline for your course, including when to apply for admission, receive your CoE and lodge your visa.</p>
HTML,
            ],
            [
                'category' => 'visa',
                'question' => 'Can I work on a student visa?',
                'answer' => <<<HTML
<p>If you hold a Student visa (subclass 500), you can usually work up to <strong>48 hours per fortnight</strong> while your course is in session, and unlimited hours during official breaks. You can only start working after your course has begun, and you have the same basic workplace rights as any other worker in Australia (such as minimum pay and safe working conditions).</p>
<p>If you are enrolled in a Masters by research or PhD, once your research programme has started you are generally allowed to work unlimited hours, even during teaching periods. However, your university or scholarship may set its own limits, and you must still maintain satisfactory academic progress.</p>
<p>Family members (dependants) who come with you on a student visa can also work, but their work rights depend on the level of your course. For most bachelor or VET students, dependants are limited to 48 hours of work per fortnight while the main student is studying. If the main student is doing a Masters or PhD, dependants are usually allowed to work full-time once the course has started.</p>
<p>For the most accurate information, students and dependants should always read the work conditions listed on their visa grant letter. If you are unsure how many hours you are allowed to work, you can <a href="{$contact}">contact Blue Education</a> and we can help you understand your work rights in relation to your course. After your studies, you may also be eligible for further work rights under a <a href="{$graduateWork}">Temporary Graduate visa</a>.</p>
HTML,
            ],
            [
                'category' => 'visa',
                'question' => 'What are my options if my student visa is refused?',
                'answer' => <<<HTML
<p>If your student visa is refused, the most important document is your <strong>refusal outcome letter</strong>, because it explains the reasons for the decision and what options (if any) are available to you. The next steps can be very different depending on whether you lodged your visa offshore or onshore, and every application is assessed on its own individual circumstances, so there is no single &ldquo;standard&rdquo; solution.</p>
<p>In some cases, students may be able to reapply with a stronger application, or seek a review of the decision if they applied onshore and have review rights. Because a refusal can affect future visa plans and the correct strategy depends entirely on your situation, it is important to get personalised advice. If your visa has been refused and you are unsure what to do next, you can <a href="{$contact}">contact Blue Education</a> to go through your refusal letter and discuss what realistic options may be available for you.</p>
HTML,
            ],

            // ─── 3. Living in Australia ────────────────────────────────────
            [
                'category' => 'living',
                'question' => 'What is the living cost in Australia?',
                'answer' => <<<HTML
<p>The Australian Government requires student visa applicants to show they have enough money to cover their living expenses while studying in Australia. As a general guide, you should provide evidence of financial capacity amounting to at least <strong>AUD 29,710 per year</strong> (around AUD 2,400&ndash;2,500 per month) for basic living costs such as accommodation, food, transport, utilities, health insurance and personal expenses. This is the minimum financial capacity currently used for student visa purposes; many students may spend more than this depending on their lifestyle and which city they live in.</p>
<p>Actual costs vary between cities and by housing type. For example, rent, groceries and transport in larger cities such as Sydney and Melbourne are usually higher than in cities like Adelaide, Brisbane, Perth or regional areas.</p>
<p>To help students plan their budget, the official Study Australia website offers a Cost of Living Calculator where you can compare different cities and living arrangements and get an approximate weekly or monthly estimate: <a href="https://intl-student-living-cost-australia.base44.app/" target="_blank" rel="noopener noreferrer">International Student Cost-of-Living Calculator</a>. For a full Blue Education breakdown, see our <a href="{$fees}">Fees &amp; Costs page</a>.</p>
HTML,
            ],
            [
                'category' => 'living',
                'question' => 'What if I get sick while I am living in Australia &mdash; am I covered?',
                'answer' => <<<HTML
<p>If you are an international student on a Student visa (subclass 500), you must have <a href="{$oshc}">Overseas Student Health Cover (OSHC)</a> for the entire time you are in Australia. Basic OSHC is a type of health insurance that usually helps cover some visits to the doctor (GP), some hospital treatment, emergency ambulance and a limited amount for prescription medicines. This means that if you become sick or have a minor injury, you can book an appointment with a local doctor, show your OSHC card, and claim some or all of the cost depending on your policy. In an emergency, you can call <strong>000</strong> for an ambulance or go to the nearest hospital, and OSHC will normally contribute to the eligible costs.</p>
<p>OSHC does not usually cover things like dental, optical or physiotherapy, so many students choose to buy extra cover or private insurance if they want protection for these services. It is important to check exactly what your OSHC policy includes, how to make claims, and whether there are any waiting periods before certain services are covered. If you are unsure what to do when you feel unwell, you can talk to your OSHC provider, visit a GP, or use student health and wellbeing services at your institution. <a href="{$contact}">Blue Education can also help explain how OSHC works</a>, what it covers, and what extra options you may want to consider before you travel&mdash;see our <a href="{$oshc}">OSHC page</a> for more.</p>
HTML,
            ],
            [
                'category' => 'living',
                'question' => 'Where will I live in Australia, and does Blue Education assist?',
                'answer' => <<<HTML
<p>International students in Australia can choose from several common accommodation options, such as homestay with a local family, student housing or hostels, and shared rental housing with other students. The best choice depends on your budget, how independent you want to be, and how close you need to be to your campus or workplace.</p>
<p>In Perth, Blue Education operates an established <strong>Blue Education Homestay Network</strong>, which has been placing students with Australian family homes for <strong>more than 15 years</strong>. This gives students a safe, welcoming environment and a chance to experience local culture and practice English at home.</p>
<p>For other states and cities in Australia, Blue Education can assist through partner student housing providers and the Australian Homestay Network (AHN). This means we can connect you with reliable accommodation options even if you are not studying in Perth. If you are unsure what type of housing suits you, you can <a href="{$contact}">contact Blue Education</a> and we can discuss your needs and help you explore suitable accommodation choices. Learn more about settlement help on our <a href="{$studentSupport}">Student Support page</a>.</p>
HTML,
            ],

            // ─── 4. Post-Study & Visa Options ──────────────────────────────
            [
                'category' => 'post-study',
                'question' => 'Can I remain in Australia after I complete my course?',
                'answer' => <<<HTML
<p>You can stay in Australia while your student visa is still valid, which usually covers your course plus a short extra period after you finish. If you would like to stay longer after completing your studies, you will generally need to apply for a new visa before your current student visa expires. For many international graduates, this may include a <a href="{$graduateWork}">Temporary Graduate&ndash;type visa</a> or another visa option that fits their qualifications, work plans and personal situation.</p>
<p>The visa options and rules after graduation can change over time and depend on factors such as your course level, where you studied, your occupation and your work experience. Because of this, the best next step is to get personalised advice. If you are unsure what you can do after your course, you are welcome to <a href="{$contact}">contact Blue Education</a> so we can discuss your study background and help you understand the visa pathways that may be available to you.</p>
HTML,
            ],
            [
                'category' => 'post-study',
                'question' => 'Do I need a skills assessment after finishing my studies in Australia?',
                'answer' => <<<HTML
<p>If you complete an Australian qualification, you do not automatically need to go through a separate skills assessment just to &ldquo;get your qualification recognised&rdquo; for general purposes like job hunting or further study in Australia. Australian qualifications are already issued within the Australian Qualifications Framework (AQF), so employers and education providers here can usually recognise them directly.</p>
<p>However, a formal <a href="{$admission}">skills assessment</a> may still be required later if you want to use your Australian qualification for skilled migration, licensing or professional registration in a particular occupation (for example, engineering, teaching, trades, some health professions). In those cases, you must apply to the relevant assessing authority or registration body for your occupation (such as VETASSESS, Trades Recognition Australia, AITSL for teachers, or a state Overseas Qualifications Unit), and each has its own criteria and process. Because the need for skills assessment depends on your future visa plans and target profession, it is best to get personalised advice. If you are unsure whether you will need a skills assessment after your studies, you can <a href="{$contact}">contact Blue Education</a> to talk through your goals and understand what may apply in your situation.</p>
HTML,
            ],
            [
                'category' => 'post-study',
                'question' => 'How can I enhance my chances of getting a job after I graduate?',
                'answer' => <<<HTML
<p>You can strengthen your job prospects before you graduate by combining your studies with practical experience and strong employability skills. Employers in Australia value students who have real-world experience such as part-time work, internships, volunteering, or industry projects, as well as good communication, teamwork and problem-solving abilities. Getting involved in work related to your field, joining student clubs or societies, and saying yes to projects that let you apply what you learn in class all help you stand out.</p>
<p>It is also important to prepare early for the job search itself. This includes building a professional CV and LinkedIn profile, practising job interviews, understanding Australian workplace culture, and learning how to network effectively. Blue Education offers an <a href="{$career}">Employability Booster Programme</a> that supports students and graduates with exactly these skills&mdash;helping you prepare your job-search documents, practise interviews, and develop the confidence and knowledge you need for the real working world. If you would like structured support in planning your career while you study, you are welcome to <a href="{$contact}">contact Blue Education</a> to learn more about this programme.</p>
HTML,
            ],

            // ─── 5. Our Fees ───────────────────────────────────────────────
            [
                'category' => 'fees',
                'question' => 'Is there a fee for Blue Education&rsquo;s services?',
                'answer' => <<<HTML
<p><strong>Blue Education does not charge any fees for course counselling or advice on your study options.</strong></p>
<p>Fees may apply for other services, such as student visa application lodgement, visa-related advice and ongoing visa support. Any such fees will be clearly explained to you before you proceed. See our <a href="{$fees}">Fees &amp; Costs page</a> for a full breakdown.</p>
HTML,
            ],
            [
                'category' => 'fees',
                'question' => 'Do you charge for skills assessment or visa advice?',
                'answer' => <<<HTML
<p>General consultations about skills assessment or visa options are provided by a Registered Migration Agent (MARA) or immigration lawyer engaged by Blue Education. Consultation fees generally <strong>start from AUD 300 + GST</strong>.</p>
<p>If you choose to proceed with further work or ongoing support after the initial consultation, this fee is usually offset against the total professional fees on your final invoice. Details of any fees and offsets will be explained to you before you decide to go ahead. See our <a href="{$fees}">Fees &amp; Costs page</a> for more detail.</p>
HTML,
            ],
            [
                'category' => 'fees',
                'question' => 'Does Blue Education charge for other support services?',
                'answer' => <<<HTML
<p>Yes. These may include high school support, assistance for housing, homestay placement and monitoring, airport pickup and local transportation assistance, employability-readiness programmes, and other tailored transition services to help students or migrants <a href="{$studentSupport}">settle into life in Australia</a>. All fees are quoted clearly in writing before you decide to proceed, and we will explain what is included in each service so you can choose the level of support that best suits your needs and budget.</p>
HTML,
            ],
            [
                'category' => 'fees',
                'question' => 'How do I get started with Blue Education?',
                'answer' => <<<HTML
<p>Getting started is simple. You can <a href="{$contact}">contact us by email, phone, WhatsApp or through the enquiry form on our website</a>, and share a few details about your study or migration goals. Our team will review your information and may ask for documents such as your CV or academic results to understand your background. We will then recommend suitable pathways and, if you wish to proceed, guide you step-by-step through course selection, application, visa planning and any extra support services you need.</p>
HTML,
            ],
            [
                'category' => 'fees',
                'question' => 'Can I book an online consultation if I am not in Australia yet?',
                'answer' => <<<HTML
<p>Yes. We support students and migrants who are inside and outside Australia, and you can book an online consultation from anywhere in the world. You can <a href="{$contact}">request an appointment via email, WhatsApp, phone or our online contact form</a>, and we will confirm a suitable time and platform (such as GMeet or Teams, or WhatsApp call). During the consultation we will discuss your goals, answer your questions, and outline your study, migration and support options before you decide on the next steps.</p>
HTML,
            ],
        ];

        $orderByCategory = [];
        foreach ($faqs as $faq) {
            $category = $faq['category'];
            $orderByCategory[$category] = ($orderByCategory[$category] ?? 0) + 1;

            Faq::create([
                'category' => $category,
                'question' => $faq['question'],
                'answer' => trim($faq['answer']),
                'sort_order' => $orderByCategory[$category],
            ]);
        }
    }
}
