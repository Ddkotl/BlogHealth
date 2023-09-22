<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index(UpdateRequest $requeast, Tag $tag)
    {
        $data=$requeast->validated();
        $tag->update($data);
        return view('admin.tags.show',compact('tag'));
    }
}
