<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.categoryview',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.categorycreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function test_data(){
        // search for a data
            // $cata = Category::where('id',1)->first();
        // inserting new data using eloquent
            // $cata = Category::create([
            //     "blog_category" => "Deep Learning",
            //     "title" => "Certain DL Systems",
            //     "description" => "systems multiple applications of CNN are the proper utilization of classified of CNN are the proper utilization of classified systems in the AI industry, which led us to the new era",
            //     "more" => "which are the system capabilities of the new world orders In these modern world there are lots of things that we can perform and operate machines",
            // ]);

        // updating data using eloquent
            // $cata = Category::find(1);
            // $cata->update([
            //     "title" => "Convolutional Nural Netowrk(CNN)",
            //     ]);
        // Deleting using eloquent and query builder
            // $cata = Category::find(2);
            // $cata->delete();
            // $cata = DB::table("categories")->where('id',4)->delete();

        // Searching from models
        // $cata = Category::where('title','LIKE','%'.'ML Syst'.'%')->get();
        // $cata = DB::table("categories")->where('title','LIKE','%'.'ML Syst'.'%')->get();

        // $cata = Category::all();
        // $cata = DB::table("categories")->get();

        echo json_encode($cata);
        dd($cata);
    }
    public function compare_date(){
        
    }

}
