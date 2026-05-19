<?php

namespace App\Http\Middleware;

use App\Models\Redirect;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleRedirects
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->isMethod('GET') && ! $request->isMethod('HEAD')) {
            return $next($request);
        }

        $path = Redirect::normalisePath($request->path());

        $redirect = Redirect::query()
            ->where('enabled', true)
            ->where('from_path', $path === '/' ? '/' : $path)
            ->first();

        if (! $redirect) {
            return $next($request);
        }

        $redirect->forceFill([
            'hits' => $redirect->hits + 1,
            'last_hit_at' => now(),
        ])->saveQuietly();

        $target = $this->resolveTarget($redirect->to_path, $request);

        return redirect()->away($target, $redirect->status_code);
    }

    /**
     * Pass through absolute URLs; resolve relative targets to the current host.
     */
    private function resolveTarget(string $to, Request $request): string
    {
        if (preg_match('#^https?://#i', $to)) {
            return $to;
        }

        $path = '/'.ltrim($to, '/');

        return $request->getSchemeAndHttpHost().$path;
    }
}
