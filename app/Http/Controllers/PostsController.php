<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
//        $posts = DB::select("select * from posts where id = ?", [1]);
        $posts = DB::select("select * from posts");

//        dd($posts);

        return view("posts/index", [
            'posts' => $posts
        ]);
    }
}
