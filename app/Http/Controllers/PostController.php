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
            'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = Post::make($request->all());

        if($request->file('file')) {
            $filename = time() . '.' . $request->file('file')->extension();
            $post->file = '/images/' . $filename;
            $request->file('file')->move(public_path('images'), $filename);
        }

        $thread->replies()->save($post);
        return redirect(route('posts.index', [$board, $thread]));
    }
}
