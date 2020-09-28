<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalyseDemander extends Model
{
   

    protected $guarded = [];
 

    public function details()
    {
        return $this->hasMany(DetailAnalyse::class);
    }


    public function fichedemande()
    {
        return $this->belongsToMany(FicheDemande::class,'analyse_fiche','analysedemander_id','fichedemande_id');
    }


    public function prix()
    {
        return $this->hasMany(Prix::class, 'analysedemander_id');
    }
}
