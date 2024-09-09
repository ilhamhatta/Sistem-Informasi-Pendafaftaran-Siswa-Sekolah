<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = Post::all();
        return view('dashboard.index')->with('posts', $show);
    }

    // public function message ()
    // {
    //     $message = Message::all();
    //     return view('dashboard.pesan')->with('messages', $message);
    // }

    // public function destroy (Message $message)
    // {
    //     Message::destroy($message->id);

    //     return redirect('/pesan')->with('success', 'Pesan berhasil dihapus!');
    // }
}
