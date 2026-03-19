<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
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
                    ->required()
                    ->maxLength(255),
                TextInput::make('role')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('photo')
                    ->disk('public')
                    ->directory('images/team')
                    ->image()
                    ->maxSize(1024),
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
                Select::make('team_type')
                    ->options([
                        'general' => 'General',
                        'legal' => 'Legal / Migration Specialist',
                        'leadership' => 'Leadership (Featured)',
                    ])
                    ->default('general')
                    ->required(),
                TextInput::make('region'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
