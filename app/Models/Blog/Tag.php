<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog\Post;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // relacion muchos a muchos
    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
	{
		return "slug";
	}
    
}
