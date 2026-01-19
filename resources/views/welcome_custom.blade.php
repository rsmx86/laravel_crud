<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD Notes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-950 text-white antialiased">

    <nav class="max-w-6xl mx-auto px-6 py-6 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="bg-orange-600 p-1 rounded-lg">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            </div>
            <span class="text-lg font-bold uppercase tracking-tighter">Laravel <span class="text-orange-500">Notes</span></span>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-20">
        <div class="flex flex-col items-center justify-center text-center">
            
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
            
            @auth
                <div class="flex flex-col items-center gap-4">
                    <p class="text-orange-400">Bem-vindo de volta, {{ Auth::user()->name }}!</p>
                    <a href="{{ route('posts.index') }}" class="bg-orange-600 hover:bg-orange-700 px-8 py-3 rounded-xl font-bold transition-all shadow-lg shadow-orange-900/20">
                        Acessar Minhas Notas
                    </a>
                </div>
            @else
                <div class="bg-zinc-900 p-6 rounded-2xl border border-zinc-800 w-full max-w-md shadow-2xl">
                    <h2 class="text-sm font-bold text-zinc-400 uppercase tracking-widest mb-4">Acesse sua conta</h2>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-4 mb-4">
                            <input type="email" name="email" placeholder="Seu e-mail" required class="bg-zinc-950 border border-zinc-800 p-3 rounded-lg w-full text-sm focus:border-orange-500 outline-none transition">
                            <input type="password" name="password" placeholder="Sua senha" required class="bg-zinc-950 border border-zinc-800 p-3 rounded-lg w-full text-sm focus:border-orange-500 outline-none transition">
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-orange-600 hover:bg-orange-700 px-6 py-2 rounded-lg font-bold text-sm transition">
                                Entrar
                            </button>
                            <a href="{{ route('register') }}" class="text-xs text-zinc-500 hover:text-white transition">
                                Não tem conta? <span class="text-orange-500">Registre-se</span>
                            </a>
                        </div>
                    </form>
                </div>
            @endauth

        </div>
    </main>

    <footer class="text-center py-10 text-zinc-600 text-xs mt-20">
        <p>&copy; {{ date('Y') }} Laravel CRUD Notes. De poça em poça, o sapo faz seu caminho. 🐸</p>
    </footer>

</body>
</html>