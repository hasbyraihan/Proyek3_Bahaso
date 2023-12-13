<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    protected $table = 'skill'; // Sesuaikan dengan nama tabel yang sesuai
    protected $fillable = ['id_user', 'namaskill', 'level'];
    public function unemployed()
    {
        return $this->belongsTo(Unemployed::class, 'id_user');
    }
}
