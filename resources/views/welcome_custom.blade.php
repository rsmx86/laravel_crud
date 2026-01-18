<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="text-center bg-white p-12 rounded-xl shadow-2xl">
        <h1 class="text-4xl font-extrabold mb-6 text-gray-800">Gerenciador de Notas</h1>
        <p class="mb-8 text-gray-600">Bem-vindo ao seu sistema Laravel!</p>
        <a href="{{ route('posts.index') }}" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-xl font-bold hover:bg-blue-700 transition">
            Ver Minhas Notas
        </a>
    </div>
</body>