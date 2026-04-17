<?php

namespace App\Filament\Resources\Enquiries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EnquiryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Details')
                    ->schema([
                        TextEntry::make('full_name'),
                        TextEntry::make('email'),
                        TextEntry::make('phone')
                            ->default('—'),
                        TextEntry::make('country')
                            ->default('—'),
                        TextEntry::make('enquiry_type')
                            ->badge(),
                        TextEntry::make('status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'new' => 'danger',
                                'read' => 'warning',
                                'replied' => 'success',
                                default => 'gray',
                            }),
                        TextEntry::make('read_at')
                            ->dateTime()
                            ->placeholder('—'),
                    ])
                    ->columns(2),
                Section::make('Message')
                    ->schema([
                        TextEntry::make('message')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
