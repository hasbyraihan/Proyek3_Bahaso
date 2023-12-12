<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatkerja extends Model
{
    protected $table = 'riwayatkerja'; // Sesuaikan dengan nama tabel yang sesuai
    protected $fillable = ['perusahaan', 'jabatan', 'tahun_mbekerja','bulan_mbekerja','tahun_sbekerja','bulan_sbekerja'];
}
