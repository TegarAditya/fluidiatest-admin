<?php

namespace App\Filament\Admin\Pages;

use App\Models\ExamAttempt;
use App\Models\QuestionPack;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Resources\Components\Tab;
use Filament\Resources\Concerns\HasTabs;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ResultPage extends Page implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;
    use HasTabs;

    protected static ?string $slug = 'results';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Data Hasil';

    protected static ?string $navigationLabel = 'Rekap Hasil GDOCS';

    protected static ?string $title = 'Daftar Hasil Uji';

    protected static string $view = 'filament.admin.pages.result-page';

    public function getBreadcrumbs(): array
    {
        return ['Data Hasil', 'Rekap Hasil'];
    }

    public function getTabs(): array
    {
        $tabItems = QuestionPack::query()
            ->get()
            ->map(function ($item) {
                return Tab::make($item->code)
                    ->badge(fn() => $item->examAttempts()->count());
            });

        return [...$tabItems];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(ExamAttempt::query())
            ->paginated([10, 25, 50, 100, 'all'])
            ->defaultPaginationPageOption(10)
            ->columns([
                ...self::getCommonColumns(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Ujian')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
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
        ];
    }
}
