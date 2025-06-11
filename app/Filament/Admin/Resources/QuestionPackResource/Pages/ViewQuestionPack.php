<?php

namespace App\Filament\Admin\Resources\QuestionPackResource\Pages;

use App\Filament\Admin\Resources\QuestionPackResource;
use Filament\Actions;
use Filament\Infolists;
use Filament\Infolists\Components\TextEntry\TextEntrySize;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\FontWeight;
use Illuminate\Support\Str;

class ViewQuestionPack extends ViewRecord
{
    protected static string $resource = QuestionPackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('result')
                ->button()
                ->label('Lihat Hasil')
                ->url(fn() => route('filament.admin.resources.question-packs.result', $this->record)),
            Actions\EditAction::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make()
                    ->schema([
                        Infolists\Components\TextEntry::make('code')
                            ->hiddenLabel()
                            ->weight(FontWeight::Bold)
                            ->size(TextEntrySize::Large)
                            ->columnSpanFull(),
                        Infolists\Components\TextEntry::make('description')
                            ->hiddenLabel()
                            ->markdown()
                            ->columnSpanFull(),
                    ]),
                Infolists\Components\Section::make()
                    ->schema([
                        ...$this->getItemInfolists(),
                    ]),
            ]);
    }

    public function getItemInfolists(): array
    {
        $columnArray = [];

        $questionBanks = $this->record->questions()->with([
            'options',
            'feedbacks',
            'reasons',
        ])->get();

        foreach ($questionBanks as $question) {
            $columnArray[] = Infolists\Components\Section::make()
                ->schema([
                    Infolists\Components\TextEntry::make('code')
                        ->getStateUsing(fn() => 'Soal ' . $question->code)
                        ->weight(FontWeight::Bold)
                        ->size(TextEntrySize::Medium)
                        ->hiddenLabel(),
                    Infolists\Components\TextEntry::make('question')
                        ->getStateUsing(fn() => Str::markdown($question->question))
                        ->html()
                        ->extraAttributes([
                            'class' => 'prose',
                        ])
                        ->hiddenLabel(),
                ]);
        }

        return $columnArray;
    }
}
