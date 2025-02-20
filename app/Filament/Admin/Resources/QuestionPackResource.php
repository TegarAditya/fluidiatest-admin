<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\QuestionPackResource\Pages;
use App\Filament\Admin\Resources\QuestionPackResource\RelationManagers;
use App\Models\QuestionBank;
use App\Models\QuestionPack;
use App\Services\MarkdownService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class QuestionPackResource extends Resource
{
    protected static ?string $model = QuestionPack::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

    protected static ?string $navigationGroup = 'Data Soal';

    protected static ?string $navigationLabel = 'Paket Soal';

    protected static ?string $modelLabel = 'Paket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('question_pack_tabs')
                    ->columnSpanFull()
                    ->schema([
                        Forms\Components\Tabs\Tab::make('question_pack_tab_general')
                            ->label('Umum')
                            ->columns(2)
                            ->schema([
                                Forms\Components\TextInput::make('code')
                                    ->label('Kode')
                                    ->placeholder('Masukkan kode paket soal')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TimePicker::make('duration')
                                    ->label('Durasi'),
                                Forms\Components\ToggleButtons::make('is_active')
                                    ->label('Status')
                                    ->required()
                                    ->options([
                                        1 => 'Aktif',
                                        0 => 'Tidak Aktif',
                                    ])
                                    ->default(false)
                                    ->inline(),
                                Forms\Components\ToggleButtons::make('is_multi_tier')
                                    ->label('Tingkat')
                                    ->required()
                                    ->options([
                                        0 => '1 Tier',
                                        1 => '2 Tier',
                                    ])
                                    ->default(true)
                                    ->inline(),
                                Forms\Components\MarkdownEditor::make('description')
                                    ->label('Deskripsi')
                                    ->default('Masukkan deskripsi paket soal')
                                    ->fileAttachmentsDisk('s3')
                                    ->fileAttachmentsDirectory('uploads')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        Forms\Components\Tabs\Tab::make('question_add')
                            ->label('Tambah Pertanyaan')
                            ->schema([
                                Forms\Components\Repeater::make('questionPackQuestionBank')
                                    ->label('Tambah Soal')
                                    ->relationship()
                                    ->schema([
                                        Forms\Components\Select::make('question_bank_id')
                                            ->label('Soal')
                                            ->searchable()
                                            ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                            ->options(function () {
                                                $questions = QuestionBank::all()->pluck('code', 'id');

                                                return $questions;
                                            })
                                            ->live(),
                                        Forms\Components\Placeholder::make('question_ph')
                                            ->label('Pratinjau')
                                            ->visible(fn(Get $get) => $get('question_bank_id'))
                                            ->content(function (Get $get) {
                                                $question_bank = QuestionBank::find($get('question_bank_id'));

                                                return new HtmlString(parseMarkdown($question_bank->question));
                                            }),
                                    ])
                            ])
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('public_id')
                    ->label('Public ID')
                    ->copyable()
                    ->tooltip('Klik untuk menyalin Public ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('code')
                    ->label('Kode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('duration')
                    ->label('Durasi')
                    ->badge()
                    ->time(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status Aktif')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_active')
                    ->label('Status Aktif')
                    ->options([
                        1 => 'Aktif',
                        0 => 'Tidak Aktif',
                    ]),
                Tables\Filters\SelectFilter::make('is_multi_tier')
                    ->label('Tingkat')
                    ->options([
                        0 => '1 Tier',
                        1 => '2 Tier',
                    ]),
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
            'result' => Pages\ResultQuestionPack::route('/{record}/result'),
        ];
    }
}
