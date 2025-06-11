<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Forms\Components\PdfViewerField;
use App\Filament\Admin\Resources\LearningMaterialResource\Pages;
use App\Models\LearningMaterial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class LearningMaterialResource extends Resource
{
    protected static ?string $model = LearningMaterial::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Data Materi';

    protected static ?string $navigationLabel = 'Materi Belajar';

    protected static ?string $modelLabel = 'Materi';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('attachment')
                    ->label('Lampiran')
                    ->required()
                    ->disk('s3')
                    ->directory('uploads')
                    ->columnSpanFull(),
                PdfViewerField::make('attachment')
                    ->label('Pratinjau PDF')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attachment')
                    ->searchable(),
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageLearningMaterials::route('/'),
            'edit' => Pages\EditLearningMaterial::route('/{record}/edit'),
        ];
    }
}
