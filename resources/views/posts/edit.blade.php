@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-zinc-900 border border-zinc-800 p-8 rounded-2xl shadow-2xl">
        <h2 class="text-2xl font-bold mb-6 text-white">Editar Nota</h2>
        
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label class="block text-gray-400 mb-2 font-medium">Título</label>
                <input type="text" name="titulo" value="{{ $post->titulo }}" class="w-full bg-zinc-950 border border-zinc-800 text-white p-3 rounded-lg focus:outline-none focus:border-orange-500 transition">
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-400 mb-2 font-medium">Conteúdo</label>
                <textarea name="conteudo" rows="5" class="w-full bg-zinc-950 border border-zinc-800 text-white p-3 rounded-lg focus:outline-none focus:border-orange-500 transition">{{ $post->conteudo }}</textarea>
            </div>
            
            <div class="flex items-center gap-4">
                <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2.5 rounded-lg font-bold transition">
                    Atualizar Nota
                </button>
                <a href="{{ route('posts.index') }}" class="text-gray-500 hover:text-white transition">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@stop