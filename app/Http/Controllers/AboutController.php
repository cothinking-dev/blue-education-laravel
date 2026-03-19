<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function team(): View
    {
        $australian = TeamMember::query()
            ->section('Australia')
            ->teamType('general')
            ->orderBy('sort_order')
            ->get();

        $legalTeam = TeamMember::query()
            ->section('Australia')
            ->teamType('legal')
            ->orderBy('sort_order')
            ->get();

        $international = TeamMember::query()
            ->section('International')
            ->orderBy('sort_order')
            ->get();

        $sonia = $international->firstWhere('team_type', 'leadership');
        $regionalTeam = $international->where('team_type', '!=', 'leadership');

        $offices = $this->buildOfficesTable($australian, $sonia, $regionalTeam);

        return view('pages.about.team', [
            'australianTeam' => $australian,
            'legalTeam' => $legalTeam,
            'sonia' => $sonia,
            'internationalTeam' => $regionalTeam,
            'offices' => $offices,
        ]);
    }

    /**
     * Build the International Offices table rows from team member data.
     *
     * @param  \Illuminate\Support\Collection<int, TeamMember>  $australian
     * @param  \Illuminate\Support\Collection<int, TeamMember>  $regional
     * @return list<array{0: string, 1: string, 2: string}>
     */
    private function buildOfficesTable($australian, ?TeamMember $sonia, $regional): array
    {
        $rows = [];

        // HQ row
        $hqNames = $australian->map(fn (TeamMember $m) => explode(' ', $m->name)[0])->join(', ');
        $rows[] = ['Perth, WA (HQ)', $hqNames, 'Australia-wide'];

        // Leadership row
        if ($sonia) {
            $rows[] = ['Global (Offshore)', $sonia->name.' (Executive Director)', 'International operations'];
        }

        // Group regional team by region's primary location (first part before comma)
        $grouped = $regional->groupBy(function (TeamMember $m) {
            $region = $m->region ?? 'Other';

            return explode(',', $region)[0];
        });

        foreach ($grouped as $location => $members) {
            $names = $members->pluck('name')->join(', ');
            $hasMarn = $members->contains(fn (TeamMember $m) => str_contains($m->credentials ?? '', 'MARN'));
            $coverage = $members->first()?->region ?? $location;

            $rows[] = [
                $location,
                $hasMarn ? $names.' (MARN)' : $names,
                $coverage,
            ];
        }

        return $rows;
    }
}
