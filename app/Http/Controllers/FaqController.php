<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function __invoke(): View
    {
        $faqs = Faq::query()
            ->orderBy('sort_order')
            ->get()
            ->groupBy('category');

        $categories = collect(Faq::CATEGORIES);

        return view('pages.faq', [
            'faqsByCategory' => $faqs,
            'categories' => $categories,
        ]);
    }
}
