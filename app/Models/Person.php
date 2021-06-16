<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{    
    protected $table = 'persons';

    protected $guarded = ['_token'];

    use HasFactory;

    // Relacion muchos inversa
    public function country() {
        return $this->belongsTo(Country::class);
    }

}
