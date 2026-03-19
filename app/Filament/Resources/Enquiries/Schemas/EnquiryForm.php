<?php

namespace App\Filament\Resources\Enquiries\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EnquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->required()
                    ->maxLength(255)
                    ->disabled(),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->disabled(),
                TextInput::make('phone')
                    ->tel()
                    ->maxLength(255)
                    ->disabled(),
                TextInput::make('country')
                    ->maxLength(255)
                    ->disabled(),
                TextInput::make('enquiry_type')
                    ->maxLength(255)
                    ->disabled(),
                TextInput::make('preferred_language')
                    ->maxLength(255)
                    ->disabled(),
                Textarea::make('message')
                    ->columnSpanFull()
                    ->disabled(),
            ]);
    }
}
