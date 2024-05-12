<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratResource\Pages;
use App\Filament\Resources\SuratResource\RelationManagers;
use App\Models\Surat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratResource extends Resource
{
  protected static ?string $model = Surat::class;
  protected static ?string $navigationLabel = 'Surat Menyurat';
  protected static ?string $navigationIcon = 'heroicon-o-document-text';
  protected static ?string $navigationGroup = 'Pengelolaan';


  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\TextInput::make('nama')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('nik')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('email')
          ->email()
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('pesan')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('jenis_surat')
          ->required()
          ->maxLength(255),
        Forms\Components\TextInput::make('status')
          ->required()
          ->maxLength(255)
          ->default('Proses'),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('nama')
          ->searchable(),
        Tables\Columns\TextColumn::make('nik')
          ->searchable(),
        Tables\Columns\TextColumn::make('email')
          ->searchable(),
        Tables\Columns\TextColumn::make('pesan')
          ->searchable(),
        Tables\Columns\TextColumn::make('jenis_surat')
          ->searchable(),
        Tables\Columns\TextColumn::make('status')
          ->searchable(),
        Tables\Columns\TextColumn::make('created_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
        Tables\Columns\TextColumn::make('updated_at')
          ->dateTime()
          ->sortable()
          ->toggleable(isToggledHiddenByDefault: true),
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
      'index' => Pages\ListSurats::route('/'),
      'create' => Pages\CreateSurat::route('/create'),
      'edit' => Pages\EditSurat::route('/{record}/edit'),
    ];
  }
}
