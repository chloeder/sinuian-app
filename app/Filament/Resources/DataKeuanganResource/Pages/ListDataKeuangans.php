<?php

namespace App\Filament\Resources\DataKeuanganResource\Pages;

use App\Filament\Resources\DataKeuanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataKeuangans extends ListRecords
{
    protected static string $resource = DataKeuanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
