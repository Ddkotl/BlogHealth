<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(User $user)
    {
        return view('admin.users.show',compact('user'));
    }
}
