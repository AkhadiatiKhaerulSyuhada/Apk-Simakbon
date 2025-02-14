<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'pesertas'; // Nama tabel dalam database

    protected $fillable = [
        'nama',
        'email',
        'no_telepon',
        'alamat',
        'kategori',
        'kelas',
        'ukuran',
        'kontes',
        'foto_bonsai',
    ];
}
