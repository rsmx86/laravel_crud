<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ $post->titulo }}
            </h2>
            <a href="{{ route('posts.index') }}" class="text-zinc-400 hover:text-white transition text-sm">
                &larr; Voltar
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-zinc-900 border border-zinc-800 p-8 rounded-2xl shadow-xl">
                <div class="flex items-center gap-4 mb-8 text-xs text-zinc-500 uppercase tracking-widest">
                    <span>Criado em: {{ $post->created_at->format('d/m/Y H:i') }}</span>
                    <span class="text-zinc-700">|</span>
                    <span>Última atualização: {{ $post->updated_at->format('d/m/Y H:i') }}</span>
                </div>

                <div class="text-zinc-300 text-lg leading-relaxed whitespace-pre-wrap">
                    {{ $post->conteudo }}
                </div>

                <div class="mt-12 pt-6 border-t border-zinc-800 flex gap-4">
                    <a href="{{ route('posts.edit', $post) }}" class="bg-zinc-800 hover:bg-zinc-700 text-white px-6 py-2 rounded-lg font-bold transition">
                        Editar Nota
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>