<?php

namespace App\Http\Controllers;

use App\Models\post; //load Post model
use Illuminate\Http\Request;

class PostController extends Controller
{
    {
        $assignment= Assignment::latest()->get();
        return view ('assignment.index',compact('assignment'));
    }
}
public function create()
{
return view('posts.create');
}