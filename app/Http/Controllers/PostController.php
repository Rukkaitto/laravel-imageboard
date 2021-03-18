<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Thread;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Board $board) {
        $posts = $board->posts;
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request) {
        //
    }
}
