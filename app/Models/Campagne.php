<?php

namespace App\Models;


use App\Models\Zone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function zones() {
        return $this->belongsToMany(Zone::class);
      }
      
}
