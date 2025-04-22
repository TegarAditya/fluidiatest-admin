<?php

namespace App\Filament\Imports;

use App\Models\User;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class TeacherImporter extends Importer
{
    protected static ?string $model = User::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['string', 'max:255']),
            ImportColumn::make('email')
                ->requiredMapping()
                ->rules(['email', 'max:255']),
            ImportColumn::make('password')
                ->requiredMapping()
                ->sensitive()
                ->rules(['string', 'max:255']),
            ImportColumn::make('school')
                ->relationship(resolveUsing: 'code')
                ->requiredMapping(),
        ];
    }

    public function resolveRecord(): ?User
    {
        $user = User::firstOrNew([
            'email' => $this->data['email'],
        ]);

        if ($user->exists) {
            $user->assignRole('teacher');
        }

        return $user;
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your student import has completed and '.number_format($import->successful_rows).' '.str('row')->plural($import->successful_rows).' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to import.';
        }

        return $body;
    }
}
