<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get("posts/{post:slug}", [PostController::class, 'show']);

                                                            //view if only you're a guest
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');


Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');



