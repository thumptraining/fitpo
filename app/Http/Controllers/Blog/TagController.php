<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
		
		return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
			'name' => 'required',
			'slug' => 'required|unique:tags'
		]);

		$tag = Tag::create($request->all());
		
		return redirect()->route('tags.index')
			->with('info', 'Tag was created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
			'name' => 'required',
			'slug' => "required|unique:tags,slug,$tag->id"
		]);
		$tag->update($request->all());
		
		return redirect()->route('tags.index')
			->with('info', 'Tag was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index')
			->with('info', 'The tag was successfully deleted');
    }
}
