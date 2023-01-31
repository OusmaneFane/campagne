<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_organe',
        'type_organe',
        'adresse_organe',
        'responsable_organe',
        'tel_responsable',
        'email_responsable',
    ];
}
