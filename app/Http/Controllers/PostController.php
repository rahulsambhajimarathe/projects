<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Tags;
use App\Models\Post;

class PostController extends Controller
{


    // this is for show the post
    function allpost(){
        $postlist = Post::all()->toArray();
        return view('backend/postlist', ['data'=>$postlist]);
    }



    // this is for create a new post get render the page

    function createpost(){
        $cat = Category::all()->toArray();
        $feature = Feature::all()->toArray();
        $gallery = Gallery::all()->toArray();
        $tags = Tags::all()->toArray();
        return view('backend/createpost', ["category"=>$cat, "feature"=>$feature, "gallery" => $gallery, "tags"=>$tags]);
    }

    // this is for create a new post method post to save a data

    function savepost(Request $postdata) {
        $save = new Post;


        $arr = $postdata["tags"];
        for($i=0; $i<count($arr); $i++) {
            $x = preg_replace("/[{}]/", "", $arr[$i]);
            $tagid[$i] = $x;
        }
        $string = implode(', ', $tagid);

        $save->title = $postdata['title'];
        $save->slug = Str::slug($postdata['title']);
        $save->maindata = $postdata['maindata'];
        $save->featureImages = $postdata['featuer'];
        $save->gallery_image = $postdata['gallery'];
        $save->tags = $string;
        $save->category = $postdata['category'];
        $save->status = $postdata['show'];
        $save->date = $postdata['date'];
        $save->save();

        return redirect("backend/all_post_list");
        // return $save;
    }


    function editpost($id){
        $cat = Category::all()->toArray();
        $feature = Feature::all()->toArray();
        $gallery = Gallery::all()->toArray();
        $tags = Tags::all()->toArray();

        $postlist = Post::find($id)->toArray();
        // return $postlist;
        return view('backend/editpost', ["data"=>$postlist, "category"=>$cat, "feature"=>$feature, "gallery" => $gallery, "tags"=>$tags]);
    }
    function editdata(Request $update, $id){
        $find = Post::find($id);

        $arr = $update["tags"];
        for($i=0; $i<count($arr); $i++) {
            $x = preg_replace("/[{}]/", "", $arr[$i]);
            $post[$i] = $x;
        }

        $string = implode(', ', $post);
        $find->title = $update['title'];
        $find->slug = Str::slug($update['slug']);;
        $find->maindata = $update['maindata'];
        $find->title = $update['featuer'];
        $find->title = $update['gallery'];
        $find->tags = $string;
        $find->category = $update['category'];
        $find->status = $update['show'];
        $find->date = $update['date'];
        $find->save();
        return redirect("backend/all_post_list");
    }

    function delete_post($delete){
        $post = Post::find($delete);
        $post->delete();
        return redirect('/backend/all_post_list');
    }
}
