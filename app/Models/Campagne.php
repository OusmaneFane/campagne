<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campagne extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'nom_campagne',
        'type_campagne',
        'date_debut',
        'date_fin',
        'nom_zone',
        'zone_id',
        'nom_distrib',
        'distrib_id',
        'nom_organe',
        'organe_id',

    ];
}
