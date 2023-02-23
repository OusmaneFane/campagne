<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beneficiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_beneficiaire',
        'prenom_beneficiaire',
        'adresse_beneficiaire',
        'tel_beneficiaire',
        'zone_id',
    ];
    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function campagne()
    {
        return $this->belongsTo(Campagne::class);
    }

    public function piecesJointes()
{
    return $this->hasMany(PieceJointe::class);
}


}


