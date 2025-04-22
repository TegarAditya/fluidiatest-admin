<?php

namespace App\Filament\Teacher\Resources;

use App\Filament\Teacher\Resources\StudentResource\Pages;
use App\Filament\Teacher\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class StudentResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $modelLabel = 'Daftar Siswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('public_id')
                    ->label('Public ID')
                    ->disabled()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('school')
                    ->label('Sekolah')
                    ->relationship('school', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', 'student');
                })->whereSchoolId(Auth::user()->school_id);
            })
            ->columns([
                Tables\Columns\TextColumn::make('public_id')
                    ->label('Public ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('school.name')
                    ->label('Sekolah')
                    ->badge()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('has_exam_attempts')
                    ->label('Memiliki Percobaan Ujian')
                    ->query(fn (Builder $query): Builder => $query->whereHas('examAttempts')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->button(),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ExamAttemptsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'view' => Pages\ViewStudent::route('/{record}'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
