<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsahaResource\Pages;
use App\Filament\Resources\UsahaResource\RelationManagers;
use App\Models\Usaha;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UsahaResource extends Resource
{
  protected static ?string $model = Usaha::class;

  protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
  protected static ?string $navigationGroup = 'Pengelolaan';


  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Forms\Components\Section::make('Form Informasi Desa')
          ->description('Form untuk menambahkan informasi desa')
          ->schema([
            Forms\Components\TextInput::make('nama_umkm')
              ->label('NAMA UMKM')
              ->unique()
              ->required()
              ->maxLength(255),
            Forms\Components\TextInput::make('nama_pemilik')
              ->label('Nama Pemilik')
              ->unique()
              ->required()
              ->maxLength(255),
            Forms\Components\TagsInput::make('jenis_produk')
              ->label('Jenis Produk')
              ->placeholder('')
              ->unique()
              ->required()
              ->separator(','),
            Forms\Components\TextInput::make('alamat_usaha')
              ->label('Alamat Usaha')
              ->required()
              ->maxLength(255),
            Forms\Components\TextInput::make('no_telp')
              ->label('No. Telepon')
              ->prefix('+62')
              ->tel()
              ->unique()
              ->required()
              ->numeric(),
            Forms\Components\TextInput::make('sosial_media')
              ->maxLength(255),
            Forms\Components\FileUpload::make('image')
              ->label('Cover')
              ->image()
              ->imageEditor()
          ])

      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('nama_umkm')
          ->label('NAMA UMKM')
          ->sortable()
          ->searchable(),
        Tables\Columns\TextColumn::make('nama_pemilik')
          ->label('NAMA PEMILIK')
          ->sortable()
          ->searchable(),
        Tables\Columns\TextColumn::make('jenis_produk')
          ->label('JENIS PRODUK')
          ->sortable()
          ->searchable(),
        Tables\Columns\TextColumn::make('alamat_usaha')
          ->label('ALAMAT USAHA')
          ->sortable()
          ->searchable(),
        Tables\Columns\TextColumn::make('no_telp')
          ->label('NO. TELEPON')
          ->prefix('+62')
          ->searchable()
          ->sortable(),
        Tables\Columns\TextColumn::make('sosial_media')
          ->label('SOSIAL MEDIA')
          ->sortable()
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
      'index' => Pages\ListUsahas::route('/'),
      'create' => Pages\CreateUsaha::route('/create'),
      'edit' => Pages\EditUsaha::route('/{record}/edit'),
    ];
  }
}
