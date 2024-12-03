<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keanggotaan extends Model
{
    use HasFactory;

    protected $fillable =[
      'user_id',
      'lapangan_id',
      'tanggal_mulai',
      'tanggal_selesai',
      'hari',
      'jam_mulai',
      'jam_selesai',
      'durasi_jam',
      'status',  
    ];


    public function lapangan()
    {
        return $this->belongsTo(lapangan::class);
    }
}
