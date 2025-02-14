<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juri extends Model
{
    use HasFactory;

    protected $table = 'juris'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'nama',
        'umur',
        'keahlian',
        'pengalaman',
        'foto', // Tambahkan ini untuk mass assignment
    ];
}
