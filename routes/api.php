<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;




Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/me', [LoginController::class, 'me']);
    Route::patch('/posts/{id}', [PostController::class, 'update'])->middleware('pemilik');
    Route::post('/posts', [PostController::class, 'store']);
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware('pemilik');
});
    Route::post('/login', [LoginController::class, 'login']);




Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('posts2/{id}', [PostController::class ,'show2']);