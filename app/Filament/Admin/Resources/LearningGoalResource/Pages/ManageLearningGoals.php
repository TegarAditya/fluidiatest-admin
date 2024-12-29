<?php

namespace App\Filament\Admin\Resources\LearningGoalResource\Pages;

use App\Filament\Admin\Resources\LearningGoalResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLearningGoals extends ManageRecords
{
    protected static string $resource = LearningGoalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
