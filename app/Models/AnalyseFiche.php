<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AnalyseFiche extends Pivot
{
    protected $table = 'analyse_fiche';
    public  $timestamps =  false;
    protected $guarded = [];
   


}
