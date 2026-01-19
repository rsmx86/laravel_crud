<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 1. Mostrar a lista de posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required',
        ]);

        Post::create($request->all());

        //redirecionamento
        return redirect()->route('posts.index')->with('success', 'Nota criada com sucesso! ✨');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Nota excluída permanentemente! 🗑️');
    }



    public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
    $request->validate([
        'titulo' => 'required',
        'conteudo' => 'required',
    ]);

    $post->update($request->all());

    return redirect()->route('posts.index')->with('success', 'Nota atualizada com sucesso! 📝');
}

}