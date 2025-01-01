<?php

namespace App\Filament\Student\Widgets;

use App\Models\QuestionPack;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class ExamEntryWidget extends Widget
{
    protected static string $view = 'filament.student.widgets.exam-entry-widget';

    protected static bool $isLazy = false;

    public function getUser()
    {
        return Auth::user();
    }

    public function getExams()
    {
        return QuestionPack::all()->where('is_active', true);
    }
}
