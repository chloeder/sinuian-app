<?php

namespace App\Filament\Resources\DataPendudukResource\Pages;

use App\Filament\Resources\DataPendudukResource;
use App\Models\DataPenduduk;
use Carbon\Carbon;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Model;

class ListDataPenduduks extends ListRecords
{
  protected static string $resource = DataPendudukResource::class;

  protected function getHeaderActions(): array
  {
    return [
      ImportAction::make()
        ->label('Import Data Penduduk')
        ->fields([
          ImportField::make('no_kk')
            ->required()
            ->label('No. KK'),
          ImportField::make('nik')
            ->required()
            ->label('NIK'),
          ImportField::make('nama_lengkap')
            ->required()
            ->label('Nama Lengkap'),
          ImportField::make('alamat')
            ->required()
            ->label('Alamat'),
          ImportField::make('tanggal_lahir')
            ->required()
            ->label('Tanggal Lahir'),
          ImportField::make('jenis_kelamin')
            ->required()
            ->label('Jenis Kelamin'),
        ]),
      Actions\CreateAction::make(),
    ];
  }
}
