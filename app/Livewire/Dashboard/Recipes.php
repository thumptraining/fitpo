<?php

namespace App\Livewire\Dashboard;

use App\Models\Blog\Category;
use Livewire\Component;
use App\Models\Blog\Post;
use Livewire\WithPagination;

class Recipes extends Component
{
    use WithPagination;
    
    public function render()
    {
        $recipes = Post::whereHas('category', function ($query) {
            $query->where('slug', 'recipes');
        })->take(4)->get();
        return view('livewire.dashboard.recipes', compact('recipes'));
    }
}
