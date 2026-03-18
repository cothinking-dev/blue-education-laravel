<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                TextInput::make('photo'),
                Textarea::make('bio')
                    ->columnSpanFull(),
                TextInput::make('credentials'),
                TextInput::make('languages'),
                Select::make('section')
                    ->options([
                        'Australia' => 'Australia',
                        'International' => 'International',
                        'Partner' => 'Partner',
                    ])
                    ->required(),
                TextInput::make('region'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
