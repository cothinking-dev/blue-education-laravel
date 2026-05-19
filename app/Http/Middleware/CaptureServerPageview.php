<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use PostHog\Client as PostHogClient;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

/**
 * Cookieless server-side $pageview capture for PostHog.
 *
 * Fires for every successful HTML GET request, regardless of cookie consent.
 * Privacy posture:
 *   - distinctId is SHA-256 of (Laravel session id + day + APP_KEY) — rotates
 *     daily, so cross-day correlation isn't possible from the captured value.
 *   - IP is dropped (`$ip => null`).
 *   - Tagged `server_side: true` so dashboards can distinguish from client SDK.
 */
class CaptureServerPageview
{
    /** @var list<string> */
    private array $excludedUriPrefixes = [
        'admin', 'livewire-', 'instruckt/', 'storage/', 'up', 'robots.txt',
        'sitemap.xml', 'og-image', 'build/', 'favicon', '_debugbar', 'horizon',
        'telescope', 'api/',
    ];

    /** @var list<string> */
    private array $botPatterns = [
        '/bot\b/i', '/crawl/i', '/spider/i', '/slurp/i', '/facebookexternalhit/i',
        '/lighthouse/i', '/headlesschrome/i', '/screaming/i', '/curl/i', '/wget/i',
        '/google.*(inspection|page.?speed)/i', '/yandex/i', '/baidu/i', '/duckduckbot/i',
        '/applebot/i', '/preview/i',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $this->shouldCapture($request, $response)) {
            return $response;
        }

        try {
            app(PostHogClient::class)->capture([
                'distinctId' => $this->distinctIdFor($request),
                'event' => '$pageview',
                'properties' => [
                    '$current_url' => $request->fullUrl(),
                    '$host' => $request->getHost(),
                    '$pathname' => '/'.ltrim($request->path(), '/'),
                    '$referrer' => $request->headers->get('referer'),
                    '$user_agent' => $request->userAgent(),
                    '$ip' => null,
                    'server_side' => true,
                    'consent' => $request->cookie('cookie_consent') ?? 'unknown',
                ],
            ]);
        } catch (Throwable $e) {
            Log::warning('PostHog server pageview capture failed', [
                'error' => $e->getMessage(),
            ]);
        }

        return $response;
    }

    private function shouldCapture(Request $request, Response $response): bool
    {
        if (! config('posthog.token')) {
            return false;
        }

        if ($request->method() !== 'GET') {
            return false;
        }

        if ($response->getStatusCode() !== 200) {
            return false;
        }

        $contentType = (string) $response->headers->get('Content-Type', '');
        if (! str_contains($contentType, 'text/html')) {
            return false;
        }

        if ($this->isExcludedPath($request->path())) {
            return false;
        }

        if ($this->isBot((string) $request->userAgent())) {
            return false;
        }

        return true;
    }

    private function isExcludedPath(string $path): bool
    {
        foreach ($this->excludedUriPrefixes as $prefix) {
            if ($path === $prefix || str_starts_with($path, $prefix.'/') || str_starts_with($path, $prefix)) {
                return true;
            }
        }

        return false;
    }

    private function isBot(string $userAgent): bool
    {
        if ($userAgent === '') {
            return true;
        }

        foreach ($this->botPatterns as $pattern) {
            if (preg_match($pattern, $userAgent) === 1) {
                return true;
            }
        }

        return false;
    }

    /**
     * Daily-rotating, session-derived, hashed identifier — no PII, no cross-day
     * linkability from the captured value alone.
     */
    private function distinctIdFor(Request $request): string
    {
        $sessionId = $request->hasSession() ? $request->session()->getId() : 'no-session';
        $day = Carbon::now()->format('Y-m-d');
        $salt = (string) config('app.key');

        return hash('sha256', $sessionId.'|'.$day.'|'.$salt);
    }
}
