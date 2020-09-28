<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailAnalyse extends Model
{
    protected $guarded = [];

    public function analyseDemander()
    {
        return $this->belongsTo(AnalyseDemander::class);
    }

    public function resultat()
    {
        return $this->hasMany(FicheDemande::class);
    }
}
