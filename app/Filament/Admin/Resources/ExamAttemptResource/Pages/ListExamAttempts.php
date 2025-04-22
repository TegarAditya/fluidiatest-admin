<?php

namespace App\Filament\Admin\Resources\ExamAttemptResource\Pages;

use App\Filament\Admin\Resources\ExamAttemptResource;
use App\Models\QuestionPack;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Colors\Color;

class ListExamAttempts extends ListRecords
{
    protected static string $resource = ExamAttemptResource::class;

    protected static ?string $title = 'Daftar Hasil Uji';

    public function getTabs(): array
    {
        $tabItems = QuestionPack::withCount('examAttempts')
            ->get()
            ->map(function ($item) {
            return Tab::make($item->code)
                ->badge(fn() => $item->exam_attempts_count)
                ->modifyQueryUsing(fn($query) => $query->where('question_pack_id', $item->id));
            });

        return [...$tabItems];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('export')
                ->label('Unduh CSV')
                ->icon('heroicon-o-table-cells')
                ->color(Color::Green),
        ];
    }
}
