<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $posts = Post::all();
        return view('dashboard.posts.post')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_baju' => 'required',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'deskripsi' => 'required',
            'harga' => 'required'
        ]);

        $validateData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 60);
        
        $validateData['image'] = $request->file('image')->store('post-images');
        
        Post::create($validateData);

        return redirect('dashboard/posts')->with('success', 'Berhasil menambahkan postingan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'categories' => Category::all(),
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'nama_baju' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'deskripsi' => 'required',
            'harga' => 'required'
        ];
        
        if ($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 60);
        
        $validateData = $request->validate($rules);

        if($request->oldimage) {
            Storage::delete($request->oldimage);
        }
        $validateData['image'] = $request->file('image')->store('post-images');

        Post::where('id', $post->id)->update($validateData);

        return redirect('dashboard/posts')->with('success', 'Berhasil memperbaharui postingan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('dashboard/posts')->with('success', 'Berhasil menghapus postingan!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}