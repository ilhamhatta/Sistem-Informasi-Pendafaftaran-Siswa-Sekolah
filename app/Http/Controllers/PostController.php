<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $categories = Category::all();
        $posts = Post::all();
        return view('index',[
            'categories' => Category::all()
        ])->with('posts', $posts);
    }

    public function show (Post $post)
    {
        return view('detail-barang', [
            'posts' => $post
        ]);
    }

    public function store (Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Message::create($validasi);

        return redirect('/')->with('success' , 'Pesan anda berhasil dikirim!');
    }
}
