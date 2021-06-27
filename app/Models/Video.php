<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];  

    // Relacion muchos a uno inversa
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // Relacion muchos inversa
    public function user() {
        return $this->belongsTo(User::class);
    }
}
