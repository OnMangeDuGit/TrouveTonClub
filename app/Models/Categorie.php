<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'slug'];

    public function formations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        /*
        hasMany : retourne la collection de formations d’une catégorie
        */
        return $this->hasMany(Formation::class);
    }
}
