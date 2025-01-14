<?php

namespace App\Filament\Student\Widgets;

use App\Models\QuestionPack;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class DiagnosticExamEntryWidget extends Widget
{
    protected static string $view = 'filament.student.widgets.exam-entry-widget';

    protected static bool $isLazy = false;

    protected static ?int $sort = 2;

    public string $title = 'Fluidiatest Diagnostic Test';

    public $clientUrl;

    public static function canView(): bool
    {
        return (new self())->getExams()->count() > 0;
    }

    public function mount()
    {
        $this->clientUrl = config('app.test-client.url');
    }

    public function getUser()
    {
        return Auth::user();
    }

    public function getExams()
    {
        return QuestionPack::all()->where('is_active', true)->where('is_multi_tier', true);
    }
}
