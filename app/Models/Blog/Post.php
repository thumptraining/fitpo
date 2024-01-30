<?php

namespace App\Models\Blog;

use App\Models\User;
use App\Models\Blog\Category;
use App\Models\Blog\Tag;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'extract', 'body', 'status', ];

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // relacion uno a uno polimorfica.

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }


}
