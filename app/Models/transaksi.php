<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
    'lapangan_id',
        'user_id',
        'tanggal_pemesanan',
        'jam_mulai',
        'jam_selesai',
        'jumlah_jam',
        'total_harga',
        'status',
        'is_member',
        'is_paid'
    ];


    public function lapangan()
    {
        return $this->belongsTo(lapangan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public function keanggotaan()
    {
        return $this->belongsTo(keanggotaan::class);
    }
}
