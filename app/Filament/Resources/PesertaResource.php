<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesertaResource\Pages;
use App\Models\Peserta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class PesertaResource extends Resource
{
    protected static ?string $model = Peserta::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('no_telepon')
                    ->label('Nomor Telepon')
                    ->required(),
                Forms\Components\TextInput::make('alamat')
                    ->required(),
                Forms\Components\Select::make('kategori')
                    ->label('Kategori Bonsai')
                    ->options([
                        'juniper' => 'Juniper',
                        'ficus' => 'Ficus',
                        'wrightia' => 'Wrightia',
                        'premna' => 'Premna',
                    ])
                    ->required(),
                Forms\Components\Select::make('kelas')
                    ->label('Kelas')
                    ->options([
                        'prospek' => 'Prospek',
                        'regional' => 'Regional',
                        'madya' => 'Madya',
                        'utama' => 'Utama',
                    ])
                    ->required(),
                Forms\Components\Select::make('ukuran')
                    ->label('Ukuran')
                    ->options([
                        'mame' => 'Mame',
                        'small' => 'Small',
                        'medium' => 'Medium',
                        'large' => 'Large',
                        'extra large' => 'Extra Large',
                    ])
                    ->required(),
                Forms\Components\Select::make('kontes')
                    ->label('Kontes')
                    ->options([
                        'kontes lokal 1' => 'Kontes Lokal 1',
                        'kontes lokal 2' => 'Kontes Lokal 2',
                        'kontes nasional' => 'Kontes Nasional',
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('foto_bonsai')
                    ->label('Foto Bonsai')
                    ->image()
                    ->directory('bonsai')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->disableClick(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->disableClick(),
                Tables\Columns\TextColumn::make('no_telepon')
                    ->label('No Telepon')
                    ->disableClick(),
                Tables\Columns\TextColumn::make('kategori')
                    ->label('Kategori')
                    ->disableClick(),
                Tables\Columns\TextColumn::make('kelas')
                    ->label('Kelas')
                    ->disableClick(),
                Tables\Columns\TextColumn::make('ukuran')
                    ->label('Ukuran')
                    ->disableClick(),
                Tables\Columns\TextColumn::make('kontes')
                    ->label('Kontes')
                    ->disableClick(),
                ImageColumn::make('foto_bonsai')
                    ->label('Foto Bonsai')
                    ->getStateUsing(fn ($record) => asset('storage/' . $record->foto_bonsai))
                    ->height(70)
                    ->width(70)
                    ->disableClick(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPesertas::route('/'),
            'create' => Pages\CreatePeserta::route('/create'),
            'edit' => Pages\EditPeserta::route('/{record}/edit'),
        ];
    }
}
