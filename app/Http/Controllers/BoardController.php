<?php

namespace App\Http\Controllers;

use App\Models\Board;

class BoardController extends Controller
{
    public function index()
    {
        $boards = Board::all();
        return view('boards.index', compact('boards'));
    }
}
