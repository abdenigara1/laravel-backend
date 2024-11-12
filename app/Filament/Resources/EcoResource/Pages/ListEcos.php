<?php

namespace App\Filament\Resources\EcoResource\Pages;

use App\Filament\Resources\EcoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEcos extends ListRecords
{
    protected static string $resource = EcoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
