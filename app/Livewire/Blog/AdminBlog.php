<?php

namespace App\Livewire\Blog;

use App\Models\Blog\Post;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBlog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search;

    public function render()
    {
        
        $posts = Post::where('name', 'LIKE', '%' .  $this->search . '%')->latest('id')->paginate();
        
        return view('livewire.blog.admin-blog', compact('posts'));
    }
}
