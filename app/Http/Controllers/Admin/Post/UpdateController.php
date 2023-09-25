<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function index(UpdateRequest $requeast, Post $post)
    {
        $data=$requeast->validated();
        $post = $this->service->update($data,$post);
        
        return view('admin.posts.show',compact('post'));
    }
}
