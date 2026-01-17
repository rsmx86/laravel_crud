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

        // 2. EM VEZ DE SÓ TEXTO, VAMOS REDIRECIONAR:
        return redirect()->route('posts.index');
    }
}