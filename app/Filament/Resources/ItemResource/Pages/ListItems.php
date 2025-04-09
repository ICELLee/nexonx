<?php

namespace App\Filament\Resources\ItemResource\Pages;

use App\Filament\Resources\ItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListItems extends ListRecords
{
    protected static string $resource = ItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('deleteAll')
                ->label('Alle Items löschen')
                ->color('danger')
                ->requiresConfirmation()
                ->action(fn () => \App\Models\Item::truncate()),

            Actions\ActionGroup::make([
                Actions\CreateAction::make()
                    ->label('Manuell erstellen'),
                Actions\Action::make('import')
                    ->label('TXT-Import')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->url(ItemResource::getUrl('import')),
            ])
                ->label('Erstellen')
                ->icon('heroicon-o-plus')
                ->color('warning'),
        ];
    }
}
