<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\BoardController::class, 'index'])->name('boards.index');

Route::get('/{board}', [\App\Http\Controllers\ThreadController::class, 'index'])->name('threads.index');

Route::post('/{board}/threads', [\App\Http\Controllers\ThreadController::class, 'store'])->name('threads.store');

Route::post('/{board}/{thread}/posts', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('/{board}/{thread}', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
