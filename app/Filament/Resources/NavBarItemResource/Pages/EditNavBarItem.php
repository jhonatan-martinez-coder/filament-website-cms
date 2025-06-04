<?php

namespace App\Filament\Resources\NavBarItemResource\Pages;

use App\Filament\Resources\NavBarItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNavBarItem extends EditRecord
{
    protected static string $resource = NavBarItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
