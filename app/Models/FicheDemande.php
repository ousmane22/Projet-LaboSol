<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FicheDemande extends Model
{
    protected $guarded = [];
    public $timestamps =  false;
   protected $table  = 'fichedemandes';


    public function client()
    {
       return $this->belongsTo(Client::class,'client_id');
    }

    public function echantillon()
    {
       return $this->hasMany(Echantillon::class,'fichedemande_id');
    }

    public function resultat()
    {
        return $this->hasMany(Resultat::class,'fichedemande_id');
    }

    public function analysedemande()
    {
        return $this->belongsToMany(AnalyseDemander::class, 'analyse_fiche', 'fichedemande_id', 'analysedemander_id');
    }

    public function facture()
    {
        return $this->hasMany(Facture::class);
    }

}
