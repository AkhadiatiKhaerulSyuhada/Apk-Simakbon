<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use Illuminate\Support\Facades\Storage;

class pendaftaranController extends Controller
{
    public function daftar(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:pendaftarans,email',
            'phone' => 'required|regex:/^[0-9]{10,15}$/',
            'alamat' => 'required|string',
            'category' => 'required|string',
            'kelas' => 'required|string',
            'size' => 'required|string',
            'contest' => 'required|string',
            'bonsai_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Simpan file gambar ke storage (folder 'bonsai_photos' di storage/app/public)
        $foto_bonsai = $request->file('bonsai_photo')->store('bonsai_photos', 'public');

        // Simpan data ke database
        pendaftaran::create([
            'nama' => $request->name,
            'email' => $request->email,
            'no_telepon' => $request->phone,
            'alamat' => $request->alamat,
            'kategori' => $request->category,
            'kelas' => $request->kelas,
            'ukuran' => $request->size,
            'kontes' => $request->contest,
            'foto_bonsai' => $foto_bonsai
        ]);

        return redirect()->route('pendaftaran')->with('success', 'Pendaftaran Berhasil!');
    }
}
