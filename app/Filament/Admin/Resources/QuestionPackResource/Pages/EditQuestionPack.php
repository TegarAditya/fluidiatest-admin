<?php

namespace App\Filament\Admin\Resources\QuestionPackResource\Pages;

use App\Filament\Admin\Resources\QuestionPackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuestionPack extends EditRecord
{
    protected static string $resource = QuestionPackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
