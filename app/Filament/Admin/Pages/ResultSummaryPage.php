<?php

namespace App\Filament\Admin\Pages;

use App\Filament\Admin\Resources\ExamAttemptResource\Widgets\ExamAttemptsTable;
use App\Models\QuestionPack;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Pages\Page;
use Filament\Support\Colors\Color;

class ResultSummaryPage extends Page
{
    use HasFiltersForm;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Data Hasil';

    protected static ?string $navigationLabel = 'Rekap Hasil';

    protected static ?string $title = 'Daftar Hasil Uji';

    protected static string $view = 'filament.admin.pages.result-summary-page';

    public function getBreadcrumbs(): array
    {
        return ['Data Hasil', 'Rekap Hasil'];
    }

    protected function getHeaderActions(): array
    {
        return [
             Actions\Action::make('export')
                ->label('Unduh CSV')
                ->icon('heroicon-o-table-cells')
                ->color(Color::Green),
        ];
    }

    public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('question_pack_id')
                    ->label('Pilih Kode Soal: ')
                    ->inlineLabel()
                    ->options(QuestionPack::all()->pluck('code', 'id'))
                    ->default(function () {
                        $exams = QuestionPack::query()->first();

                        return $exams ? $exams->id : null;
                    })
                    ->reactive()
                    ->selectablePlaceholder(false)
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->columnSpan(2),
            ]);
    }

    public function getColumns(): int | string | array
    {
        return 2;
    }

    protected function getWidgets(): array
    {
        return [
            ExamAttemptsTable::class,
        ];
    }
}
