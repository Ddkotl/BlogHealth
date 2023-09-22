<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data=$request->validated();
        // Category::firstOrCreate(['title'=>$data['title']],['title'=>$data['title']]);
        Tag::firstOrCreate($data);
        return redirect()->route('admin.tag.index');
    }
}
