<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'kategori_id',
        'harga_perjam',
        'Deskripsi'
    ];


    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }


    public function jadwal_lapangan()
    {
        return $this->hasMany(jadwal_lapangan::class);
    }

    public function lapangan_photo()
    {
        return $this->hasMany(lapangan_photo::class);
    }

    public function ulasan(){
        return $this->hasMany(ulasan::class);
    }
}
