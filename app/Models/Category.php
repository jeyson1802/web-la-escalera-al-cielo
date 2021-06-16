<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    use HasFactory;

    protected $fillable = ['name','slug'];
    
    public function getRouteKeyName()
    {
       return "slug";
    }

    // Relacion uno a muchos
    public function documents() {
        return $this->hasMany(Document::class);
    }

    // Relacion uno a muchos
    public function videos() {
        return $this->hasMany(Video::class);
    }

    // Relacion uno a muchos
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
