<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Minhas Notas') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg font-bold text-sm transition-all active:scale-95 shadow-lg shadow-orange-900/20">
                + Nova Nota
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($posts as $post)
                    <div class="relative bg-zinc-900 border border-zinc-800 p-6 rounded-2xl shadow-xl hover:border-orange-500/50 hover:-translate-y-1 transition-all duration-300 group">
                        
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-lg font-bold text-white group-hover:text-orange-500 transition-colors">
                                <a href="{{ route('posts.show', $post) }}" class="after:absolute after:inset-0">
                                    {{ $post->titulo }}
                                </a>
                            </h3>
                            
                            <div class="flex gap-3 relative z-10">
                                <a href="{{ route('posts.edit', $post) }}" class="text-zinc-500 hover:text-blue-400 transition-colors" title="Editar">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar esta nota?')">
                                    @csrf @method('DELETE')
                                    <button class="text-zinc-500 hover:text-red-500 transition-colors" title="Excluir">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <p class="text-zinc-400 text-sm leading-relaxed mb-4 line-clamp-3">
                            {{ Str::limit($post->conteudo, 150) }}
                        </p>

                        <div class="flex items-center justify-between mt-auto">
                            <div class="text-[10px] uppercase tracking-widest text-zinc-600 font-semibold">
                                {{ $post->created_at->translatedFormat('d M Y') }}
                            </div>
                            <div class="text-orange-500 opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20 bg-zinc-900/50 border border-dashed border-zinc-800 rounded-2xl">
                        <div class="mb-4 flex justify-center text-zinc-700">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <p class="text-zinc-500 font-medium">Você ainda não criou nenhuma nota.</p>
                        <p class="text-zinc-600 text-sm">Clique em "+ Nova Nota" para começar a organizar suas ideias.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>