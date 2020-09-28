<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $guarded = [];
   
    public function type()
    {
      return  $this->belongsTo(TypeClient::class);
    }

    public function detailType()
    {
       return $this->belongsTo(DetailClient::class,'detail_client_id');
    }

    public function fiche()
    {
       return $this->hasMany(FicheDemande::class,'client_id');
    }

    public function echantillon()
    {
      return  $this->hasMany(Echantillon::class,'client_id');
    }
}
