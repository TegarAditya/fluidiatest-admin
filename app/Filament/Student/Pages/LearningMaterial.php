<?php

namespace App\Filament\Student\Pages;

use App\Models\LearningMaterial as Material;
use Filament\Pages\Page;

class LearningMaterial extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.student.pages.learning-material';

    public $learningMaterial;

    public $s3Url;

    public function mount()
    {
        $this->learningMaterial = Material::all();

        $this->s3Url = config('filesystems.disks.s3.endpoint').'/'.config('filesystems.disks.s3.bucket');
    }
}
