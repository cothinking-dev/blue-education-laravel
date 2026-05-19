<?php

namespace App\Filament\Resources\Redirects\Schemas;

use App\Models\Redirect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rule;

class RedirectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('from_path')
                    ->label('From path')
                    ->helperText('The old URL path on the site, e.g. /old-page. Leading slash is normalised automatically.')
                    ->required()
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn (?string $state): string => Redirect::normalisePath((string) $state))
                    ->rule(fn (?Redirect $record) => Rule::unique('redirects', 'from_path')->ignore($record?->id)),

                TextInput::make('to_path')
                    ->label('To path / URL')
                    ->helperText('Where to send the visitor. Absolute URLs (https://…) and relative paths (/new-page) both work.')
                    ->required()
                    ->maxLength(2048),

                Select::make('status_code')
                    ->label('Status code')
                    ->options([
                        301 => '301 — Moved permanently (recommended for SEO)',
                        302 => '302 — Temporary redirect',
                        307 => '307 — Temporary redirect (preserves method)',
                        308 => '308 — Permanent redirect (preserves method)',
                    ])
                    ->default(301)
                    ->required(),

                Toggle::make('enabled')
                    ->label('Active')
                    ->default(true),

                TextInput::make('source')
                    ->label('Source')
                    ->helperText('Where this redirect came from, e.g. wix-import, manual.')
                    ->maxLength(255),

                Textarea::make('notes')
                    ->columnSpanFull()
                    ->rows(3),
            ]);
    }
}
