<?php

namespace App\Filament\Admin\Resources\QuestionBankResource\Pages;

use App\Filament\Admin\Resources\QuestionBankResource;
use Filament\Actions;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewQuestionBank extends ViewRecord
{
    protected static string $resource = QuestionBankResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make()
                ->requiresConfirmation()
                ->modalHeading('Hapus Soal'),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(1)
            ->schema([
                Infolists\Components\Section::make([
                    Infolists\Components\TextEntry::make('question')
                        ->hiddenLabel()
                        ->markdown()
                        ->prose()
                        ->columnSpanFull(),
                ]),
            ]);
    }
}
