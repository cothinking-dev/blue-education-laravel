<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function team(): View
    {
        return view('pages.about.team');
    }
}
