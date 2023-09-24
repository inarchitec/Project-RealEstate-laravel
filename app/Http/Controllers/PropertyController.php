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

        
        /* $slides = Propertygallery::all()->where("Property_id",$property->id) ; */

        
        $slides = DB::table('propertygalleries')->where("Property_id",$property->id)->get(/* "Room_Image" */) ;
            
        $slides->toArray();
/*     dd($slides);   */
 
     
         


        $properties = DB::table('agents')
   /*      ->join("propertygalleries","properties.id", "=", "propertygalleries.Property_id")  */
        ->join("properties","properties.assigned_agent", "=", "agents.id") 
        ->get()->where("id",$property->id) ;  

            
        

     
    // dd($properties);     
        return view('property',[
            'property' => $property, 'properties' => $properties,  'slides' => $slides,  
           
           
        ]);
       
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
