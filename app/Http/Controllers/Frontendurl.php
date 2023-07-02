<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Tags;
use App\Models\Post;
class Frontendurl extends Controller
{
    //
    public function index(){
        // $latest = post::get()->skip(0)->take(10)->toArray();
        $latest = post::get()->first();
        $latest10 = post::get()->skip(1)->take(6)->toArray();
        $latestssss = post::get()->skip(1)->take(6)->toArray();
        $crousel = post::get()->take(6)->toArray();
        $footerrec = post::get()->take(4)->toArray();



        $news = post::where('category', 'new')->get()->toArray();
        $onenews = post::where('category', 'new')->first()->toArray();

        $tech = post::where('category', 'tech')->get()->toArray();
        $techf = post::where('category', 'tech')->first()->toArray();
        $tech1 = post::where('category', 'tech')->get()->skip(1)->take(1)->toArray();
        $tech2 = post::where('category', 'tech')->get()->skip(2)->take(1)->toArray();

        $category = Category::get()->toArray();

        $worldaffairs = post::where('category', 'world-affairs')->get()->toArray();
        $worldaffairsf = post::where('category', 'world-affairs')->first()->toArray();
        $worldaffairsfs = post::where('category', 'world-affairs')->get()->skip(1)->take(1)->toArray();
        $worldaffairssss = post::where('category', 'world-affairs')->get()->skip(2)->take(1)->toArray();
        return view('/frontend/index', ["footerrec"=>$footerrec, "category"=>$category ,"news"=>$news, "onen"=>$onenews, "worldaffairs"=>$worldaffairs, "worldaffairsf"=>$worldaffairsf, "worldaffairsfs"=>$worldaffairsfs, "worldaffairsfsss"=>$worldaffairssss, "tech"=>$tech, "techf"=>$techf, "tech1"=>$tech1,"tech2"=>$tech2, "latest6"=>$latestssss, "latest10"=>$latest10, "crousel"=>$crousel, "latest"=>$latest]);
    }
    // public function postpage($slug){
    //     $landpost = post::where("slug",$slug)->get()->first();
    //     $latest = post::get()->skip(0)->take(10)->toArray();

    //     return view('frontend/latestpost', ["post", $landpost, "latest"=>$latest]);
    // }
    public function latestpost($slug){
        // $slug = "encourage-flexibility-and-adaptability-embrace-change-and-encourage-team-members-to-be-flexible-and-adaptable-in-the-face-of-challenges";
        $category = Category::get()->toArray();
        $landpost = post::where("slug", $slug)->get()->first()->toArray();
        $latest = post::get()->skip(0)->take(10)->toArray();
        $footerrec = post::get()->take(4)->toArray();


        return view('frontend/latestpost', ["footerrec"=>$footerrec, "data"=>$landpost, "latest"=>$latest,"category"=>$category]);
    }
    public function about(){
        $category = Category::get()->toArray();
        $footerrec = post::get()->take(4)->toArray();

        return view('/frontend/about', ["category"=>$category,"footerrec"=>$footerrec]);
    }
    public function contact(){
        $category = Category::get()->toArray();
        $footerrec = post::get()->take(4)->toArray();

        return view('/frontend/contact', ["category"=>$category, "footerrec"=>$footerrec]);
    }

    public function category(){
        $rightbar = post::get()->take(10)->toArray();
        $categorypost = post::get()->toArray();
        $category = Category::get()->toArray();
        $footerrec = post::get()->take(4)->toArray();

        return view('/frontend/category', ["footerrec"=>$footerrec, "category"=>$category, "categorypost"=>$categorypost, "right"=>$rightbar]);
    }
    public function particcularcategory($cat){

        $rightbar = post::get()->take(10)->toArray();
        $categorypost = post::where('category', $cat)->get()->toArray();
        $category = Category::get()->toArray();
        $footerrec = post::get()->take(4)->toArray();
        // return$categorypost;
        return view('/frontend/short', ["footerrec"=>$footerrec, "category"=>$category, "categorypost"=>$categorypost, "right"=>$rightbar]);
    }
    public function search_result(Request $request, $search=null){
        $se = $request->search;
        $rightbar = post::get()->take(10)->toArray();
        $categorypost = post::get()->toArray();
        $category = Category::get()->toArray();
        $footerrec = post::get()->take(4)->toArray();

        // return redirect('/category', ["footerrec"=>$footerrec, "category"=>$category, "categorypost"=>$categorypost, "right"=>$rightbar]);
        return view('/frontend/category');
    }
}
