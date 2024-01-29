<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Blog\Post;
use Livewire\WithPagination;

class Recipes extends Component
{
    use WithPagination;
    
    public function render()
    {
        $posts = Post::where('status', 2)->latest('id')->paginate(4);
        return view('livewire.dashboard.recipes', compact('posts'));
    }
}
