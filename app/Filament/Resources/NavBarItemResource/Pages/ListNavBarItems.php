<?php

namespace App\Filament\Resources\NavBarItemResource\Pages;

use App\Filament\Resources\NavBarItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavBarItems extends ListRecords
{
    protected static string $resource = NavBarItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
