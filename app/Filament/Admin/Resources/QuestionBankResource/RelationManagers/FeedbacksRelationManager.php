<?php

namespace App\Filament\Admin\Resources\QuestionBankResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class FeedbacksRelationManager extends RelationManager
{
    protected static string $relationship = 'feedbacks';

    protected static ?string $title = 'Saran';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('score')
                    ->label('Skor')
                    ->required()
                    ->options([
                        4 => '4',
                        3 => '3',
                        2 => '2',
                        1 => '1',
                    ])
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('feedback')
                    ->label('Saran')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('score')
            ->columns([
                Tables\Columns\TextColumn::make('score')
                    ->label('Skor')
                    ->sortable(),
                Tables\Columns\TextColumn::make('feedback')
                    ->label('Saran')
                    ->html()
                    ->extraAttributes(['x-init' => 'window.renderKatexMath()'])
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
