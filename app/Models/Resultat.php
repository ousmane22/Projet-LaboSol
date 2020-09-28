<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    protected $guarded = [];

    public function fiche()
    {
        return $this->belongsTo(FicheDemande::class,'fichedemande_id');
    }

    public function echantillon()
    {
        return $this->belongsTo(Echantillon::class);
    }

    public function detailsAnalyse()
    {
        return $this->belongsTo(DetailAnalyse::class);
    }
}
