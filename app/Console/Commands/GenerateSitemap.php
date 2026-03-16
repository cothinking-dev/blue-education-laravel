<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    public const CACHE_KEY = 'sitemap:xml';

    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap XML and store it in cache';

    public function handle(): int
    {
        $this->info('Generating sitemap...');

        $sitemap = Sitemap::create();

        $staticPages = [
            ['route' => 'home', 'priority' => 1.0, 'frequency' => Url::CHANGE_FREQUENCY_WEEKLY],
            ['route' => 'services.education.index', 'priority' => 0.8, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.education.school', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.education.english', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.education.vet-tafe', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.education.degrees', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.migration.index', 'priority' => 0.8, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.migration.student-visas', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.migration.graduate-work', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.migration.permanent-residence', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.career', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'services.student-support', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'programs.index', 'priority' => 0.8, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'programs.buddy-programme', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'programs.study-tours', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'programs.scsa-associate', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'programs.executive-internship', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'about.index', 'priority' => 0.8, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'about.team', 'priority' => 0.6, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'about.partners', 'priority' => 0.6, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'why-australia', 'priority' => 0.8, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'faq', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'admission-requirements', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'fees', 'priority' => 0.7, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'blog.index', 'priority' => 0.9, 'frequency' => Url::CHANGE_FREQUENCY_DAILY],
            ['route' => 'contact', 'priority' => 0.8, 'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['route' => 'privacy', 'priority' => 0.3, 'frequency' => Url::CHANGE_FREQUENCY_YEARLY],
            ['route' => 'terms', 'priority' => 0.3, 'frequency' => Url::CHANGE_FREQUENCY_YEARLY],
        ];

        foreach ($staticPages as $page) {
            $sitemap->add(
                Url::create(route($page['route']))
                    ->setPriority($page['priority'])
                    ->setChangeFrequency($page['frequency'])
            );
        }

        $posts = Post::query()->published()->get();

        foreach ($posts as $post) {
            $sitemap->add(
                Url::create(route('blog.show', $post))
                    ->setLastModificationDate($post->updated_at)
                    ->setPriority(0.7)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

        $this->info("Added {$posts->count()} blog posts.");

        Cache::put(self::CACHE_KEY, $sitemap->render());

        $this->info('Sitemap generated and cached.');

        return Command::SUCCESS;
    }
}
