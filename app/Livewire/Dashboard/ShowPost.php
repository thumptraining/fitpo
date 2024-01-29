<?php

namespace App\Livewire\Dashboard;

use App\Models\Blog\Post;
use Livewire\WithPagination;



use Livewire\Component;

class ShowPost extends Component
{
    use WithPagination;
    
    public function render()
    {
        
        $posts = Post::where('status', 2)->latest('id')->paginate(4);

        return view('livewire.dashboard.show-post', compact('posts'));
    }
}
