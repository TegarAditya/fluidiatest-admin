<?php

namespace App\Filament\Student\Pages;

use App\Models\LearningGoal;
use Filament\Pages\Page;

class LearningOutcome extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.learning-outcome';

    protected static ?string $title = 'Learning Objective';

    public $learningPurpose;

    public function mount()
    {
        $this->learningPurpose = LearningGoal::all();
    }
}
