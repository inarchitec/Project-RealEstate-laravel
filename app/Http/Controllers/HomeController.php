<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
     
 
    public function index()
    {
        // home page NEW SUBMITTED PROPERTY section
        $new_properties = DB::table('properties')->get()->sortBy('created_at')->sortDesc()->take(7);

        // YOU CAN TRUST US section
        $HAPPY_CUSTOMER = "150";
        $PROPERTIES_IN_STOCK = DB::table('properties')->get()->count();
        $CITY_REGISTERED = DB::table('properties')->get()->count();
        $DEALER_BRANCHES = "145";
 
            /* dd($CITY_REGISTERED ); */
     /*  dd($CITY_REGISTERED); */
        
        return view('home',['new_properties'=> $new_properties,
        'HAPPY_CUSTOMER'=>$HAPPY_CUSTOMER,
        'PROPERTIES_IN_STOCK'=>$PROPERTIES_IN_STOCK,
        'CITY_REGISTERED'=>$CITY_REGISTERED,
        'DEALER_BRANCHES'=>$DEALER_BRANCHES
    ]); 
    }


}
