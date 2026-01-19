<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Rota raiz
Route::get('/', function () {
    return view('welcome_custom');
});

// Rota Dashboard
Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');

// CRUD de Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// ROTAS DE EDIÇÃO
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// ROTA DE EXCLUSÃO
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');