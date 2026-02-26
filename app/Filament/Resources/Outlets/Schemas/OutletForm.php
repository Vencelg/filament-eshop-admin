<?php

namespace App\Filament\Resources\Outlets\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OutletForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('phone_contact')
                    ->required()
                    ->tel(),
                TextInput::make('email_contact')
                    ->required()
                    ->email(),
            ]);
    }
}
