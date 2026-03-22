<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected ?string $pollingInterval = null;

    protected function getStats(): array
    {
        return [
            Stat::make('Published Posts', Post::query()->published()->count())
                ->description('Blog articles live')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary'),
            Stat::make('Enquiries', Enquiry::query()->count())
                ->description('Contact form submissions')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('success'),
        ];
    }
}
