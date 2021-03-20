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
            'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $thread = Post::make($request->all());

        if($request->file('file')) {
            $filename = time() . '.' . $request->file('file')->extension();
            $thread->file = '/images/' . $filename;
            $request->file('file')->move(public_path('images'), $filename);
        }

        $thread->name = $thread->name ? $thread->name : 'Anonymous';

        $board->posts()->save($thread);
        return redirect(route('threads.index', $board));
    }
}
