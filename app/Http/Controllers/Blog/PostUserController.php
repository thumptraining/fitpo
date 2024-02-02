<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function index()
    {
      
        return view('posts.user.index');
    }

    public function recipes()
    {
      
        return view('posts.user.recipes');
    }
}
