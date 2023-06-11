<?php

namespace App\Http\Controllers;
use App\Models\Category;
// use App\Models\Sub;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    //
    function subcategorylist(){
        return view('/backend/subcategoryList');
    }



    // get method table create Sub category
    function subcategorycreate(){
        $one = Category::all()->toArray();
        return view('/backend/createsub', ["data" => $one]);
        // return $one;
    }
    // post method create Sub category
    function postsubcategorycreate(Request $id){
        $data = new SubCategory();
        $data->cat_sub_name = $id["sub_cat_name"];
        if($id["cat_status"]){
            $data->cat_sub_name = $id["cat_status"];
        }
        $data->category()->save();
        return $data;
    }



    function editsub(Request $id){
        return view('/backend/editsubcat');
    }
    function saveeditsub(Request $id){
        return $id;
    }
}
