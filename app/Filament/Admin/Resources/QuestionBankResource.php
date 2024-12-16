<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\QuestionBankResource\Pages;
use App\Filament\Admin\Resources\QuestionBankResource\RelationManagers;
use App\Models\QuestionBank;
use App\Services\MarkdownService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Symfony\Component\Console\Helper\TableStyle;

class QuestionBankResource extends Resource
{
    protected static ?string $model = QuestionBank::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-plus';

    protected static ?string $navigationGroup = 'Master Soal';

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
                    ->hiddenOn(['view'])
                    ->columnSpanFull(),
                Forms\Components\Section::make()
                    ->visibleOn(['view'])
                    ->schema([
                        Forms\Components\Placeholder::make('preview')
                            ->label('Preview')
                            ->content(fn($get) => $get('question') ? new HtmlString(self::getParsedQuestionPreview($get('question'))) : 'Tidak ada pertanyaan'),
                    ])
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
                    ->default(fn($record) => count($record->options) > 0)
                    ->formatStateUsing(fn($state) => $state ? 'Tersedia' : 'Tidak Tersedia')
                    ->badge()
                    ->color(fn($state) => $state ? 'info' : 'danger'),
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
        ];
    }

    protected static function getParsedQuestionPreview(?string $question): string
    {
        if (!$question) {
            return 'Tidak ada pertanyaan';
        }

        $parsedown = new \Parsedown();
        $markdownService = new MarkdownService($parsedown);
        $parsed = $markdownService->parse($question);
        
        return $parsed;
    }
}
