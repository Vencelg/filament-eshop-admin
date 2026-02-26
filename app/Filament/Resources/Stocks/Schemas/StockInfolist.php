<?php

namespace App\Filament\Resources\Stocks\Schemas;

use App\Models\Stock;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StockInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('code'),
                TextEntry::make('outlet.name'),
                TextEntry::make('stockable_type')
                    ->label('Type')
                    ->formatStateUsing(fn (string $state): string => class_basename($state)),
                TextEntry::make('stockable_id')
                    ->label('Stockable ID'),
                TextEntry::make('quantity'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Stock $record): bool => $record->trashed()),
            ]);
    }
}
