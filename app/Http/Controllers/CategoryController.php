<?php

namespace App\Http\Controllers;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    // this is for Category list page
    function category(){
        $data = Category::all();
        return view('/backend/categoryList', ["data" => $data]);
    }

    // create category get page
    function createcategory(){
        return view('/backend/createcategory');
    }
        // this is for Create Category post
    function postcreatecategory(Request $request){
        $one  = new Category();
        $one->cat_name = $request['cat_name'];
        if($request['cat_status']){
            $one->cat_status = $request['cat_status'];
        }
        $one->save();
        // return $one;
        return redirect('/backend/all_category');

    }

    // edit create Category
    function editcategory($id){
        $one = Category::find($id)->toArray();
        return view('/backend/editcat', ["data" => $one]);
    }

    function posteditcategory(Request $request, $id){
        $two = Category::find($id);
        $two->cat_name = $request['catname'];
        if($request['cat_status']){
            $two->cat_status = $request['cat_status'];
        }
        $two->save();
        return redirect('/backend/all_category');
    }
    function deletecategory($delete){
        $cat = Category::find($delete);
        $cat->delete();
        return redirect('/backend/all_category');
    }
}
