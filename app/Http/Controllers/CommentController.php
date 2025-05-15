<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // Método para mostrar la lista de comentarios
    public function index()
    {
        $comments = Comment::all();
        return view('comments', compact('comments'));
    }

    // Método para guardar un nuevo comentario
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->content = $request->secure ? htmlspecialchars($request->content) : $request->content;
        $comment->save();

        return redirect()->route('comments')->with('success', 'Comentario agregado con éxito.');
    }
}
