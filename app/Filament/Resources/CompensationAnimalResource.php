<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompensationAnimalResource\Pages;
use App\Filament\Resources\CompensationAnimalResource\RelationManagers;
use App\Models\CompensationAnimal;
use App\Models\IncidentType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompensationAnimalResource extends Resource
{
    protected static ?string $model = CompensationAnimal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('incident_type_id')
                    ->label('Incident Type')
                    ->relationship('incidentType', 'id')
                    ->options(
                        IncidentType::all()
                            ->mapWithKeys(fn ($incident_type) => [$incident_type->id => $incident_type->name])
                            ->toArray()
                    )
                    ->required(),
                ]
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('incidentType.name')
                ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                ]
            )
            ->filters(
                [
                //
                ]
            )
            ->actions(
                [
                Tables\Actions\EditAction::make(),
                ]
            )
            ->bulkActions(
                [
                Tables\Actions\BulkActionGroup::make(
                    [
                    Tables\Actions\DeleteBulkAction::make(),
                    ]
                ),
                ]
            );
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompensationAnimals::route('/'),
            'create' => Pages\CreateCompensationAnimal::route('/create'),
            'edit' => Pages\EditCompensationAnimal::route('/{record}/edit'),
        ];
    }    
}
