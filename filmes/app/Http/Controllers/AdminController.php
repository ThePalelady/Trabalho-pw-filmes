<?php

namespace App\Http\Controllers;
use App\Models\filmes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
        public function index()
        {
            // Lógica para exibir a lista de filmes para o administrador
            $filme = Filme::all();
            return view('admin.filmes.index', compact('filmes'));
        }

        public function create()
        {
            // formulário de criação
            return view('admin.filmes.create');
        }

        public function store(Request $request)
        {
            // salvar o filme 
            Filme::create($request->all());
            return redirect()->route('admin.filmes.index');
        }

        public function edit(Filme $filme)
        {
            return view('admin.filmes.edit', compact('filmes'));
        }

        public function update(Request $request, Filme $filme)
        {
            $filme->update($request->all());
            return redirect()->route('admin.filmes.index');
        }

        public function destroy(Filme $filme)
        {
            $filme->delete();
            return redirect()->route('admin.filmes.index');
        }
    }


