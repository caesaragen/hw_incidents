<?php

namespace App\Filament\Resources\ObResource\Pages;

use App\Filament\Resources\ObResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOb extends EditRecord
{
    protected static string $resource = ObResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
