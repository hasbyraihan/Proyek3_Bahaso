<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $table = 'riwayat_pendidikan'; // Sesuaikan dengan nama tabel yang sesuai
    protected $fillable = ['sekolah', 'jurusan', 'tahun_lulus'];

    // Definisikan relasi atau metode lain sesuai kebutuhan Anda di sini
}
