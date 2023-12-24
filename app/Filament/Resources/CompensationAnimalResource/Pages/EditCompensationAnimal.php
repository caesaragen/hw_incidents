<?php

namespace App\Filament\Resources\CompensationAnimalResource\Pages;

use App\Filament\Resources\CompensationAnimalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompensationAnimal extends EditRecord
{
    protected static string $resource = CompensationAnimalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
