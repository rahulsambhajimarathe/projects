<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //
    function gallery(){
        $one = Feature::all();        // return $one;
        return view('/backend/gallery', compact('one'));
    }

        //features image
    function feature_gallery(){
        return view('/backend/feature');
    }
    function feature_post_gallery(Request $request){
        $data = new Feature;
        // $publicPath = public_path();
        $filename = time()."-blog"."-".$request['feature_img_name'].".".$request->file("feature_image")->getClientOriginalExtension();
        $filePath = Storage::public_path("uploads/feature/".$filename);
        // $store = Storage::disk('\public\uploads\feature')->put($filename, 'Contents');
        $store = Storage::put($filePath, $filename);
        // $request->file("feature_image")->storeAs("storage/uploads/feature", $filename);

        $data->name = $filename;
        $data->location_with_name = "/storage/uploads/feature/";
        // $data->save();

        echo "<pre>";
        print_r($filePath);
        echo "<br>";
        echo "<br>";

        echo "<br>";

        print_r($filename);
        echo "<br>";

        echo "<br>";
        // print_r($publicPath);
        echo "</pre>";
        // return view('/backend/feature');
        // return response()->file($filePath);
    }






    //gallery img
    function gallery_gallery(){
        return view('/backend/gallery_add');
    }
    function gallery_post_gallery(Request $request){
        // echo "<pre>";
        // echo print_r($request->all());

        $filename = time()."-blog"."-".$request['gallery_img_name'].".".$request->file("gallery")->getClientOriginalExtension();
        $request->file("gallery")->storeAs("public/uploads/gallery", $filename);
        // return $request["feature_image"];

        return view('/backend/gallery_add');
    }
}
