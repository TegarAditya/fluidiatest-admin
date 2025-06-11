<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ExamAttemptResource\Pages;
use App\Models\ExamAttempt;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ExamAttemptResource extends Resource
{
    protected static ?string $model = ExamAttempt::class;

    protected static ?string $modelLabel = 'Hasil Ujian';

    protected static bool $isDiscovered = false;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Data Hasil';

    protected static ?string $navigationLabel = 'Rekap Hasil';

    protected static ?string $title = 'Daftar Hasil Uji';

    public function getBreadcrumbs(): array
    {
        return ['Data Hasil', 'Rekap Hasil'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated([10, 25, 50, 100, 'all'])
            ->defaultPaginationPageOption(10)
            ->columns([
                ...self::getCommonColumns(),
                ...self::getScoreColumn(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    private static function getCommonColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('user.name')
                ->label('Nama Peserta')
                ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('user.email')
                ->label('Email Peserta')
                ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('exam.code')
                ->label('Nama Ujian')
                ->sortable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('attempt_id')
                ->label('ID Ujian')
                ->limit(10)
                ->tooltip('Klik untuk menyalin ID Ujian')
                ->copyable()
                ->searchable()
                ->toggleable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Tanggal Ujian')
                ->sortable()
                ->searchable()
                ->toggleable(),
        ];
    }

    private static function getScoreColumn(): array
    {
        return [
            Tables\Columns\TextColumn::make('total_score')
                ->label('Jumlah Skor'),
        ];
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
            'index' => Pages\ListExamAttempts::route('/'),
            'create' => Pages\CreateExamAttempt::route('/create'),
            'view' => Pages\ViewExamAttempt::route('/{record}'),
            'edit' => Pages\EditExamAttempt::route('/{record}/edit'),
        ];
    }

    public static function canView(Model $record): bool
    {
        return false;
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }
}
