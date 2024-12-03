<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lapangan_id',
        'ulasan',
        'rating',
    ];

    public function lapangan()
    {
        return $this->belongsTo(lapangan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
