<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    public function index(Post $post)
    {

        $data = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
        ->where('id','!=',$post->id)
        ->get()
        ->take(3);
        return view('main.singlepost',compact('post','data','relatedPosts'));
    }
}
