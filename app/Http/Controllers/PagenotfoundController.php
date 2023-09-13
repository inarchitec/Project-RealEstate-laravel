<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagenotfoundController extends Controller
{
    //
    public function index()
    {
        return view('404');
    }
}
