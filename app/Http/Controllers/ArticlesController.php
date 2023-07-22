<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index') -> with('articles', Article::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048'
        ]);

        $slug = Str::slug($request->title, '-');

        $imageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Article::create([
            'slug' => $slug,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $imageName,
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show') -> with('article', Article::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')-> with('article', Article::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request -> validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048'
        ]);

        $updatedSlug = Str::slug($request->title, '-');

        $imageName = uniqid() . '-' . $updatedSlug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Article::where('slug', $slug)->update([
            'slug' => $updatedSlug,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_path' => $imageName,
            'user_id' => auth() -> user() -> id,
        ]);

        return redirect('/blog/'.$updatedSlug) -> with([
            'article' => Article::where('slug', $updatedSlug)->first(),
            'message' => 'Article details has been updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Article::where('slug', $slug) -> delete();
        return redirect('/blog') -> with('message', 'Article has been deleted');
    }
}