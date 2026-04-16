<?php

namespace App\Filament\Resources\Partners\Schemas;

use App\Enums\PartnerCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Select::make('category')
                    ->options(PartnerCategory::class)
                    ->required()
                    ->live(),
                FileUpload::make('logo')
                    ->directory('images/partners')
                    ->visibility('public')
                    ->image()
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/webp', 'image/svg+xml'])
                    ->maxSize(2048)
                    ->visible(fn (Get $get): bool => $get('category') !== PartnerCategory::InternationalOffice->value),
                TextInput::make('url')
                    ->url()
                    ->maxLength(255),
                Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('representative')
                    ->visible(fn (Get $get): bool => $get('category') === PartnerCategory::InternationalOffice->value),
                TextInput::make('coverage')
                    ->visible(fn (Get $get): bool => $get('category') === PartnerCategory::InternationalOffice->value),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
