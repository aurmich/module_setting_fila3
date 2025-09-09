<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('test')
                ->action(function () {
                    /** @var \Modules\Setting\Models\DatabaseConnection|null $record */
                    $record = $this->record;
                    $record?->testConnection();
                })
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }

    protected function afterSave(): void
    {
        /** @var \Modules\Setting\Models\DatabaseConnection|null $record */
        $record = $this->record;
        
        if ($record && 'active' === $record->status) {
            $record->testConnection();
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
