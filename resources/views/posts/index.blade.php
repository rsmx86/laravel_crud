<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
        <div class="flex justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Minhas Postagens</h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"> + Novo Post</a>
        </div>

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 text-gray-700">Título</th>
                    <th class="p-3 text-gray-700">Conteúdo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-semibold">{{ $post->titulo }}</td>
                    <td class="p-3 text-gray-600">{{ $post->conteudo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>