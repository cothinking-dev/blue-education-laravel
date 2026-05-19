<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PostHog\Client as PostHogClient;
use Throwable;

class PostHogExceptionReporter
{
    public function __construct(private readonly PostHogClient $client) {}

    public function report(Throwable $e): void
    {
        try {
            $request = app()->bound('request') ? app(Request::class) : null;

            $distinctId = $this->distinctIdFor($request);

            $this->client->capture([
                'distinctId' => $distinctId,
                'event' => '$exception',
                'properties' => [
                    '$exception_type' => $e::class,
                    '$exception_message' => $e->getMessage(),
                    '$exception_personURL' => null,
                    '$exception_list' => [[
                        'type' => $e::class,
                        'value' => $e->getMessage(),
                        'stacktrace' => [
                            'type' => 'raw',
                            'frames' => $this->framesFor($e),
                        ],
                        'mechanism' => [
                            'handled' => false,
                            'type' => 'generic',
                        ],
                    ]],
                    'environment' => app()->environment(),
                    'url' => $request?->fullUrl(),
                    'method' => $request?->method(),
                    'user_agent' => $request?->userAgent(),
                    'php_version' => PHP_VERSION,
                    'laravel_version' => app()->version(),
                ],
            ]);
        } catch (Throwable $reportingError) {
            Log::warning('PostHog exception reporting failed', [
                'error' => $reportingError->getMessage(),
            ]);
        }
    }

    /**
     * Use the session ID when available so server-side exceptions correlate with
     * the user's client-side PostHog session; fall back to a hostname-scoped
     * anonymous ID for CLI/queue contexts.
     */
    private function distinctIdFor(?Request $request): string
    {
        if ($request && $request->hasSession()) {
            return $request->session()->getId();
        }

        return 'server-'.gethostname();
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function framesFor(Throwable $e): array
    {
        $frames = [];
        foreach (array_slice($e->getTrace(), 0, 30) as $frame) {
            $frames[] = [
                'filename' => $frame['file'] ?? '<unknown>',
                'lineno' => $frame['line'] ?? 0,
                'function' => trim(($frame['class'] ?? '').($frame['type'] ?? '').($frame['function'] ?? '')),
                'in_app' => isset($frame['file']) && str_starts_with((string) $frame['file'], base_path('app')),
            ];
        }

        return $frames;
    }
}
