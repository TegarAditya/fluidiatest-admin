<?php

namespace App\Filament\Admin\Resources\QuestionBankResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReasonsRelationManager extends RelationManager
{
    protected static string $relationship = 'reasons';

    protected static ?string $modelLabel = 'Alasan';

    protected static ?string $title = 'Alasan';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('label')
                    ->label('Label')
                    ->placeholder('Contoh: A, B, C...')
                    ->options([
                        'A' => 'A',
                        'B' => 'B',
                        'C' => 'C',
                        'D' => 'D',
                        'E' => 'E',
                    ])
                    ->required(),
                Forms\Components\Select::make('is_correct')
                    ->label('Benar?')
                    ->options([
                        0 => 'Salah',
                        1 => 'Benar',
                    ])
                    ->default(0)
                    ->required(),
                Forms\Components\MarkdownEditor::make('reason')
                    ->label('Alasan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('label')
            ->columns([
                Tables\Columns\TextColumn::make('label')
                    ->label('Label')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reason')
                    ->label('Alasan')
                    ->limit(50),
                Tables\Columns\TextColumn::make('is_correct')
                    ->label('Benar?')
                    ->formatStateUsing(fn ($state) => $state ? 'Benar' : 'Salah')
                    ->color(fn(string $state): string => match ($state) {
                        '1' => 'info',
                        '0' => 'danger',
                    })
                    ->badge(),
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
