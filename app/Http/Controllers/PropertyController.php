<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Property;
use App\Models\Propertygallery;
use Illuminate\Support\Facades\DB;
 
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $properties = DB::table('properties')
   /*      ->join("propertygalleries","properties.id", "=", "propertygalleries.Property_id")
        ->join("agents","properties.id", "=", "agents.Assigned_Property_id") */
        ->get();    

     
      /*    dd($properties);   */


        return view('properties',[
            'properties' => $properties,] );
    
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
   /*   dd($slides);  */    
 
     
         


        $properties = DB::table('properties')
   /*      ->join("propertygalleries","properties.id", "=", "propertygalleries.Property_id")  */
        ->join("agents","properties.id", "=", "agents.Assigned_Property_id") 
        ->get()->where("id",$property->id) ;  

            
        

     
   /*   dd($slides);     */
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
