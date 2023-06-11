<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackenSetup extends Controller
{
    //
    function setup(){
        return view('backend/dashboard');
    }
    function adminlogin(){
        return view('backend/login');
    }
    function allpost(){
        return view('backend/postlist');
    }
    function recovrypost(){
        return view('backend/recoverypost');
    }
    function createpost(){
        return view('backend/createpost');
    }
    function showdata(Request $id){
        // return view('backend/createpost');
        return $id;
    }
    function editpost(Request $id){
        return view('backend/editpost');
        // return $id;
    }
    function editdata(Request $id){
        // return view('backend/editpost');
        return $id;
    }
    function gallery(){
        return view('/backend/gallery');
    }



    

    function cmtlist(Request $id){
        return view('/backend/commentlist');
        // return $id;
    }
}
