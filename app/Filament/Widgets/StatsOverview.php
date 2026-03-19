<?php

namespace App\Filament\Widgets;

use App\Models\Enquiry;
use App\Models\Post;
use App\Models\Subscriber;
use App\Models\TeamMember;
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
            Stat::make('Subscribers', Subscriber::query()->count())
                ->description('Newsletter signups')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('info'),
            Stat::make('Team Members', TeamMember::query()->count())
                ->description('Across all regions')
                ->descriptionIcon('heroicon-m-users')
                ->color('warning'),
        ];
    }
}
