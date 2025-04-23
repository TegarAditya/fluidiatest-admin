<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\QuestionBankResource\Pages;
use App\Filament\Admin\Resources\QuestionBankResource\RelationManagers;
use App\Models\QuestionBank;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuestionBankResource extends Resource
{
    protected static ?string $model = QuestionBank::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationGroup = 'Data Soal';

    protected static ?string $navigationLabel = 'Bank Soal';

    protected static ?string $modelLabel = 'Soal';

    protected static ?string $recordTitleAttribute = 'code';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->label('Kode')
                    ->columnSpanFull()
                    ->required()
                    ->placeholder('Contoh: 1A, 1B, 2A...')
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('question')
                    ->label('Pertanyaan')
                    ->required()
                    ->fileAttachmentsDisk('s3')
                    ->fileAttachmentsDirectory('uploads')
                    ->hiddenOn(['view'])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->label('Kode')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('question')
                    ->label('Pertanyaan')
                    ->limit(50),
                Tables\Columns\TextColumn::make('is_option_available')
                    ->label('Opsi')
                    ->default(fn ($record) => count($record->options) > 0)
                    ->formatStateUsing(fn ($state) => $state ? 'Tersedia' : 'Tidak Tersedia')
                    ->badge()
                    ->color(fn ($state) => $state ? 'info' : 'danger'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\OptionsRelationManager::class,
            RelationManagers\ReasonsRelationManager::class,
            RelationManagers\FeedbacksRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestionBanks::route('/'),
            'create' => Pages\CreateQuestionBank::route('/create'),
            'edit' => Pages\EditQuestionBank::route('/{record}/edit'),
            'view' => Pages\ViewQuestionBank::route('/{record}'),
        ];
    }
}
