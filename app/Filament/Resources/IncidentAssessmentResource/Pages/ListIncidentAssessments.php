<?php

namespace App\Filament\Resources\IncidentAssessmentResource\Pages;

use App\Filament\Resources\IncidentAssessmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIncidentAssessments extends ListRecords
{
    protected static string $resource = IncidentAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
