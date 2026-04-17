<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class PartnerController extends Controller
{
    public function __invoke(): View
    {
        $partners = Cache::remember(Partner::CACHE_KEY, 3600, fn () => Partner::query()
            ->active()
            ->orderBy('sort_order')
            ->get()
            ->groupBy(fn (Partner $partner) => $partner->category->value));

        return view('pages.about.partners', ['partnersByCategory' => $partners]);
    }
}
