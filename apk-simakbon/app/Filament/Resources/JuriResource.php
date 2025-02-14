<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JuriResource\Pages;
use App\Models\Juri;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class JuriResource extends Resource
{
    protected static ?string $model = Juri::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Data Juri';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required(),
                TextInput::make('umur')->numeric()->required(),
                TextInput::make('keahlian')->required(),
                Textarea::make('pengalaman')->required(),
                FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->directory('juri') // Disimpan di storage/app/public/juri/
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')
                    ->label('No')
                    ->disableClick()
                    ->rowIndex(),
                TextColumn::make('nama')->searchable()
                ->disableClick(),
                TextColumn::make('umur')
                ->disableClick(),
                TextColumn::make('keahlian')
                ->disableClick(),
                TextColumn::make('pengalaman')->limit(50)
                ->disableClick(),
                ImageColumn::make('foto')
                ->label('Foto')
                ->getStateUsing(fn ($record) => asset('storage/' . $record->foto))
                ->height(70)
                ->width(70)
                ->disableClick(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJuris::route('/'),
            'create' => Pages\CreateJuri::route('/create'),
            'edit' => Pages\EditJuri::route('/{record}/edit'),
        ];
    }
}
