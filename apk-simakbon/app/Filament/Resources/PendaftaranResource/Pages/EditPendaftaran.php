<?php

namespace App\Filament\Resources\pendaftaranResource\Pages;

use App\Filament\Resources\pendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class Editpendaftaran extends EditRecord
{
    protected static string $resource = pendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
