<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('countries', 'CountryController@create');
    Route::Post('country', 'CountryController@store');
    Route::get('cities', 'CityController@create');
    Route::post('city', 'CityController@store');
    Route::get('regions', 'RegionController@create');
    Route::post('region', 'RegionController@store');
    Route::get('regions/{id}', 'RegionController@show');
    Route::get('viewall','MainController@index');
    
    Route::get('/getCities/{id}','MainController@getCities');
    Route::get('/getRegions/{id}','MainController@getRegions');
    Route::get('listregions', 'RegionController@index');
     Route::delete('deleteregion/{id}', 'RegionController@destroy')->name('deleteregion');
    
    
    Auth::routes();
    
    Route::get('/home', 'HomeController@index')->name('home');
    
    
});

//--- http routes
Route::get('/all_countries','httpController@getCountries');
Route::get('/country/{id}','httpController@getCountry');
Route::get('/store_countries','httpController@storeCountries');
//---