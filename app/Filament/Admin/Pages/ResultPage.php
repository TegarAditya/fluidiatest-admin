<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class ResultPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Data Hasil';

    protected static ?string $navigationLabel = 'Rekap Hasil';

    protected static ?string $title = 'Rekap Hasil (WIP)';

    protected static string $view = 'filament.admin.pages.result-page';
}
