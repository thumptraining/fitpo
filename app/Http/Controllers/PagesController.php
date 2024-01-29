<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Models\Blog\Tag;

class PagesController extends Controller
{
    
    public function dashboards()

    {
        $posts = Post::where('status', 2)->latest('id')->paginate(4);

        return view('dashboard/dashboard', compact('posts'));
    }


}
