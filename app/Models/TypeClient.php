<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeClient extends Model
{
    protected $guarded = [];

    public function details()
    {
        return $this->hasMany(DetailClient::class,'type_client_id');
    }



    public function client()
    {
        return $this->hasMany(TypeClient::class);
    }

    public function prix()
    {
        return $this->hasMany(TypeClient::class,'id');
    }


}
