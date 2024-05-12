<?php

namespace App\Filament\Resources\InformasiDesaResource\Pages;

use App\Filament\Resources\InformasiDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInformasiDesa extends CreateRecord
{
  protected static string $resource = InformasiDesaResource::class;

  protected function mutateFormDataBeforeCreate(array $data): array
  {
    $data['author'] = auth()->user()->id;

    return $data;
  }

  protected function getRedirectUrl(): string
  {
    return $this->getResource()::getUrl('index');
  }
}
