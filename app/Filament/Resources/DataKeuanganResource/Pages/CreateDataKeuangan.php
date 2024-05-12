<?php

namespace App\Filament\Resources\DataKeuanganResource\Pages;

use App\Filament\Resources\DataKeuanganResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDataKeuangan extends CreateRecord
{
  protected static string $resource = DataKeuanganResource::class;

  protected function getRedirectUrl(): string
  {
    return $this->getResource()::getUrl('index');
  }
}
