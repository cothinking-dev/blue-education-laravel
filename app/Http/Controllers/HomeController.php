<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.home', [
            'latestPosts' => Cache::remember(Post::CACHE_KEY_LATEST, 3600, fn () => Post::query()->published()->with('category')->latest('published_at')->limit(3)->get()),
            'testimonials' => Cache::remember(Testimonial::CACHE_KEY, 3600, fn () => Testimonial::query()->active()->orderBy('sort_order')->get()),
        ]);
    }
}
