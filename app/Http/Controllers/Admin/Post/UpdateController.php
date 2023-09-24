<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function index(UpdateRequest $requeast, Post $post)
    {
        $data=$requeast->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
        $data['preview_image']= Storage::disk('public')->put('/images',$data['preview_image']);
        $data['main_image']= Storage::disk('public')->put('/images',$data['main_image']);
        $post->update($data);
        $post->tags()->sync($tagIds);
        return view('admin.posts.show',compact('post'));
    }
}
