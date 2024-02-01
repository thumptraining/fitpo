<?php

namespace App\Livewire\Dashboard;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Livewire\WithPagination;



use Livewire\Component;

class ShowPost extends Component
{
    use WithPagination;
    
    public function render()
    {
      
        $posts = Post::where('status', 2)->take(4)->get();
        return view('livewire.dashboard.show-post', compact('posts'));
    }
}
