<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceJointe extends Model
{
    protected $fillable = [
        'nom',
        'chemin',
        'beneficiaire_id',
    ];

    public function beneficiaire()
    {
        return $this->belongsTo(Beneficiaire::class);
    }
}

