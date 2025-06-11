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
            Actions\Action::make('result')
                ->button()
                ->label('Lihat Hasil')
                ->url(fn () => route('filament.admin.resources.question-packs.result', $this->record)),
            Actions\DeleteAction::make(),
        ];
    }

    public function renderKatex(): void
    {
        $this->dispatch('render-katex');
    }
}
