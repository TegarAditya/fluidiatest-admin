<?php

namespace App\Filament\Admin\Resources\QuestionPackResource\Pages;

use App\Filament\Admin\Resources\QuestionPackResource;
use App\Models\ExamAttempt;
use App\Models\User;
use Filament\Resources\Pages\Page;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;

class ResultQuestionPack extends Page implements HasTable
{
    use InteractsWithTable;
    
    protected static string $resource = QuestionPackResource::class;

    protected static string $view = 'filament.admin.resources.question-pack-resource.pages.view-result';

    public function table(Table $table): Table
    {
        return $table
            ->query(ExamAttempt::query())
            ->columns([
                Tables\Columns\TextColumn::make('student.name')
                    ->default(fn ($record) => User::find($record->user_id)->name)
                    ->label('Nama Siswa'),
                Tables\Columns\TextColumn::make('student.email')
                    ->default(fn ($record) => User::find($record->user_id)->email)
                    ->label('Email'),
                Tables\Columns\TextColumn::make('attempt_id')
                    ->label('ID Percobaan'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }
}
