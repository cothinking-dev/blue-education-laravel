<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    public const CACHE_KEY = 'sitemap:xml';

    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap XML and store it in cache';

    /** @var array<string, array{priority: float, frequency: string}> */
    private array $overrides = [
        'home' => ['priority' => 1.0, 'frequency' => Url::CHANGE_FREQUENCY_WEEKLY],
        'blog.index' => ['priority' => 0.9, 'frequency' => Url::CHANGE_FREQUENCY_DAILY],
        'privacy' => ['priority' => 0.3, 'frequency' => Url::CHANGE_FREQUENCY_YEARLY],
        'terms' => ['priority' => 0.3, 'frequency' => Url::CHANGE_FREQUENCY_YEARLY],
        'about.team' => ['priority' => 0.6],
        'about.partners' => ['priority' => 0.6],
    ];

    /** @var list<string> */
    private array $excludedRoutes = ['sitemap', 'showcase'];

    public function handle(): int
    {
        $this->info('Generating sitemap...');

        $sitemap = Sitemap::create();

        // Auto-discover static pages from registered routes
        $routes = collect(Route::getRoutes()->getRoutes())
            ->filter(function (\Illuminate\Routing\Route $route) {
                return in_array('GET', $route->methods())
                    && $route->getName()
                    && ! str_contains($route->uri(), '{')
                    && ! in_array($route->getName(), $this->excludedRoutes)
                    && ! str_starts_with($route->getName(), 'filament.')
                    && $route->getName() !== 'livewire.update';
            });

        foreach ($routes as $route) {
            $name = $route->getName();
            $override = $this->overrides[$name] ?? [];

            $priority = $override['priority'] ?? $this->defaultPriority($name);
            $frequency = $override['frequency'] ?? Url::CHANGE_FREQUENCY_MONTHLY;

            $sitemap->add(
                Url::create(route($name))
                    ->setPriority($priority)
                    ->setChangeFrequency($frequency)
            );
        }

        // Add dynamic blog posts
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

    /**
     * Determine default priority based on route name conventions.
     */
    private function defaultPriority(string $name): float
    {
        // Hub/index pages and top-level single-segment routes
        if (str_ends_with($name, '.index') || ! str_contains($name, '.')) {
            return 0.8;
        }

        return 0.7;
    }
}
