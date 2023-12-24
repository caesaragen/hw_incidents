<?php

namespace App\Filament\Resources\IncidentAssessmentResource\Pages;

use App\Filament\Resources\IncidentAssessmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIncidentAssessment extends EditRecord
{
    protected static string $resource = IncidentAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
