<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_lapangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lapangan',
        'id_user',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'status',
    ];
}
