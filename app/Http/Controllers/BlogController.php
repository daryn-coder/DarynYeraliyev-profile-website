<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('blog.index')->with(['posts'=>$posts]);
    }

    public function store(Request $request){
        Post::create([
            'title' => $request->Title,
            'body' => $request->Body
        ]);
        return back();
    }

    public function get_blog($id){
        $blog = Post::find($id);

        if($blog==null){
            return response(['message'=>'blog not found'],404);
        }

        return view('blog.detail')-> with(['blog'=>$blog]);
    }
}
