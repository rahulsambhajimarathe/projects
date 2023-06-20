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
        $data = Category::with("cat")->get()->toArray();
        // for($i=0; $i<count($data); $i++ ){
        //     // echo ;
        //     $data2[] = Category::find($data[$i]['category_id'])->toArray();
        //     // $subcategories = SubCategory::with('Category')->get();
        // }
        // $data["category_id"];

        // foreach ($subcategories as $subcategory) {
        //     $categoryName = $subcategory->Category->cat_name;
        //     // Do something with the category name
        // }

        // $data1 = SubCategory::find("category_id");
        // $catName = $data1->category->cat_name;
        // return $data."\n"."\n".$data1;
        // $data["id"] = $data;
        // $data["cat_name"] = 'one';
        // $data["cat_sub_name"] = 'one';
        // $data["category_id"] = 'one';
        // echo "<pre>";
        // // print_r($data);
        // // echo count($data);
        // print_r($data);
        // // print_r($data2);
        // // print_r($data['category_id']);
        // // print_r($catName);
        // echo "</pre>";
            // return $data;
        return view('/backend/subcategoryList', ["all" => $data]);
    }



    // get method table create Sub category
    function subcategorycreate(){
        $one = Category::all()->toArray();
        
        return view('/backend/createsub', ["data" => $one]);
        // return $one;
    }
    // post method create Sub category
    function postsubcategorycreate(Request $one){

        // $cat = $one["cat_name"]->cat();
        // $data = "";
        $cat = new SubCategory;
        $cat->cat_sub_name = $one["sub_cat_name"];
        $cat->category_id = $one["cat_name"];
        if($one["cat_status"]){
            $cat->sub_cat_status = $one["cat_status"];
        }
        $cat->save();
        return redirect("/backend/all_sub_category");

        // // print_r($cat);
        
        // echo "this is form data";
        // print_r($one['cat_name']);
        // echo "<br><br>";

        // print_r($one['cat_status']);
        // echo "<br><br>";

        // print_r($one['sub_cat_name']);
        // echo "<br><br>";
        // // echo "</pre>";
        // foreach($one as $key => $value){
        //     // print_r($key);
        //     echo "<br><br><br";
        //     print_r($value);
        //     // echo $value;
        // }
    }



    function editsub(Request $id){
        return view('/backend/editsubcat');
    }
    function saveeditsub(Request $id){
        return $id;
    }
}
