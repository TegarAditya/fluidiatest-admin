<?php

namespace App\Filament\Admin\Resources\QuestionPackResource\Pages;

use App\Filament\Admin\Resources\QuestionPackResource;
use App\Models\ExamAttempt;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;

class ResultQuestionPack extends Page implements HasTable
{
    use InteractsWithRecord;
    use InteractsWithTable;

    protected static string $resource = QuestionPackResource::class;

    protected static ?string $title = 'Hasil Ujian';

    protected static string $view = 'filament.admin.resources.question-pack-resource.pages.view-result';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(ExamAttempt::query()->where('question_pack_id', '=', $this->record->id))
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Nama Siswa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.school.name')
                    ->label('Sekolah')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('attempt_id')
                    ->label('ID Percobaan')
                    ->searchable()
                    ->copyable()
                    ->tooltip('Klik untuk menyalin ID Percobaan'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Submit')
                    ->sortable()
                    ->date(),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                Tables\Actions\Action::make('Lihat Hasil')
                    ->button()
                    ->icon('heroicon-o-eye')
                    ->color('info')
                    ->url(fn ($record) => config('app.test-client.url').'/result/'.$record->attempt_id, true),
            ])
            ->bulkActions([
                // ...
            ]);
    }
}
