<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
		$tags = Tag::all();
	
		return view('posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {  

        $post = Post::create($request->all());

        if($request->file('cover')){
           $url = Storage::put('posts', $request->file('cover'));

           $post->image()->create([
                'url' => $url
           ]);
        }
	
        if($request->tags){
            $post->tags()->sync($request->tags);
        }

        return redirect()->route('posts.index')
			->with('info', 'Post was created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $similares = Post::where('category_id', $post->category_id)
		->where('status', 2)
		->where('id', '!=', $post->id)
		->latest('id')
		->take(4)
		->get();
	
	    return view('posts.show', compact('post', 'similares'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        $categories = Category::all();
		$tags = Tag::all();

        return view('posts.edit', compact('post','categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post ->update($request->all());

        if($request->file('cover')){
           $url = Storage::put('posts', $request->file('cover'));

           if($post->image){
                Storage::delete($post->image->url);
                $post->image->update([
                    'url' => $url
                ]);
           }else{
            $post->image->create([
                'url' => $url
            ]);
           }
        }

        if($request->tags){
            $post->tags()->sync($request->tags);
        }

        return redirect()->route('posts.index')
			->with('info', 'Post was update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
        ->with('info', 'Post was delete successfully');
    }
}
