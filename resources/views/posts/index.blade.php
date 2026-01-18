<<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto">
        
        <nav class="mb-8 bg-white p-4 rounded-lg shadow flex gap-4">
            <a href="/" class="text-blue-600 font-bold hover:underline">Início</a>
            <a href="{{ route('posts.store') }}" class="text-blue-600 font-bold hover:underline">Notas</a>
        </nav>

        <div class="bg-white p-8 rounded-lg shadow">
            <div class="flex justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Minhas Notas</h2>
                <a href="{{ route('posts.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"> + Nova Nota</a>
            </div>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-3">Título</th>
                        <th class="p-3">Conteúdo</th>
                        <th class="p-3 text-right">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3 font-semibold">{{ $post->titulo }}</td>
                        <td class="p-3 text-gray-600">{{ $post->conteudo }}</td>
                        <td class="p-3 text-right">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Tem certeza?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>