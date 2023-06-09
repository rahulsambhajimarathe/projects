<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontendurl extends Controller
{
    //
    public function index(){
        return view('/frontend/index');
    }
    public function about(){
        return view('/frontend/about');
    }
    public function contact(){
        return view('/frontend/contact');
    }
    
    public function latestpost(){
        return view('/frontend/latestpost');
    }
    public function category(){
        return view('/frontend/category');
    }
    public function search_result(Request $request, $search=null){
        return view('/frontend/search');
    }
}
