<?php

namespace App\Console\Commands;

use App\Enums\PartnerCategory;
use App\Models\Partner;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImportPartners extends Command
{
    /** @var string */
    protected $signature = 'app:import-partners
                            {source : Path to directory containing logo image files}
                            {--category= : Partner category (required)}
                            {--dry-run : List files without importing}';

    /** @var string */
    protected $description = 'Import partner logos from a directory into the database and storage';

    public function handle(): int
    {
        $source = $this->argument('source');
        $categoryValue = $this->option('category');
        $dryRun = $this->option('dry-run');

        if (! File::isDirectory($source)) {
            $this->error("Source directory does not exist: {$source}");

            return self::FAILURE;
        }

        $category = PartnerCategory::tryFrom($categoryValue);
        if (! $category) {
            $this->error("Invalid category: {$categoryValue}");
            $this->info('Valid categories: '.implode(', ', array_column(PartnerCategory::cases(), 'value')));

            return self::FAILURE;
        }

        $extensions = ['png', 'jpg', 'jpeg', 'webp', 'svg'];
        $files = collect(File::allFiles($source))
            ->filter(fn ($file) => in_array(strtolower($file->getExtension()), $extensions))
            ->values();

        if ($files->isEmpty()) {
            $this->warn('No image files found in the source directory.');

            return self::SUCCESS;
        }

        $this->info(($dryRun ? '[DRY RUN] ' : '')."Found {$files->count()} image file(s) in: {$source}");

        $maxSortOrder = Partner::where('category', $category)->max('sort_order') ?? -1;
        $imported = 0;

        $rows = [];
        foreach ($files as $file) {
            $maxSortOrder++;
            $name = $file->getFilenameWithoutExtension();
            $storagePath = 'images/partners/'.Str::slug($name).'.'.strtolower($file->getExtension());

            $rows[] = [$name, $category->getLabel(), $storagePath];

            if (! $dryRun) {
                Storage::put($storagePath, File::get($file->getRealPath()), 'public');

                Partner::create([
                    'name' => $name,
                    'logo' => $storagePath,
                    'category' => $category,
                    'is_active' => true,
                    'sort_order' => $maxSortOrder,
                ]);
                $imported++;
            }
        }

        $this->table(['Name', 'Category', 'Storage Path'], $rows);

        if ($dryRun) {
            $this->info("[DRY RUN] Would import {$files->count()} partner(s).");
        } else {
            $this->info("Imported {$imported} partner(s). Edit names in the admin panel.");
        }

        return self::SUCCESS;
    }
}
