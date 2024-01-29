<?php

namespace App\Livewire\Blog;

use App\Models\Blog\Post;
use Livewire\Component;

class AdminBlog extends Component
{
    public function render()
    {
        $posts = Post::all();
        
        return view('livewire.blog.admin-blog', compact('posts'));
    }
}
