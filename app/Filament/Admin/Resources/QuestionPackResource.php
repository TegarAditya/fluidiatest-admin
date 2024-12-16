<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\QuestionPackResource\Pages;
use App\Filament\Admin\Resources\QuestionPackResource\RelationManagers;
use App\Models\QuestionPack;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionPackResource extends Resource
{
    protected static ?string $model = QuestionPack::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Master Soal';

    protected static ?string $navigationLabel = 'Paket Soal';

    protected static ?string $modelLabel = 'Paket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('code')
                    ->label('Kode')
                    ->placeholder('Masukkan kode paket soal')
                    ->required()
                    ->maxLength(255),
                Forms\Components\ToggleButtons::make('is_active')
                    ->label('Status')
                    ->required()
                    ->options([
                        1 => 'Aktif',
                        0 => 'Tidak Aktif',
                    ])
                    ->default(false)
                    ->inline(),
                Forms\Components\MarkdownEditor::make('description')
                    ->label('Deskripsi')
                    ->default('Masukkan deskripsi paket soal')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestionPacks::route('/'),
            'create' => Pages\CreateQuestionPack::route('/create'),
            'edit' => Pages\EditQuestionPack::route('/{record}/edit'),
        ];
    }
}
