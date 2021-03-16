<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Board $board) {
        $posts = $board->posts;
        return view('posts.index', compact('board', 'posts'));
    }

    public function createThread(Request $request, Board $board)
    {
        //
    }

    public function createReply(Request $request, Board $board)
    {
        //
    }

    public function show(Post $post)
    {
        //
    }
}
