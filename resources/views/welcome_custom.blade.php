@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center py-20 text-center">
    <div class="relative mb-8">
        <div class="absolute inset-0 bg-orange-500 blur-3xl opacity-20"></div>
        <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" class="relative w-32 h-32 mx-auto animate-pulse">
    </div>
    
    <h1 class="text-6xl font-extrabold mb-4 bg-gradient-to-r from-white to-gray-500 bg-clip-text text-transparent">
        Laravel CRUD Notes
    </h1>
    <p class="text-gray-400 text-lg max-w-lg mb-8">
        Organize seus pensamentos e códigos em um ambiente minimalista, escuro e extremamente rápido.
    </p>
    
    <div class="flex gap-4">
        <a href="{{ route('posts.index') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-full font-bold transition">
            Ver Notas
        </a>
        <a href="{{ route('posts.create') }}" class="bg-zinc-800 hover:bg-zinc-700 border border-zinc-700 text-white px-8 py-3 rounded-full font-bold transition">
            + Criar Agora
        </a>
    </div>
</div>
@stop