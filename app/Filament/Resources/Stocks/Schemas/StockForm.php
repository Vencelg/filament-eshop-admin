<?php

namespace App\Filament\Resources\Stocks\Schemas;

use App\Models\Product;
use App\Models\Variant;
use Filament\Forms\Components\MorphToSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StockForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                Select::make('outlet_id')
                    ->relationship('outlet', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                MorphToSelect::make('stockable')
                    ->types([
                        MorphToSelect\Type::make(Variant::class)
                            ->titleAttribute('code'),
                        MorphToSelect\Type::make(Product::class)
                            ->titleAttribute('name'),
                    ])
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->minValue(0),
            ]);
    }
}
