<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
class httpController extends Controller
{
    public function getCountries(){
        $response = Http::get('http://new.superbekala.com/public/dashboardApi/countries/all_countries', [
            'lang'=>'ar'
        ]);

        return $response;
    }
    // public function getCountry($id){
    //     $response = Http::get("http://new.superbekala.com/public/dashboardApi/country/$id", [
    //         'lang'=>'ar'
    //     ]);

    //     return $response;
    // }
    public function storeCountries(){
        $response = Http::asForm()->post('http://new.superbekala.com/public/dashboardApi/countries', [
            'name_en'=>'US',
            'name_ar' => 'الولايات المتحدة',
            'iso2' => 'US',
            'phone_code' => "+40",
        ]);
        return $response;
    }


}
