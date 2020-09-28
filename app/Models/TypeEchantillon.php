<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeEchantillon extends Model
{

    protected $guarded = [];
 
   
    
    public function echantillon()
    {
       return $this->hasMany(Echantillon::class);
    }
}
