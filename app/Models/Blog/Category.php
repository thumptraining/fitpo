<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Post;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // relacion uno a muchos 
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function getRouteKeyName()
	{
		return "slug";
	}
    
}
