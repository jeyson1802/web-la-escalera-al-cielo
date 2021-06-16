<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    // Relacion muchos a muchos
    public function countries() {
        return $this->belongsToMany(Country::class)->withPivot('link');;
    }
}
