<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapangan_photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'lapangan_id',
        'photo',
    ];

    public function lapangan()
    {
        return $this->belongsTo(lapangan::class);
    }

    
}
