<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrib extends Model
{
    use HasFactory;
   protected $fillable = [
        'nom_distrib',
        'prenom_distrib',
        'tel_distrib',
        'email_distrib',
        'zone_id',
        'organe_id',
    ];
    public function zone(){
        return $this->belongsTo(Zone::class);
    }
    public function organe(){
        return $this->belongsTo(Organisation::class);
    }
}
