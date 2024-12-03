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
}
