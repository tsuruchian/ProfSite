<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommunityController extends Controller
{
    public function index() {
        return view('community.index');
    }


    public function about() {
        return view('community.about');
    }


    public function find() {
        return view('community.find')->with('posts', Post::all());
    }

    public function post($id = "") {
        $post = NULL;
        if ($id) {
            $post = Post::find($id);
            return view("community.post", ["post"=>$post]);
        }
        return view('community.post', ["post"=>$post]);
    }

    public function store(Request $request, $id="") {
        if ($id) {
            $post = Post::find($id);
            $post->title = $request->title;
            $post->text = $request->text;
            $post->save();
            return redirect(action("CommunityController@single", $id));
        }
        Post::create(["title"=>$request->title, "text"=>$request->text]);
        return redirect(url("/community/find"));
    }

    public function single($id) {
        $post = Post::find($id);
       return view("community.single", ["post"=>$post]);
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete();
       return redirect(url("/community/find"));
    }





} 
