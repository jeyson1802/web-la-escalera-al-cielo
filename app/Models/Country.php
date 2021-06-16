<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function persons() {
        return $this->hasMany(Person::class);
    }

    // Relacion muchos a muchos
    public function socials() {
        return $this->belongsToMany(Social::class)->withPivot('link');;
    }
}
