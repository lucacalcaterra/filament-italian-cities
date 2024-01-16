<?php

namespace Lucacalcaterra\FilamentItalianCities\Filament\Resources;


use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteBulkAction;
use Lucacalcaterra\FilamentItalianCities\Models\City;
use Lucacalcaterra\FilamentItalianCities\Filament\Resources\CityResource\Pages\EditCity;
use Lucacalcaterra\FilamentItalianCities\Filament\Resources\CityResource\Pages\CreateCity;
use Lucacalcaterra\FilamentItalianCities\Filament\Resources\CityResource\Pages\ListCities;

class CityResource extends Resource
{
    protected static ?string $model = City::class;

    //protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Italian Cities';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('sigla')->sortable()->label('Pr. Code'),
                TextColumn::make('den_prov')->sortable()->label('Pr. Name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ])->defaultSort('name');
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
            'index' => ListCities::route('/'),
            'create' => CreateCity::route('/create'),
            'edit' => EditCity::route('/{record}/edit'),
        ];
    }
}
