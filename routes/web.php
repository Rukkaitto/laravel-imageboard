<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\BoardController::class, 'index'])->name('boards.index');

Route::get('/{board}', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::post('/{board}/posts', [\App\Http\Controllers\PostController::class, 'createThread'])->name('posts.createThread');

Route::post('/{board}/{post}/replies', [\App\Http\Controllers\PostController::class, 'createReply'])->name('posts.createReply');

Route::get('/{board}/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
