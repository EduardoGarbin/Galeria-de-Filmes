<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;


class FilmeController extends Controller
{
    public function index(){
        return view('home')->with(['filmes' => Filme::orderBy('nome')->get(), 'pagina' => 'home']);
    }

    
    public function show($id){
        return view('filmes.show')->with(['filme' => Filme::findOrFail($id), 'pagina' => 'filme-show']);
    }


    public function create(){
        return view('filmes.create')->with(['pagina' => 'adicionar-filme']);
    }



    public function store(Request $request){
        $formulario = $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'imagem' => 'max:400000|mimes:jpg,png,jpeg|required|image',
            'genero' => 'required|string',
            'trailer' => 'required|string',
        ]);

        Filme::create([
            'nome' => $formulario['nome'],
            'descricao' => $formulario['descricao'],
            'imagem' => $formulario['imagem']->store('', 'imagens'),
            'genero' => $formulario['genero'],
            'trailer' => $formulario['trailer'],
        ]);

        return redirect()->route('home');
    }
}
