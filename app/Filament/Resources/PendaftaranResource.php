<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Models\Pendaftaran;
use App\Models\Peserta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\Action;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack'; // Ikon valid

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
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ])
                    ->default('pending')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')
                    ->label('No')
                    ->rowIndex()
                    ->disableClick(),
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
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->disableClick()
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'pending' => 'gray',
                        'diterima' => 'success',
                        'ditolak' => 'danger',
                    }),
                ImageColumn::make('foto_bonsai')
                    ->label('Foto Bonsai')
                    ->getStateUsing(fn ($record) => asset('storage/' . $record->foto_bonsai))
                    ->height(70)
                    ->width(70)
                    ->disableClick(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori')
                    ->options([
                        'kategori1' => 'Kategori 1',
                        'kategori2' => 'Kategori 2',
                        'kategori3' => 'Kategori 3',
                    ]),
                Tables\Filters\SelectFilter::make('kelas')
                    ->options([
                        'pemula' => 'Pemula',
                        'menengah' => 'Menengah',
                        'ahli' => 'Ahli',
                    ]),
                Tables\Filters\SelectFilter::make('ukuran')
                    ->options([
                        'kecil' => 'Kecil',
                        'sedang' => 'Sedang',
                        'besar' => 'Besar',
                    ]),
                Tables\Filters\SelectFilter::make('kontes')
                    ->options([
                        'kontes_a' => 'Kontes A',
                        'kontes_b' => 'Kontes B',
                        'kontes_c' => 'Kontes C',
                    ]),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ]),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Action::make('approve')
                    ->label('Setujui')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->action(function ($record) {
                        // Update status menjadi diterima
                        $record->update(['status' => 'diterima']);

                        // Simpan ke tabel Peserta
                        Peserta::create([
                            'nama' => $record->nama,
                            'email' => $record->email,
                            'no_telepon' => $record->no_telepon,
                            'alamat' => $record->alamat,
                            'kategori' => $record->kategori,
                            'kelas' => $record->kelas,
                            'ukuran' => $record->ukuran,
                            'kontes' => $record->kontes,
                            'foto_bonsai' => $record->foto_bonsai,
                        ]);
                    })
                    ->visible(fn ($record) => $record->status === 'pending'),
                Action::make('reject')
                    ->label('Tolak')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->action(fn ($record) => $record->update(['status' => 'ditolak']))
                    ->visible(fn ($record) => $record->status === 'pending'),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}
