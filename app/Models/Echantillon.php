<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Echantillon extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    public function fiche()
    {
        return $this->belongsTo(FicheDemande::class,'fichedemande_id');
    }

    public function client()
    {
       return $this->belongsTo(Client::class);
    }

    public function typeechantillon()
    {
        return $this->belongsTo(TypeEchantillon::class,'type_echantillon_id');
    }

    public function resultat()
    {
        return $this->hasMany(Resultat::class);
    }
}
