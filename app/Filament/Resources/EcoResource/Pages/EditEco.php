<?php

namespace App\Filament\Resources\EcoResource\Pages;

use App\Filament\Resources\EcoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEco extends EditRecord
{
    protected static string $resource = EcoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
