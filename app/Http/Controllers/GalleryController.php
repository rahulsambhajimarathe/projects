<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //this is gallery image show page controller gallery model  and features controller is here for show image in gallery page

    function gallery(){
        $image = Feature::all();
        $gallery = Gallery::all();
        return view('/backend/gallery', ["data" => $image, "gallery" => $gallery]);
    }

    //=======================================================================================================//

    // this is feature_gallery images get controller
    function feature_gallery(){
        return view('/backend/feature');
    }


    // this is feature_gallery images post controller
    function feature_post_gallery(Request $request){
        $data = new Feature;
        // $filename = time()."-blog"."-".$request['feature_img_name'].".".$request->file("feature_image")->getClientOriginalExtension();
        $filename = $request->file("feature_image")->getClientOriginalName();

        $filename = time()."-blog"."-".$request['feature_img_name'].$filename;
        $one = $request->file('feature_image')->storeAs("public/image/feature", $filename);
        $data->name = $filename;

        $data->location_with_name = $one;
        $data->save();
        return redirect()->back();
    }

    //=======================================================================================================//

    //gallery image add page get method controller
    function gallery_gallery(){
        return view('/backend/gallery_add');
    }

    //gallery image add page post method controller
    function gallery_post_gallery(Request $request){
        // echo "<pre>";
        // echo print_r($request->all());
        $data = new Gallery;

        $filename = $request->file("gallery")->getClientOriginalName();

        $filename = time()."-blog"."-".$request['gallery_img_name'].$filename;
        $one = $request->file('gallery')->storeAs("public/image/gallery", $filename);
        $data->name = $filename;

        $data->location = $one;
        $data->save();

        return redirect()->back();

        // return view('/backend/gallery_add');
    }
}
