<?php

use App\Http\Middleware\CaptureServerPageview;
use App\Http\Middleware\HandleRedirects;
use App\Support\PostHogExceptionReporter;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->prepend(HandleRedirects::class);
        $middleware->appendToGroup('web', CaptureServerPageview::class);

        // cookie_consent is set by JS as plain text and read by both the client
        // and the server — exclude it from EncryptCookies so it round-trips.
        $middleware->encryptCookies(except: ['cookie_consent']);

        // App sits behind Caddy (and optionally Cloudflare). Trust the forwarded
        // headers so URL generation, isSecure(), and client IP resolution work.
        $middleware->trustProxies(
            at: '*',
            headers: Request::HEADER_X_FORWARDED_FOR
                | Request::HEADER_X_FORWARDED_HOST
                | Request::HEADER_X_FORWARDED_PORT
                | Request::HEADER_X_FORWARDED_PROTO,
        );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->report(function (Throwable $e): void {
            if (config('posthog.capture_exceptions') && config('posthog.token')) {
                app(PostHogExceptionReporter::class)->report($e);
            }
        });
    })->create();
