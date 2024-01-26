<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;

class PagesController extends Controller
{
    
    public function dashboards()

    {
        $posts = Post::all()->sortByDesc('created_at');

        return view('dashboard/dashboard', compact('posts'));
    }

}
