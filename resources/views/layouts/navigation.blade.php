<nav class="bg-zinc-900 border-b border-zinc-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('posts.index') }}" class="flex items-center gap-2">
                        <div class="bg-orange-600 p-1 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </div>
                        <span class="text-white font-bold uppercase tracking-tighter">Minhas <span class="text-orange-500">Notas</span></span>
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <span class="text-zinc-400 text-sm">Olá, <span class="text-white font-medium">{{ Auth::user()->name }}</span></span>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-zinc-500 hover:text-orange-500 text-xs font-bold uppercase transition">
                        Sair
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>