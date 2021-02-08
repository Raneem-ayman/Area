<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use App\Models\Countries;
use App\Models\Cities;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Regions::all();
        $cities = Cities::all();
        $countries = Countries::all();
          return view('listRegions', compact('regions','cities','countries'));
        //  return ['regions' => $regions,'cities'=>$cities,'countries'=>$countries];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $countries = Countries::all();
        $cities = Cities::all();
        return view('createRegion',compact('cities','countries'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'region_name'=>'required',
            
        ]);

        

        // $regions = new Regions([
        //     'region_name' => $request->region_name,
        //      'country_id' => 1 ,
        //     'city_id' => 1,
            

        // ]);
        // $city = Cities::where('id', $request->ciy_id)->with('countries');

        $regions = new Regions();
        $regions->region_name = $request->region_name;
         $regions->country_id = $request->country_id;
      

        $regions->city_id = $request->city_id;
        $regions->save();

        return ['regions' => $regions,];
        // return redirect()->route('regions.index')->with('success', 'Region Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      
        // $countries= Countries::find($id);
        // $cities= Cities::find($id);
        // return Regions::where('id',$id)->with('cities')->first();//right one
        // $regions = Regions::where('country_id',$id)
        //                     ->where('city_id',$id)
        //                     ->get();
        // return view('createRegion',compact('countries',' cities','regions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $regions = Regions::find($id);
        $regions->delete();
        // return ['regions' => $regions,];
         return redirect()->route('listregions')->with('success', 'Region deleted!');
    }
}
