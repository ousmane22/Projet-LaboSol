<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $guarded = [];
    

    public function fiche()
    {
        return $this->belongsTo(FicheDemande::class,'fichedemande_id');
    }
}
