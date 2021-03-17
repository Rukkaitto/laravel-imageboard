<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(Board $board) {
        $threads = $board->threads;
        return view('threads.index', compact('board', 'threads'));
    }

    public function store(Request $request, Board $board) {
        $request->validate([
           'com' => 'required'
        ]);

        Thread::create($request->all());
        return redirect(route('thread.index', $board));
    }
}
