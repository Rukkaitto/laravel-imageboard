<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(Board $board) {
        $threads = $board->posts;
        return view('threads.index', compact('threads', 'board'));
    }

    public function store(Request $request) {
        //
    }
}
