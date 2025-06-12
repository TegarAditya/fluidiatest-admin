<?php

namespace App\Filament\Admin\Resources\QuestionPackResource\Pages;

use App\Filament\Admin\Resources\QuestionPackResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Infolists;
use Filament\Infolists\Components\TextEntry\TextEntrySize;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\FontWeight;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\HtmlString;
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
            ->columns(3)
            ->schema([
                Infolists\Components\Section::make()
                    ->columnSpan(2)
                    ->schema([
                        Infolists\Components\TextEntry::make('code')
                            ->hiddenLabel()
                            ->weight(FontWeight::Bold)
                            ->size(TextEntrySize::Large),
                        Infolists\Components\TextEntry::make('description')
                            ->hiddenLabel()
                            ->markdown()
                            ->prose()
                            ->columnSpanFull(),
                    ]),
                Infolists\Components\Section::make()
                    ->columnSpan(1)
                    ->schema([
                        Infolists\Components\TextEntry::make('duration')
                            ->label('Durasi')
                            ->inlineLabel()
                            ->getStateUsing(function () {
                                if (!$this->record->duration) {
                                    return null;
                                }
                                $duration = Carbon::parse($this->record->duration);
                                $totalMinutes = ($duration->hour * 60) + $duration->minute;
                                return $totalMinutes . ' menit';
                            }),
                        Infolists\Components\TextEntry::make('is_active')
                            ->label('Status')
                            ->inlineLabel()
                            ->getStateUsing(fn() => $this->record->is_active ? 'Aktif' : 'Tidak Aktif'),
                        Infolists\Components\TextEntry::make('is_multi_tier')
                            ->label('Tingkat')
                            ->inlineLabel()
                            ->getStateUsing(fn() => $this->record->is_multi_tier ? 'Multi Tier' : 'Single Tier'),
                        Infolists\Components\TextEntry::make('created_at')
                            ->label('Tanggal Dibuat')
                            ->inlineLabel()
                            ->dateTime(timezone: 'Asia/Jakarta', format: 'd M Y H:i'),
                    ]),
                Infolists\Components\Section::make()
                    ->columns(1)
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
            'reasons',
        ])->get();

        foreach ($questionBanks as $question) {
            $columnArray[] = Infolists\Components\Section::make()
                ->columnSpanFull()
                ->schema([
                    Infolists\Components\TextEntry::make('code')
                        ->getStateUsing(fn() => 'Soal ' . $question->code)
                        ->weight(FontWeight::Bold)
                        ->size(TextEntrySize::Medium)
                        ->hiddenLabel(),
                    Infolists\Components\TextEntry::make('question')
                        ->getStateUsing(fn() => Str::markdown($question->question))
                        ->html()
                        ->extraAttributes(['class' => 'prose prose-img:max-h-[400px]'])
                        ->hiddenLabel(),
                    Infolists\Components\TextEntry::make('options')
                        ->label('Pilihan Jawaban')
                        ->getStateUsing(fn() => $this->formatOptions($question->options))
                        ->html(),
                    Infolists\Components\TextEntry::make('reasons')
                        ->label('Pilihan Alasan')
                        ->getStateUsing(fn() => $this->formatOptions($question->reasons))
                        ->html()
                        ->visible(fn() => $this->record->is_multi_tier),
                ]);
        }

        return $columnArray;
    }

    public function formatOptions(Collection $options): HtmlString
    {
        $isContainImages = $options->contains(function ($option) {
            return Str::contains($option->option ?? $option->reason, ['![', '<img']);
        });

        $optionsList = $options->map(function ($option) {
            $text = Str::markdown($option->option ?? $option->reason);
            return "<div class='flex gap-2 prose prose-sm dark:text-white'>{$option->label}. {$text}</div>";
        })->implode('');

        if ($isContainImages) {
            $optionsList = "<div class='grid grid-rows-3 grid-flow-col gap-2'>{$optionsList}</div>";
        }

        return new HtmlString($optionsList);
    }
}
