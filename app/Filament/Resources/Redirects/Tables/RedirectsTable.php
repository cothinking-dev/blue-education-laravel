<?php

namespace App\Filament\Resources\Redirects\Tables;

use App\Models\Redirect;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class RedirectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('hits', 'desc')
            ->columns([
                TextColumn::make('from_path')
                    ->label('From')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->wrap(),

                TextColumn::make('to_path')
                    ->label('To')
                    ->searchable()
                    ->copyable()
                    ->wrap()
                    ->limit(60),

                TextColumn::make('status_code')
                    ->label('Code')
                    ->badge()
                    ->sortable(),

                IconColumn::make('enabled')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('hits')
                    ->numeric()
                    ->sortable()
                    ->alignEnd(),

                TextColumn::make('last_hit_at')
                    ->label('Last hit')
                    ->dateTime()
                    ->since()
                    ->sortable()
                    ->placeholder('Never'),

                TextColumn::make('source')
                    ->badge()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('enabled')
                    ->label('Active'),

                SelectFilter::make('status_code')
                    ->options([
                        301 => '301',
                        302 => '302',
                        307 => '307',
                        308 => '308',
                    ]),

                SelectFilter::make('source')
                    ->options(fn () => Redirect::query()
                        ->whereNotNull('source')
                        ->distinct()
                        ->pluck('source', 'source')
                        ->all()),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
