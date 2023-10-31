<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio'; 
    protected $primarykey = 'id';
    protected $fillable = ['bidang', 'deskripsi', 'file'];
    public $timestamps = false;

    // Definisikan relasi atau metode lain sesuai kebutuhan Anda di sini
}
