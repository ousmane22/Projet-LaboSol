<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DetailClient extends Model
{
    protected $guarded = [];

    public function type()
    {
       return $this->belongsTo(TypeClient::class,'type_client_id');
    }

    public function client()
    {
      return  $this->hasMany(Client::class);
    }

    
}
