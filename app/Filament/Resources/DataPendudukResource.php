<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataPendudukResource\Pages;
use App\Filament\Resources\DataPendudukResource\RelationManagers;
use App\Models\DataPenduduk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataPendudukResource extends Resource
{
  protected static ?string $model = DataPenduduk::class;

  protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\TextInput::make('no_kk')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('nama_lengkap')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('alamat')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('tanggal_lahir')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('jenis_kelamin')
          ->required()
          ->maxLength(255),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('no_kk')
          ->label('No. KK')
          ->searchable(),
        Tables\Columns\TextColumn::make('nama_lengkap')
          ->label('NAMA LENGKAP')
          ->searchable(),
        Tables\Columns\TextColumn::make('alamat')
          ->label('ALAMAT')
          ->searchable(),
        Tables\Columns\TextColumn::make('tanggal_lahir')
          ->label('TANGGAL LAHIR')
          ->searchable(),
        Tables\Columns\TextColumn::make('jenis_kelamin')
          ->label('JENIS KELAMIN')
          ->searchable(),
      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
      ])
      ->bulkActions([
        Tables\Actions\BulkActionGroup::make([
          Tables\Actions\DeleteBulkAction::make(),
        ]),
      ]);
  }

  public static function getRelations(): array
  {
    return [
      //
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListDataPenduduks::route('/'),
      'create' => Pages\CreateDataPenduduk::route('/create'),
      'edit' => Pages\EditDataPenduduk::route('/{record}/edit'),
    ];
  }
}
