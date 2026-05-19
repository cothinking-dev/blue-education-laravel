<?php

namespace App\Console\Commands;

use App\Models\Redirect;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;
use Throwable;

class ImportWixSitemap extends Command
{
    protected $signature = 'redirects:import-wix
                            {url : URL or local path to the Wix sitemap.xml (or a sitemap index)}
                            {--target=/ : Default destination path for every imported redirect}
                            {--status=301 : Redirect status code (301, 302, 307, 308)}
                            {--disabled : Import in a disabled state so they can be reviewed first}
                            {--dry-run : Show what would be imported without writing}';

    protected $description = 'Import URLs from a Wix sitemap as redirects; each maps to --target by default.';

    public function handle(): int
    {
        $url = (string) $this->argument('url');
        $target = (string) $this->option('target');
        $status = (int) $this->option('status');
        $enabled = ! $this->option('disabled');
        $dryRun = (bool) $this->option('dry-run');

        $this->info("Fetching sitemap: {$url}");

        try {
            $xml = $this->loadSitemap($url);
        } catch (Throwable $e) {
            $this->error("Failed to load sitemap: {$e->getMessage()}");

            return self::FAILURE;
        }

        $paths = $this->extractPaths($xml);

        if (empty($paths)) {
            $this->warn('No <url><loc> entries found.');

            return self::SUCCESS;
        }

        $this->info(sprintf('Found %d URLs.', count($paths)));

        $created = 0;
        $skipped = 0;

        foreach ($paths as $path) {
            $normalised = Redirect::normalisePath($path);

            if (Redirect::query()->where('from_path', $normalised)->exists()) {
                $skipped++;
                $this->line("  skip   {$normalised} (already exists)");

                continue;
            }

            if ($dryRun) {
                $this->line("  would  {$normalised} → {$target}");
            } else {
                Redirect::create([
                    'from_path' => $normalised,
                    'to_path' => $target,
                    'status_code' => $status,
                    'enabled' => $enabled,
                    'source' => 'wix-import',
                ]);
                $this->line("  +      {$normalised} → {$target}");
            }

            $created++;
        }

        $this->newLine();
        $this->info(sprintf(
            '%s %d redirect%s, skipped %d duplicate%s.',
            $dryRun ? 'Would create' : 'Created',
            $created,
            $created === 1 ? '' : 's',
            $skipped,
            $skipped === 1 ? '' : 's',
        ));

        if (! $dryRun && $created > 0) {
            $this->newLine();
            $this->comment('Next: open /admin/redirects, sort by hits desc, and re-target the top-hit pages.');
        }

        return self::SUCCESS;
    }

    private function loadSitemap(string $url): SimpleXMLElement
    {
        $body = str_starts_with($url, 'http')
            ? Http::timeout(30)->get($url)->throw()->body()
            : file_get_contents($url);

        if ($body === false || $body === '') {
            throw new \RuntimeException('Empty sitemap body.');
        }

        return new SimpleXMLElement($body);
    }

    /**
     * Walks a sitemap or sitemap index, returning every path-only URL it contains.
     *
     * @return list<string>
     */
    private function extractPaths(SimpleXMLElement $xml): array
    {
        $paths = [];

        if ($xml->getName() === 'sitemapindex') {
            foreach ($xml->sitemap as $entry) {
                $childUrl = (string) $entry->loc;
                if ($childUrl === '') {
                    continue;
                }
                try {
                    $childXml = $this->loadSitemap($childUrl);
                    $paths = array_merge($paths, $this->extractPaths($childXml));
                } catch (Throwable $e) {
                    $this->warn("  ! could not load child sitemap {$childUrl}: {$e->getMessage()}");
                }
            }

            return $paths;
        }

        foreach ($xml->url as $url) {
            $loc = (string) $url->loc;
            if ($loc === '') {
                continue;
            }
            $path = parse_url($loc, PHP_URL_PATH) ?: '/';
            $paths[] = $path;
        }

        return $paths;
    }
}
