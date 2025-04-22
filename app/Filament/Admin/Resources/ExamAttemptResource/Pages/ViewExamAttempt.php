<?php

namespace App\Filament\Admin\Resources\ExamAttemptResource\Pages;

use App\Filament\Admin\Resources\ExamAttemptResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewExamAttempt extends ViewRecord
{
    protected static string $resource = ExamAttemptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
