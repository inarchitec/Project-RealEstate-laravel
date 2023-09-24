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

    public function search(Request $request){
        $response = $request->price["price-min"];

        $new_properties = DB::table('properties')->

        whereRaw('price BETWEEN ' . $request->price["price-min"] . ' AND ' . $request->price["price-max"] . '')
        // ->where("Area",">",$request->geo["geo-min"])
        // ->where("Area","<",$request->geo["geo-max"])
        ->get() ;
        $response = '';
        foreach ($new_properties as $item) {
            $response .= "<div class='col-sm-6 col-md-3 p0'>
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
            $response .= "<b>Price :</b>".$item->Price." ETB</span> <span class='pull-left'><b>Location :</b>".$item->Location_city."</span>
              </div>
            </div>
          </div>";
        }
        return $response;
    }


}
