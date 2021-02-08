<?php

namespace App\Models;
use App\Models\Cities;
use App\Models\Countries;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $fillable = [
        'region_name',
        
    ];
    public function cities()
    {
        // return $this->belongsTo(Cities::class);
        return $this->belongsTo('App\Models\Cities','city_id','id');
    }
    public function countries()
    {
        return $this->belongsTo('App\Models\Countries','country_id','id');
    }
}
