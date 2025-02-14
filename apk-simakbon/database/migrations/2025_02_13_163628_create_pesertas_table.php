<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->string('alamat');
            $table->string('kategori');
            $table->string('kelas');
            $table->string('ukuran');
            $table->string('kontes');
            $table->string('foto_bonsai');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Tambahkan kolom status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
