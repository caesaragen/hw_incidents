<?php

namespace App\Filament\Resources\ConservationAreaResource\Pages;

use App\Filament\Resources\ConservationAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConservationAreas extends ListRecords
{
    protected static string $resource = ConservationAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
