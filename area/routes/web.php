<?php

use Illuminate\Support\Facades\Route;
use App\Http\middleware\checkRole;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::middleware(checkRole::class)->group(function (){
 Route::delete('deleteregion/{id}', 'RegionController@destroy')->name('deleteregion');

});
Auth::routes();

    
    //--- http routes
    Route::get('/all_countries','httpController@getCountries');
    //---
Route::get('/home', 'HomeController@index')->name('home');
