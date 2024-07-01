<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratResource\Pages;
use App\Filament\Resources\SuratResource\RelationManagers;
use App\Models\Surat;
use App\Notifications\EmailNotification;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Notification as FacadesNotification;

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
        Forms\Components\Section::make('Form Surat Menyurat')
          ->description('Form untuk mengelola surat menyurat')
          ->schema([
            Forms\Components\TextInput::make('nama')
              ->required()
              ->maxLength(255)
              ->disabled(),
            Forms\Components\TextInput::make('nik')
              ->required()
              ->maxLength(255)
              ->disabled(),
            Forms\Components\TextInput::make('email')
              ->email()
              ->required()
              ->maxLength(255)
              ->disabled(),
            Forms\Components\TextInput::make('pesan')
              ->required()
              ->maxLength(255)
              ->disabled(),
            Forms\Components\TextInput::make('jenis_surat')
              ->required()
              ->maxLength(255)
              ->disabled(),
            Forms\Components\TextInput::make('status')
              ->required()
              ->maxLength(255)
              ->default('Proses'),
          ])
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->recordUrl(null)
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
        ActionGroup::make([
          Tables\Actions\Action::make('Edit Status')
            ->icon('heroicon-o-pencil')
            ->action(function (Surat $record, array $data): void {
              $record->status = $data['status'];
              $record->file = $data['file'] ?? $record->file;
              $record->save();

              if ($data['status'] === 'Pending') {
                Notification::make()
                  ->title('Surat Berhasil Diproses')
                  ->success()
                  ->send();
                FacadesNotification::route('mail', $record->email)
                  ->notify(new EmailNotification($record));
              } else {
                Notification::make()
                  ->title('Surat Berhasil Diverifikasi')
                  ->success()
                  ->send();
                FacadesNotification::route('mail', $record->email)
                  ->notify(new EmailNotification($record));
              }
            })
            ->form([
              Forms\Components\Select::make('status')
                ->options([
                  'Pending' => 'Proses',
                  'Diverifikasi' => 'Verifikasi',
                ])
                ->default(function (Surat $record): string {
                  return $record->status ?? "";
                })
                ->searchable()
                ->required(),
              Forms\Components\FileUpload::make('file')
                ->imageEditor()
                ->hidden(function (Surat $record): bool {
                  return $record->status !== 'Pending';
                }),
            ]),
          Tables\Actions\DeleteAction::make(),
        ]),
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
