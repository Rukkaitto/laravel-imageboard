<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Post;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(Board $board) {
        $threads = $board->posts;
        return view('threads.index', compact('threads', 'board'));
    }

    public function store(Request $request, Board $board) {
        $request->validate([
           'com' => 'required',
        ]);

        $board->posts()->save(Post::make($request->all()));
        return redirect(route('threads.index', $board));
    }
}
