<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('question')
                    ->required(),
                Textarea::make('answer')
                    ->required()
                    ->maxLength(5000)
                    ->columnSpanFull(),
                Select::make('category')
                    ->options([
                        'education' => 'Education',
                        'migration' => 'Migration',
                        'career' => 'Career',
                        'support' => 'Support',
                        'fees' => 'Fees',
                    ])
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
