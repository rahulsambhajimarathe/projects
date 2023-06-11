<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;
class TagsController extends Controller
{
    
    public function tagsm(){
        $tag = Tags::all()->toArray();
        return view('/backend/tags', ["taglist" => $tag]);
    }

    
    public function create_tags(Request $request){
        $data = new Tags;
        $data->tag_name = $request['tagname'];
        $data->save();
        return redirect('/backend/tags');
    }
    public function delete_tags($delete){

        $tag = Tags::find($delete);
        $tag->delete();
        return redirect('/backend/tags');
    }
}
