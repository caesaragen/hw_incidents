<?php

namespace App\Filament\Resources\ObResource\Pages;

use App\Filament\Resources\ObResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObs extends ListRecords
{
    protected static string $resource = ObResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
