<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prix extends Model
{
    use HasFactory;
    protected $table = 'prix';

    public function typeclient()
    {
        return $this->belongsTo(typeclient::class,'type_id');
    }


    public function analysedemander()
    {
        return $this->hasMany(AnalyseDemander::class, 'analysedemander_id');
    }
}
