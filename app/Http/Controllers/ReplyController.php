<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Thread;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function index(Board $board, Thread $thread) {
        $replies = $thread->replies;
        return view('replies.index', compact('replies', 'thread'));
    }

    public function store(Request $request) {
        //
    }
}
