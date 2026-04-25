<?php

namespace App\Http\Controllers;

use App\Console\Commands\GenerateSitemap;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $xml = Cache::get(GenerateSitemap::CACHE_KEY);

        if ($xml === null) {
            $xml = GenerateSitemap::generate();
            Cache::put(GenerateSitemap::CACHE_KEY, $xml);
        }

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }
}
