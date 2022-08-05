<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'photo',
        'date_debut',
        'date_fin',
        'cout',
        'statut',
        'zone_intervention',
        'domaine_id'
    ];
}
