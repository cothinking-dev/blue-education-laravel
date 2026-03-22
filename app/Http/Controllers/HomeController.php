<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.home', [
            'latestPosts' => Post::query()->published()->with('category')->latest('published_at')->limit(3)->get(),
            'testimonials' => Testimonial::query()->active()->orderBy('sort_order')->get(),
        ]);
    }
}
