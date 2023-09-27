<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(6);
        $likedPosts = Post::withCount('likedUser')->orderBy('liked_user_count','DESC')->get()->take(4);
        return view('main.blogList',compact('posts','randomPosts','likedPosts'));
    }
}
