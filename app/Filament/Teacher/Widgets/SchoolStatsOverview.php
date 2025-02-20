<?php

namespace App\Filament\Teacher\Widgets;

use App\Models\ExamAttempt;
use App\Models\ExamResponse;
use App\Models\QuestionBank;
use App\Models\QuestionPack;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class SchoolStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Siswa Terdaftar', User::whereSchoolId(Auth::user()->school_id)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->url(route('filament.teacher.resources.students.index')),
            Stat::make('Total Percobaan', ExamAttempt::whereHas('user', function ($query) {
                $query->whereSchoolId(Auth::user()->school_id);
            })->count())
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->url(route('filament.teacher.resources.students.index')),
            Stat::make('Jawaban Tersimpan', '1000+')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->url(route('filament.teacher.resources.students.index')),
        ];
    }
}
