<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinasiWisataResource\Pages;
use App\Filament\Resources\DestinasiWisataResource\RelationManagers;
use App\Models\DestinasiWisata;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestinasiWisataResource extends Resource
{
  protected static ?string $model = DestinasiWisata::class;
  protected static ?string $navigationGroup = 'Pengelolaan';

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\Section::make('Form Wisata Desa')
          ->description('Form untuk menambahkan wisata desa')
          ->schema([
            Forms\Components\TextInput::make('nama')
              ->required()
              ->maxLength(255),
            Forms\Components\TextInput::make('lokasi')
              ->required()
              ->maxLength(255),
            Forms\Components\TextInput::make('deskripsi')
              ->required()
              ->maxLength(255),
            Forms\Components\FileUpload::make('foto')
              ->image()
              ->disk('public')
              ->required(),
          ]),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('nama')
          ->searchable(),
        Tables\Columns\TextColumn::make('lokasi')
          ->searchable(),
        Tables\Columns\TextColumn::make('deskripsi')
          ->searchable(),
        Tables\Columns\ImageColumn::make('foto')
        ->disk('public'),
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
      'index' => Pages\ListDestinasiWisatas::route('/'),
      'create' => Pages\CreateDestinasiWisata::route('/create'),
      'edit' => Pages\EditDestinasiWisata::route('/{record}/edit'),
    ];
  }
}
