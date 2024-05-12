<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WajibLaporResource\Pages;
use App\Filament\Resources\WajibLaporResource\RelationManagers;
use App\Models\WajibLapor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WajibLaporResource extends Resource
{
  protected static ?string $model = WajibLapor::class;

  protected static ?string $navigationIcon = 'heroicon-o-credit-card';
  protected static ?string $navigationGroup = 'Pengelolaan';


  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\TextInput::make('nama_tamu')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('keperluan_bertamu')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('lama_bertamu')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('jaga_id')
          ->required()
          ->numeric(),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('nama_tamu')
          ->searchable(),
        Tables\Columns\TextColumn::make('keperluan_bertamu')
          ->searchable(),
        Tables\Columns\TextColumn::make('lama_bertamu')
          ->searchable(),
        Tables\Columns\TextColumn::make('created_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
        Tables\Columns\TextColumn::make('updated_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
        Tables\Columns\TextColumn::make('jaga_id')
          ->numeric()
          ->sortable(),
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
      'index' => Pages\ListWajibLapors::route('/'),
      'create' => Pages\CreateWajibLapor::route('/create'),
      'edit' => Pages\EditWajibLapor::route('/{record}/edit'),
    ];
  }
}
