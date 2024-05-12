<?php

namespace App\Filament\Resources\WajibLaporResource\Pages;

use App\Filament\Resources\WajibLaporResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWajibLapor extends EditRecord
{
    protected static string $resource = WajibLaporResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
