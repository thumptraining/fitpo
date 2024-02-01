<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Models\Blog\Tag;

class PagesController extends Controller
{
    
    public function dashboards()

    {
        return view('dashboard/dashboard');
    }


}
