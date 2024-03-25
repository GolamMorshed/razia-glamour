<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/posts',[PostController::class, 'index'])->name('posts')->middleware('auth');

Route::post('/post/create',[PostController::class,'store'])->name('create_post')->middleware('auth');


