<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftarans'; // Nama tabel di database

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
        'status'
    ];

    /**
     * Get URL lengkap dari foto_bonsai
     */
    public function getFotoBonsaiUrlAttribute()
    {
        return $this->foto_bonsai ? Storage::url($this->foto_bonsai) : null;
    }
}
