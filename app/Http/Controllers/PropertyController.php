<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Property;
use App\Models\Propertygallery;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\search;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {

        

        if(request('search')) {
            $properties = DB::table('agents')
            
            ->join("properties","properties.assigned_agent", "=", "agents.id") 
            ->where('Title', 'like', '%' . request('search') . '%') 
            ->when($request->Location_city, function ($query) use ($request) {
                $query->where('Location_city', $request->Location_city);
            })
            ->Where(function($query)
                {
                    $query 
                    
                    ->where('Status', 'like', '%%')
               /*      ->whereBetween('Price', [0, 968197600]) */
                    ->whereBetween('Area', [0, 1000])
                    ->whereBetween('Bedroom', [0, 100])
                    ->whereBetween('Parking', [0, 100])
                    ->whereBetween('Bathroom', [0, 100])
                    ->whereBetween('Kitchen', [0, 100])
                    ->whereBetween('Living_room', [0, 100])
                    ->whereBetween('Family_room', [0, 100])
                    ->where('Additional_features', 'like', '%%');
                })

            ->get();    
        }else{
            $properties = DB::table('agents')
            
                ->join("properties","properties.assigned_agent", "=", "agents.id") 
              /*   ->orderBy('Price','asc') */
                ->when($request->Location_city, function ($query) use ($request) {
                    $query->where('Location_city', $request->Location_city);
                }) ->when($request->Status, function ($query) use ($request) {
                    $query->where('Status', $request->Status);
                    
                    
                })  
                ->get();    
        }





        return view('properties',[
            'properties' => $properties,
            'request' => $request,
            ] );
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        $slides = DB::table('propertygalleries')->where("Property_id",$property->id)->get(/* "Room_Image" */) ;
        $slides->toArray();
 
        $properties = DB::table('agents')
        ->join("properties","properties.assigned_agent", "=", "agents.id") 
        ->get()->where("id",$property->id) ;  

        return view('property',['property' => $property, 'properties' => $properties,  'slides' => $slides]);
       
    }
    
    public function search(Request $request){
        $response = $request->price["price-min"];

        $new_properties = DB::table('properties')
        ->whereRaw('price BETWEEN ' . $request->price["price-min"] . ' AND ' . $request->price["price-max"] . '')
        ->whereRaw('Area BETWEEN ' . $request->geo["geo-min"] . ' AND ' . $request->geo["geo-max"] . '')
        ->get() ;
        $response = '';
        foreach ($new_properties as $item) {
            $response .= "<div class='col-sm-6 col-md-4 p0'>
            <div class='box-two proerty-item'>
            <div class='item-thumb'>";
                $response .= "<a href='/properties/".$item->id."'><img src='".$item->Images."'/></a>";
                $response .= "</div>
                <div class='item-entry overflow'>
                    <h5>";
                $response .= "<a href='/properties/".$item->id."'>".$item->Title."</a></h5>
                    <div class='dot-hr'></div>";
                $response .= "<span class='pull-left'><b>Area :</b>".$item->Area." Msq </span>
                    <span class='proerty-price pull-right'>";
                $response .= "<b>Price :</b>".$item->Price." ETB</span> <span class='pull-left'><b>Location :</b>".$item->Location_city."</span>";
                $response .="<div class='property-icon'>
                  <img src='".asset('assets/img/icon/bed.png')."' />". $item->Bedroom.
                  "<img src='".asset('assets/img/icon/shawer.png')."' />". $item->Bathroom.
                  "<img src='".asset('assets/img/icon/cars.png')."' />". $item->Parking.
                "</div>
              </div>
            </div>
          </div>";
        }
        return $response;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
