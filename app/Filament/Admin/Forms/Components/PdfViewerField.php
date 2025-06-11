<?php

namespace App\Filament\Admin\Forms\Components;

use Joaopaulolndev\FilamentPdfViewer\Forms\Components\PdfViewerField as BasePdfViewerField;
use Closure;

class PdfViewerField extends BasePdfViewerField
{
    protected string|Closure|null $disk = 's3';

    protected string $minHeight = '80svh';
}