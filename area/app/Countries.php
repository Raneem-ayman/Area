<?php

namespace App\Models;
use App\Models\Cities;
use App\Models\Regions;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $fillable = [
        'country_name',
        
    ];
   
    public function Cities()
    {
        return $this->hasMany(Cities::class);
    }
    public function Regions()
    {
        return $this->hasMany(Regions::class);
    }
}
