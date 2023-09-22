<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(UpdateRequest $requeast, Post $post)
    {
        $data=$requeast->validated();
        $post->update($data);
        return view('admin.posts.show',compact('post'));
    }
}
