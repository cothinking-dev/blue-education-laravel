<?php

namespace Database\Seeders;

use App\Models\Redirect;
use Illuminate\Database\Seeder;

/**
 * 301 redirects from the legacy Wix site (blueeducation.com.au) to the Laravel rewrite.
 *
 * Source: https://www.blueeducation.com.au/sitemap.xml (a sitemap index covering
 * pages, blog posts, blog categories, event pages, and booking services).
 *
 * Mappings were derived by reconciling Wix URL slugs against the new Laravel route
 * inventory. Anything without a clear destination on the new site falls back to
 * the homepage. Run this seeder once after the redirects table exists:
 *
 *     php artisan db:seed --class=WixRedirectsSeeder
 *
 * Idempotent: re-running updates the destination/status without creating duplicates.
 */
class WixRedirectsSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->mappings() as $from => $to) {
            Redirect::updateOrCreate(
                ['from_path' => Redirect::normalisePath($from)],
                [
                    'to_path' => $to,
                    'status_code' => 301,
                    'enabled' => true,
                    'source' => 'wix-import',
                ]
            );
        }
    }

    /**
     * @return array<string, string>
     */
    private function mappings(): array
    {
        return [
            // ── About / company ──────────────────────────────────────────────
            '/about-us' => '/about',
            '/about-5' => '/about',
            '/the-3-pillars' => '/about',
            '/iambiablue' => '/about',
            '/our-stories' => '/about/team',
            '/blue-australia-team' => '/about/team',
            '/blue-international-team' => '/about/team',
            '/copy-of-blue-australia-team' => '/about/team',
            '/copy-of-blue-international-team' => '/about/team',
            '/our-partners' => '/about/partners',
            '/partnerinvite' => '/about/partners',
            '/scsa' => '/about/scsa-partnership',

            // ── Contact ──────────────────────────────────────────────────────
            '/contact-us' => '/contact',
            '/service-page/education-mara-advisor' => '/contact',
            '/wearehiring' => '/contact',
            '/我们正在招聘' => '/contact',

            // ── Services: top level ──────────────────────────────────────────
            '/ourservices' => '/services',

            // ── Services: education ──────────────────────────────────────────
            '/education' => '/services/education',
            '/primary-secondary-education' => '/services/education/school',
            '/vocational-education' => '/services/education/vet-tafe',
            '/degrees-higher-education' => '/services/education/degrees',
            '/english-courses' => '/services/education/english',
            '/toefl' => '/services/education/english',
            '/application-process' => '/services/education',
            '/school-forms' => '/services/education',
            '/document-checklist' => '/services/education',
            '/studentinfopack' => '/services/education',

            // ── Services: migration ──────────────────────────────────────────
            '/migration' => '/services/migration',
            '/skilled-migration' => '/services/migration/permanent-residence',
            '/employer-sponsored' => '/services/migration/permanent-residence',
            '/graduate-post-study-work-visa' => '/services/migration/graduate-work',
            '/live-businessmigration' => '/services/migration',
            '/live' => '/services/migration',
            '/live1' => '/services/migration',
            '/live-old' => '/services/migration',

            // ── Services: career ─────────────────────────────────────────────
            '/career' => '/services/career',
            '/host-employer' => '/services/career',
            '/workopps' => '/services/career',
            '/ebp' => '/services/career',
            '/sbs' => '/services/career',
            '/swlkl' => '/services/career',

            // ── Services: student support ────────────────────────────────────
            '/homestay' => '/services/student-support',
            '/homestayrules' => '/services/student-support',

            // ── Services: OSHC ───────────────────────────────────────────────
            '/oshc-ovc' => '/services/oshc',

            // ── Programs ─────────────────────────────────────────────────────
            '/study-tour' => '/programs/study-tours',
            '/study-tours' => '/programs/study-tours',
            '/copy-of-study-tour-01' => '/programs/study-tours',
            '/executive-internship-programme' => '/programs/executive-internship',
            '/study-work-live-in-australia-atfis' => '/programs/study-abroad',

            // ── Why Australia ────────────────────────────────────────────────
            '/why-australia' => '/why-australia',
            '/australian-education-system' => '/why-australia',

            // ── Resources ────────────────────────────────────────────────────
            '/faqs' => '/faq',
            '/admission-criteria' => '/admission-requirements',
            '/fees-and-charges' => '/fees',
            '/education-fees' => '/fees',
            '/ebooks' => '/blog',

            // ── Blog index + categories ──────────────────────────────────────
            '/blog' => '/blog',
            '/blog/categories/english-blog' => '/blog',
            '/blog/categories/简体中文blog' => '/blog',
            '/blog/categories/繁体中文blog' => '/blog',
            '/blog/categories/日本語blog' => '/blog',
            '/blog/categories/한국어blog' => '/blog',

            // ── Blog posts (Wix /post/{slug} → new /blog/{slug}) ────────────
            '/post/is-migrating-to-australia-a-good-option-for-me' => '/blog/is-migrating-to-australia-a-good-option-for-me',
            '/post/wa-and-dama-designated-area-migration-agreements' => '/blog/wa-and-dama-designated-area-migration-agreements',
            '/post/just-landed-in-australia-your-guide-to-housing-options-in-perth-for-international-students-wo' => '/blog/just-landed-in-australia-your-guide-to-housing-options-in-perth-for-international-students-wo',
            '/post/lodging-your-interest-for-a-skilled-nominated-visa-a-simplified-approach' => '/blog/lodging-your-interest-for-a-skilled-nominated-visa-a-simplified-approach',
            '/post/what-do-employers-look-for-in-a-cv' => '/blog/what-do-employers-look-for-in-a-cv',
            '/post/xi-ao-da-xue-ti-sheng-wu-wei' => '/blog/xi-ao-da-xue-ti-sheng-wu-wei',
            '/post/what-happens-when-you-run-out-of-time-on-your-working-holiday-visa' => '/blog/what-happens-when-you-run-out-of-time-on-your-working-holiday-visa',
            '/post/your-guide-to-australia-s-group-of-eight-universities-how-to-get-in-and-why-it-s-worth-it' => '/blog/your-guide-to-australia-s-group-of-eight-universities-how-to-get-in-and-why-it-s-worth-it',
            '/post/the-growing-demand-for-teachers-in-australia-why-a-teaching-qualification-is-gold' => '/blog/the-growing-demand-for-teachers-in-australia-why-a-teaching-qualification-is-gold',
            '/post/what-is-an-acceptable-financial-evidence-for-an-australian-student-visa-application' => '/blog/what-is-an-acceptable-financial-evidence-for-an-australian-student-visa-application',
            '/post/how-do-i-overcome-exam-stress' => '/blog/how-do-i-overcome-exam-stress',
            '/post/can-an-employer-sponsor-a-foreign-skilled-worker-or-professional' => '/blog/can-an-employer-sponsor-a-foreign-skilled-worker-or-professional',
            '/post/what-happens-when-a-dependant-turns-18-or-24-on-an-australian-visa' => '/blog/what-happens-when-a-dependant-turns-18-or-24-on-an-australian-visa',
            '/post/why-is-it-so-difficult-for-me-to-get-a-job-in-the-industry-after-graduation' => '/blog/why-is-it-so-difficult-for-me-to-get-a-job-in-the-industry-after-graduation',
            '/post/sub-class-485-post-study-work-stream-simplified' => '/blog/sub-class-485-post-study-work-stream-simplified',
            '/post/getting-yourself-ready-to-enrol-to-study-in-australia' => '/blog/getting-yourself-ready-to-enrol-to-study-in-australia',
            '/post/how-do-i-decide-on-what-career-choice--pathway' => '/blog/how-do-i-decide-on-what-career-choice--pathway',
            '/post/how-to-apply-for-a-research-degree' => '/blog/how-to-apply-for-a-research-degree',

            // ── Legal ────────────────────────────────────────────────────────
            '/privacy-policy' => '/privacy',
            '/zerotolerancetoabuse' => '/zero-tolerance-to-abuse',

            // ── Events (no events module in new site → homepage) ─────────────
            '/event-list' => '/',
            '/events' => '/',
            '/copy-of-events' => '/',
            '/event-details/0c36e37f-d38e-4bb1-879d-1016012935d3' => '/',
            '/event-details/springboard-to-australia-2024' => '/',
            '/sta2024' => '/',

            // ── Multilingual landing pages (no i18n in new site → homepage) ──
            '/vn' => '/',
            '/vn-au' => '/',
            '/vn-ov' => '/',
            '/vn-hm' => '/',
            '/vn-dt' => '/',
            '/jp-au' => '/',
            '/jp-ov' => '/',
            '/jp-hm' => '/',
            '/jp-dt' => '/',
            '/ch-au' => '/',
            '/ch-ov' => '/',
            '/ch-hm' => '/',
            '/ch-dt' => '/',
            '/ch-edu' => '/',

            // ── Misc / legacy / deprecated ───────────────────────────────────
            '/main-page1' => '/',
            '/covid-19' => '/',
            '/covid-19-alert' => '/',
            '/headlines' => '/',
            '/others' => '/',
            '/copy-of-news-events' => '/',
            '/copy-of-others' => '/',
            '/copy-of-testimonies' => '/',
        ];
    }
}
