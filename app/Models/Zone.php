<?php

namespace App\Models;

use App\Models\Campagne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zone extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_zone',
        'addresse_zone',
    ];
    public function campagnes() {
        return $this->belongsToMany(Campagne::class);
      }
      
}
