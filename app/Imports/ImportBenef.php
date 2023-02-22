<?php

namespace App\Imports;

use App\Models\Beneficiaire;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportBenef implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Beneficiaire([
            'nom_beneficiaire' => $row[0],
            'prenom_beneficiaire' => $row[1],
            'adresse_beneficiaire' => $row[2],
            'tel_beneficiaire' => $row[3],
            'zone_id' => intval($row[4]),
        ]);
    }
}
