<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Criar Nova Nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-zinc-900 border border-zinc-800 p-8 rounded-2xl shadow-xl">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <x-input-label for="titulo" value="Título da Nota" />
                        <x-text-input id="titulo" name="titulo" type="text" class="mt-1 block w-full" required autofocus />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="conteudo" value="Conteúdo" />
                        <textarea id="conteudo" name="conteudo" rows="6" 
                            class="mt-1 block w-full bg-zinc-950 border-zinc-800 text-white focus:border-orange-500 focus:ring-orange-500 rounded-lg shadow-sm p-3 transition" 
                            required></textarea>
                    </div>

                    <div class="flex items-center justify-end gap-4">
                        <a href="{{ route('posts.index') }}" class="text-zinc-400 hover:text-white text-sm transition">Cancelar</a>
                        <x-primary-button>
                            Salvar Nota
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>