<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'photo',
        'date_debut',
        'date_fin',
        'statut',
        'domaine_id'
    ];

}
