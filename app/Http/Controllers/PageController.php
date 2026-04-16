<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /** @var array<string, string> */
    private const ROUTE_VIEW_MAP = [
        'services.index' => 'pages.services.index',
        'services.education.index' => 'pages.services.education.index',
        'services.education.school' => 'pages.services.education.school',
        'services.education.english' => 'pages.services.education.english',
        'services.education.vet-tafe' => 'pages.services.education.vet-tafe',
        'services.education.degrees' => 'pages.services.education.degrees',
        'services.migration.index' => 'pages.services.migration.index',
        'services.migration.student-visas' => 'pages.services.migration.student-visas',
        'services.migration.graduate-work' => 'pages.services.migration.graduate-work',
        'services.migration.permanent-residence' => 'pages.services.migration.permanent-residence',
        'services.career' => 'pages.services.career',
        'services.student-support' => 'pages.services.student-support',
        'programs.index' => 'pages.programs.index',
        'programs.buddy-programme' => 'pages.programs.buddy-programme',
        'programs.study-tours' => 'pages.programs.study-tours',
        'programs.scsa-associate' => 'pages.programs.scsa-associate',
        'programs.executive-internship' => 'pages.programs.executive-internship',
        'about.index' => 'pages.about.index',
        'about.team' => 'pages.about.team',
        'why-australia' => 'pages.why-australia',
        'faq' => 'pages.faq',
        'admission-requirements' => 'pages.admission-requirements',
        'fees' => 'pages.fees',
        'contact' => 'pages.contact',
        'privacy' => 'pages.privacy',
        'terms' => 'pages.terms',
        'showcase' => 'showcase',
    ];

    public function show(): View
    {
        $routeName = request()->route()->getName();

        if (! isset(self::ROUTE_VIEW_MAP[$routeName])) {
            abort(404);
        }

        return view(self::ROUTE_VIEW_MAP[$routeName]);
    }
}
