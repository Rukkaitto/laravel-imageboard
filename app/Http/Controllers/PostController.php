<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Board $board, Post $thread) {
        $replies = $thread->replies;
        return view('posts.index', compact('replies', 'board', 'thread'));
    }

    public function store(Request $request, Board $board, Post $thread) {
        $request->validate([
            'com' => 'required',
        ]);

        $thread->replies()->save(Post::make($request->all()));
        return redirect(route('posts.index', [$board, $thread]));
    }
}
