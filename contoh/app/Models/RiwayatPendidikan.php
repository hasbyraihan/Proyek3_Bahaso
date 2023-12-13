<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $table = 'riwayat_pendidikan'; // Sesuaikan dengan nama tabel yang sesuai
    protected $fillable = ['id_user', 'sekolah', 'jurusan', 'tahun_lulus'];

    public function unemployed()
    {
        return $this->belongsTo(Unemployed::class, 'id_user');
    }
}
