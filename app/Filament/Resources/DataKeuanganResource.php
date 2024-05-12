<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataKeuanganResource\Pages;
use App\Filament\Resources\DataKeuanganResource\RelationManagers;
use App\Models\DataKeuangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataKeuanganResource extends Resource
{
  protected static ?string $model = DataKeuangan::class;

  protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\Section::make('Form Informasi Desa')
          ->description('Form untuk menambahkan informasi desa')
          ->schema([
            Forms\Components\TextInput::make('uraian')
              ->label('Uraian')
              ->required()
              ->maxLength(255),
            Forms\Components\Select::make('kategori')
              ->label('Kategori')
              ->required()
              ->options([
                'Pendapatan' => 'Pendapatan',
                'Belanja' => 'Belanja',
                'Pembiayaan' => 'Pembiayaan',
              ]),
            Forms\Components\TextInput::make('volume')
              ->label('Volume')
              ->numeric(),
            Forms\Components\TextInput::make('satuan')
              ->label('Satuan')
              ->numeric(),
            Forms\Components\TextInput::make('anggaran')
              ->label('Anggaran')
              ->required()
              ->mask(RawJs::make('$money($input)'))
              ->stripCharacters(',')
              ->numeric(),
            Forms\Components\TextInput::make('sumber_dana')
              ->label('Sumber Dana')
              ->required()
              ->maxLength(255),
          ])
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->defaultGroup('kategori')
      ->columns([
        Tables\Columns\TextColumn::make('uraian')
          ->label('URAIAN')
          ->sortable()
          ->placeholder('-')->searchable(),
        Tables\Columns\TextColumn::make('volume')
          ->label('VOLUME')
          ->sortable()
          ->placeholder('-')
          ->searchable(),
        Tables\Columns\TextColumn::make('satuan')
          ->label('SATUAN')
          ->sortable()
          ->placeholder('-')
          ->searchable(),
        Tables\Columns\TextColumn::make('anggaran')
          ->label('ANGGARAN')
          ->money('Rp. ', locale: 'id')
          ->sortable()
          ->placeholder('-')
          ->searchable(),
        Tables\Columns\TextColumn::make('sumber_dana')
          ->label('SUMBER DANA')
          ->sortable()
          ->placeholder('-')
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
      'index' => Pages\ListDataKeuangans::route('/'),
      'create' => Pages\CreateDataKeuangan::route('/create'),
      'edit' => Pages\EditDataKeuangan::route('/{record}/edit'),
    ];
  }
}
