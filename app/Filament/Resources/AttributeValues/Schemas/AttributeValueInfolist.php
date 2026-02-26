<?php

namespace App\Filament\Resources\AttributeValues\Schemas;

use App\Models\AttributeValue;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AttributeValueInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('attribute.name')
                    ->label('Attribute'),
                TextEntry::make('code'),
                TextEntry::make('value_name'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (AttributeValue $record): bool => $record->trashed()),
            ]);
    }
}
