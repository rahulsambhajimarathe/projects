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
    function tags(){
        return view('/backend/tags');
    }
    function gallery(){
        return view('/backend/gallery');
    }
    function category(){
        return view('/backend/categoryList');
    }
    function createcategory(){
        return view('/backend/createcategory');
    }
    function postcreatecategory(Request $id){
        return $id;
    }
    function editcategory(Request $id){
        return view('/backend/createcategory');
    }
    function posteditcategory(Request $id){
        return $id;
    }
    function subcategorylist(Request $id){
        return view('/backend/subcategoryList');
    }
    function subcategorycreate(Request $id){
        return view('/backend/createsub');
    }
    function postsubcategorycreate(Request $id){
        return $id;
    }
    function editsub(Request $id){
        return view('/backend/editsubcat');
    }
    function saveeditsub(Request $id){
        return $id;
    }
    function cmtlist(Request $id){
        return view('/backend/commentlist');
        // return $id;
    }
}
