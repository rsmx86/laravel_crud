<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController; // <--- IMPORTANTE: Adicione esta linha
use Illuminate\Support\Facades\Route;

// Página Inicial (Aberta para todos)
Route::get('/', function () {
    return view('welcome_custom');
});

// Dashboard (Padrão do Breeze)
Route::get('/posts', function () {
    return view('posts');
})->middleware(['auth', 'verified'])->name('posts');

// Todas as rotas que PRECISAM de login ficam aqui dentro
Route::middleware('auth')->group(function () {
    
    // Perfil do Usuário
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD de Notas (Protegido)
    // Usamos resource para facilitar: cria index, create, store, edit, update, destroy de uma vez
    Route::resource('posts', PostController::class);
});

require __DIR__.'/auth.php';