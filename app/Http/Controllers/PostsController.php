<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($slug)
    {
        //   $post = DB::table('posts')->where('slug', $slug)->first();


        return view(
            'post',
            ['post' => $post = Post::where('slug', $slug)->firstOrFail()]
        );
    }
}
