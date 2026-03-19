<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class RobotsController extends Controller
{
    public function __invoke(): Response
    {
        $sitemapUrl = url('/sitemap.xml');

        $robots = <<<ROBOTS
        # Welcome all crawlers and AI agents
        User-agent: *
        Disallow:
        Allow: /

        # AI Crawlers — explicitly welcomed
        User-agent: GPTBot
        Allow: /

        User-agent: Google-Extended
        Allow: /

        User-agent: ChatGPT-User
        Allow: /

        User-agent: Claude-Web
        Allow: /

        User-agent: Bytespider
        Allow: /

        User-agent: CCBot
        Allow: /

        User-agent: anthropic-ai
        Allow: /

        User-agent: Perplexity-User
        Allow: /

        User-agent: cohere-ai
        Allow: /

        # Sitemap
        Sitemap: {$sitemapUrl}
        ROBOTS;

        return response($robots, 200, ['Content-Type' => 'text/plain']);
    }
}
