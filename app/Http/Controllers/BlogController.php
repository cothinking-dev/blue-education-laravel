<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $categorySlug = $request->query('category');
        $featuredPost = Post::query()->published()->featured()->with('category')->latest('published_at')->first();

        $postsQuery = Post::query()->published()->with('category')->latest('published_at');

        if ($featuredPost) {
            $postsQuery->where('id', '!=', $featuredPost->id);
        }

        if ($categorySlug) {
            $postsQuery->whereHas('category', fn ($q) => $q->where('slug', $categorySlug));
        }

        return view('pages.blog.index', [
            'featuredPost' => $featuredPost,
            'posts' => $postsQuery->paginate(9)->withQueryString(),
            'categories' => Category::query()->orderBy('sort_order')->get(),
            'activeCategory' => $categorySlug,
        ]);
    }

    public function show(Post $post): View
    {
        $post->load('category');

        return view('pages.blog.show', [
            'post' => $post,
            'relatedPosts' => Post::query()
                ->published()
                ->with('category')
                ->where('category_id', $post->category_id)
                ->where('id', '!=', $post->id)
                ->latest('published_at')
                ->limit(3)
                ->get(),
        ]);
    }
}
