<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatkerja extends Model
{
    protected $table = 'riwayatkerja'; // Sesuaikan dengan nama tabel yang sesuai
    protected $fillable = ['id_user', 'perusahaan', 'jabatan', 'tahun_mbekerja','bulan_mbekerja','tahun_sbekerja','bulan_sbekerja'];
    public function unemployed()
    {
        return $this->belongsTo(Unemployed::class, 'id_user');
    }
}
