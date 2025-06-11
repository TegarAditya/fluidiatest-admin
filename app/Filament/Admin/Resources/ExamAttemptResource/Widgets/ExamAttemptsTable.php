<?php

namespace App\Filament\Admin\Resources\ExamAttemptResource\Widgets;

use App\Models\ExamAttempt;
use App\Models\QuestionPack;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\TableWidget as BaseWidget;

class ExamAttemptsTable extends BaseWidget
{
    use InteractsWithPageFilters;

    protected ?string $examId;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        $this->examId = !is_null($this->filters['question_pack_id'] ?? null)
            ? $this->filters['question_pack_id']
            : QuestionPack::query()->first()?->id;

        return $table
            ->query(
                ExamAttempt::query()->whereQuestionPackId($this->examId)
            )
            ->heading(null)
            ->paginated([10, 25, 50, 100, 'all'])
            ->defaultPaginationPageOption(10)
            ->columns([
                ...self::getCommonColumns(),
                ...self::getScoreColumn(),
            ])
            ->filters([
                //
            ]);
    }

    private static function getCommonColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('user.name')
                ->label('Nama Peserta')
                ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('user.email')
                ->label('Email Peserta')
                ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('exam.code')
                ->label('Nama Ujian')
                ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('attempt_id')
                ->label('ID Ujian')
                ->limit(10)
                ->tooltip('Klik untuk menyalin ID Ujian')
                ->copyable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Tanggal Ujian')
                ->sortable()
                ->searchable()
                ->toggleable(),
        ];
    }

    private static function getScoreColumn(): array
    {
        return [
            Tables\Columns\TextColumn::make('total_score')
                ->label('Jumlah Skor'),
        ];
    }
}
