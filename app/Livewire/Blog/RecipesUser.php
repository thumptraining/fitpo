<?php

namespace App\Livewire\Blog;

use App\Models\Blog\Post;
use Livewire\Component;

class RecipesUser extends Component
{
    public function render()
    {
        $posts = Post::where('status', 2)
            ->whereHas('category', function ($query) {
            $query->where('slug', 'recipes');
        }) ->take(4)->get();

        return view('livewire.blog.recipes-user', compact('posts'));
    }
}
