<?php

namespace App\Http\Controllers;

use App\Console\Commands\GenerateSitemap;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $xml = Cache::get(GenerateSitemap::CACHE_KEY);

        if ($xml === null) {
            Artisan::call('sitemap:generate');
            $xml = Cache::get(GenerateSitemap::CACHE_KEY);
        }

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }
}
