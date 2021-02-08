<?php

namespace App\Models;
use App\Models\Countries;
use App\Models\Regions;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $fillable = [
        'city_name',
       'country_id'

   ];
   public function Countries()
    {
       return $this->belongsTo('App\Models\Countries','country_id','id');
   }
  public function Regions()
 {
     return $this->hasMany(Regions::class);
    // return $this->belongsTo('Regions');
}
}

