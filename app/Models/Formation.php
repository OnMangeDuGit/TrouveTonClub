<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //protected $fillable=['nomformation', 'datedebut', 'duree','unite','idcategorie'];
    protected $fillable=['nomformation', 'datedebut', 'duree','unite','categorie_id'];

    use HasFactory;
    public function categorie() {
        /*
        belongsTo : une formation appartient à une catégorie, cette méthode retourne la catégorie
        correspondant à la formation
        */
        return $this->belongsTo(Categorie::class);
    }
}

