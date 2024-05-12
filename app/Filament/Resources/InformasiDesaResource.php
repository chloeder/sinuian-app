<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiDesaResource\Pages;
use App\Filament\Resources\InformasiDesaResource\RelationManagers;
use App\Models\InformasiDesa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiDesaResource extends Resource
{
  protected static ?string $model = InformasiDesa::class;
  protected static ?string $navigationIcon = 'heroicon-o-newspaper';
  protected static ?string $navigationGroup = 'Pengelolaan';


  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\Section::make('Form Informasi Desa')
          ->description('Form untuk menambahkan informasi desa')
          ->schema([
            Forms\Components\TextInput::make('judul')
              ->required()
              ->maxLength(255),
            Forms\Components\Textarea::make('isi')
              ->required()
              ->maxLength(255),
            Forms\Components\TagsInput::make('tag')
              ->required()
              ->separator(','),
            Forms\Components\FileUpload::make('cover')
              ->required()
              ->image()
              ->imageEditor(),
          ]),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('judul')
          ->label('JUDUL')
          ->sortable()
          ->searchable(),
        Tables\Columns\TextColumn::make('isi')
          ->label('ISI')
          ->sortable()
          ->searchable(),
        Tables\Columns\TextColumn::make('tag')
          ->label('TAG')
          ->badge()
          ->color('warning')
          ->sortable()
          ->searchable(),
        Tables\Columns\ImageColumn::make('cover')
          ->label('COVER')
          ->searchable(),
        Tables\Columns\TextColumn::make('views')
          ->label('DILIHAT')
          ->numeric()
          ->sortable(),
        Tables\Columns\TextColumn::make('created_at')
          ->label('DIBUAT')
          ->since()
          ->sortable()
        // ->toggleable(isToggledHiddenByDefault: true),
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
      'index' => Pages\ListInformasiDesas::route('/'),
      'create' => Pages\CreateInformasiDesa::route('/create'),
      'edit' => Pages\EditInformasiDesa::route('/{record}/edit'),
    ];
  }
}
