<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrib extends Model
{
    use HasFactory;
   protected $fillable = [
        'nom_distrib',
        'tel_distrib',
        'type_distrib',
        'addresse_distrib',
        'email_distrib',
        'nom_zone',
       
    ];
    public function zone(){
        return $this->belongsTo(Zone::class);
    }
    public function organe(){
        return $this->belongsTo(Organisation::class);
    }
}
