<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Propertygallery;
use Illuminate\Http\Request;

class PropertygalleryController extends Controller
{
    //
   /*  public function index()
    {
        $properties = Property::with('propertygallery')->get();
        $propertygallery = Propertygallery::with('property')->get();

        return view('index', compact('properties','propertygallery'));
        
    } */
    public function show(Propertygallery $propertygallery,)
    {
     /*    $propertygallery = Propertygallery::find($property); */
        return view('property',[
              'propertygallery' => $propertygallery,
           /*   dd($propertygallery.$property)  */
        ]);
    }
}
