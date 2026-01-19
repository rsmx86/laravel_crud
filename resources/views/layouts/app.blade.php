<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    @keyframes bounce-short {
        0%, 120% { transform: translateY(0); }
        80% { transform: translateY(-4px); }
    }
    .animate-bounce-short {
        animation: bounce-short 1.0s ease-out;
    }
</style>


</head>
<body class="bg-zinc-950 text-gray-100 min-h-screen">

    <nav class="bg-zinc-900 border-b border-zinc-800 p-4 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-orange-600 p-1.5 rounded-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <span class="text-xl font-black tracking-tighter uppercase">Laravel <span class="text-orange-500">Notes</span></span>
            </div>
            <div class="flex gap-6 font-medium">
                <a href="{{ url('/') }}" class="hover:text-orange-500 transition">Início</a>
                <a href="{{ route('posts.index') }}" class="hover:text-orange-500 transition">Minhas Notas</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-6">
            @if(session('success'))
    <div id="alert-success" class="mb-6 flex items-center p-4 text-emerald-400 bg-emerald-950/30 border border-emerald-500/50 rounded-xl animate-bounce-short">
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span class="font-medium">{{ session('success') }}</span>
        <button type="button" onclick="document.getElementById('alert-success').remove()" class="ml-auto text-emerald-500 hover:text-emerald-400">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
@endif
        @yield('content')
    </main>
        <footer class="bg-zinc-900 border-t border-zinc-800 py-10 mt-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-2">
                        <div class="bg-orange-600 p-1 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </div>
                        <span class="text-lg font-bold uppercase tracking-tighter">Laravel <span class="text-orange-500">Notes</span></span>
                    </div>
                    <p class="text-zinc-500 text-sm">
                        Um projeto CRUD simples e elegante desenvolvido para organizar ideias e registros de forma eficiente.
                    </p>
                </div>

                <div>
                    <h3 class="text-white font-bold mb-4 uppercase text-xs tracking-widest">Navegação</h3>
                    <ul class="text-zinc-500 text-sm space-y-2">
                        <li><a href="{{ url('/') }}" class="hover:text-orange-500 transition">Início</a></li>
                        <li><a href="{{ route('posts.index') }}" class="hover:text-orange-500 transition">Minhas Notas</a></li>
                        <li><a href="{{ route('posts.create') }}" class="hover:text-orange-500 transition">Nova Nota</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-bold mb-4 uppercase text-xs tracking-widest">Tecnologias</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-zinc-800 text-zinc-400 px-2 py-1 rounded text-xs border border-zinc-700">Laravel 11</span>
                        <span class="bg-zinc-800 text-zinc-400 px-2 py-1 rounded text-xs border border-zinc-700">Tailwind CSS</span>
                        <span class="bg-zinc-800 text-zinc-400 px-2 py-1 rounded text-xs border border-zinc-700">MySQL</span>
                        <span class="bg-zinc-800 text-zinc-400 px-2 py-1 rounded text-xs border border-zinc-700">Laragon</span>
                    </div>
                </div>
            </div>

            <div class="border-t border-zinc-800 pt-8 text-center text-zinc-600 text-xs">
                <p>&copy; {{ date('Y') }} Laravel CRUD Notes. Criado com ❤️</p>
            </div>
        </div>
    </footer>
</body>
</html>