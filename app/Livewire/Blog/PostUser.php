<?php

namespace App\Livewire\Blog;

use Livewire\Component;

use App\Models\Blog\Post;
use Livewire\WithPagination;

class PostUser extends Component
{

    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public $search;

    public function render()
    {
        $posts = Post::where('status', 2)
        ->whereDoesntHave('category', function ($query) {
            $query->where('slug', 'recipes');
        })-> where('name', 'LIKE', '%' .  $this->search . '%')->latest('id')->get();

        return view('livewire.blog.post-user', compact('posts'));
    }
}
