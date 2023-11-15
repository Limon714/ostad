<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request){
        Post::create($request->all());
        return back()->with("message","The post has been added !");

    }
}
