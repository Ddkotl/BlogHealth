<?php

namespace App\Http\Controllers\Main\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Post $post)
    {

        auth()->user()->likedPosts()->toggle($post->id);

        return redirect()->back();
    }
}
