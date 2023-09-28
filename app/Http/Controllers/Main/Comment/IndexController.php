<?php

namespace App\Http\Controllers\Main\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();
        $data['user_id']= auth()->user()->id;
        $data['post_id']= $post->id;
        Comment::create($data);
        return redirect()->route('single.post',$post->id);
    }
}
