@extends('layouts.app')

@section('content')
<div class="flex justify-between items-end mb-8">
    <div>
        <h2 class="text-3xl font-bold">Minhas Notas</h2>
        <p class="text-gray-500">Gerencie seus registros salvos no banco de dados.</p>
    </div>
    <a href="{{ route('posts.create') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg font-bold transition">
        + Nova Nota
    </a>
</div>

<div class="bg-zinc-900 border border-zinc-800 rounded-xl overflow-hidden shadow-2xl">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-zinc-800/50 text-gray-400 uppercase text-xs letter tracking-widest">
                <th class="p-4 border-b border-zinc-800">Título</th>
                <th class="p-4 border-b border-zinc-800">Conteúdo</th>
                <th class="p-4 border-b border-zinc-800 text-right">Ações</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-zinc-800">
            @foreach($posts as $post)
            <tr class="hover:bg-zinc-800/30 transition">
                <td class="p-4 font-bold text-orange-400">{{ $post->titulo }}</td>
                <td class="p-4 text-gray-400">{{ Str::limit($post->conteudo, 50) }}</td>
                <td class="p-4 text-right">
                    <div class="flex justify-end gap-3">
                        <a href="{{ route('posts.edit', $post->id) }}" class="text-zinc-400 hover:text-white transition">Editar</a>
                        
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Excluir esta nota?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500/70 hover:text-red-500 transition font-medium">Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop