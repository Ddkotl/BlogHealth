<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data=$request->validated();
        // Category::firstOrCreate(['title'=>$data['title']],['title'=>$data['title']]);
        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }
}
