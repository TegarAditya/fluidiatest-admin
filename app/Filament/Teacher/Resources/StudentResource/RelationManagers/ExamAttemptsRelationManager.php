<?php

namespace App\Filament\Teacher\Resources\StudentResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamAttemptsRelationManager extends RelationManager
{
    protected static string $relationship = 'examAttempts';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('attempt_id')
            ->columns([
                Tables\Columns\TextColumn::make('exam.code')
                    ->label('Paket Soal')
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
                //
            ])
            ->headerActions([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Lihat Hasil')
                    ->button()
                    ->icon('heroicon-o-eye')
                    ->color('info')
                    ->url(fn($record) => config('app.test-client.url') . '/result/' . $record->attempt_id, true)
            ])
            ->bulkActions([
                //
            ]);
    }
}
