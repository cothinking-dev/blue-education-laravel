<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PostHog Project Token
    |--------------------------------------------------------------------------
    |
    | The public project API key (starts with `phc_`). Safe to expose in JS.
    | Used for both client-side capture (via GTM) and server-side capture.
    |
    */
    'token' => env('POSTHOG_PROJECT_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | PostHog Host
    |--------------------------------------------------------------------------
    |
    | PostHog Cloud region: `https://us.i.posthog.com` or `https://eu.i.posthog.com`.
    | Self-hosted instances: set to your domain.
    |
    */
    'host' => env('POSTHOG_HOST', 'https://us.i.posthog.com'),

    /*
    |--------------------------------------------------------------------------
    | Server-side Exception Reporting
    |--------------------------------------------------------------------------
    |
    | When enabled, unhandled exceptions are forwarded to PostHog from the
    | server. Disabled by default in non-production environments.
    |
    */
    'capture_exceptions' => env('POSTHOG_CAPTURE_EXCEPTIONS', false),

];
