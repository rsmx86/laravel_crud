<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 1. Mostrar a lista de posts
    public function index()
    {
        $posts = auth()->user()->posts; 
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

        auth()->user()->posts()->create([
        'titulo' => $request->titulo,
        'conteudo' => $request->conteudo,
    ]);

    return redirect()->route('posts.index')->with('success', 'Nota criada!');
}

    public function destroy(Post $post)
{
    if ($post->user_id !== auth()->id()) {
        abort(403);
    }

    $post->delete();

    return redirect()->route('posts.index');
}



    public function edit(Post $post)
{
        if ($post->user_id !== auth()->id()) {
        abort(403, 'Acesso não autorizado.');
    }

    return view('posts.edit', compact('post'));
}

public function update(Request $request, Post $post)
{
    if ($post->user_id !== auth()->id()) {
        abort(403);
    }

    $request->validate([
        'titulo' => 'required',
        'conteudo' => 'required',
    ]);

    $post->update($request->all());

    return redirect()->route('posts.index');
}

public function show(Post $post)
{
    
    if ($post->user_id !== auth()->id()) {
        abort(403);
    }

    return view('posts.show', compact('post'));
}


}