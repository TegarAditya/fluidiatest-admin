<?php

namespace App\Filament\Admin\Widgets;

use App\Models\QuestionBank;
use App\Models\QuestionPack;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TestOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pengguna', User::count())
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Total Test', QuestionPack::count())
                ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('Total Pertanyaan', QuestionBank::count())
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
