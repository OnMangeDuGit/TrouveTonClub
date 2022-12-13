<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    use HasFactory;
    protected $fillable = ['nom_club', 'email_club', 'mdp_club', 'effectif', 'annonce_publie'];

}
