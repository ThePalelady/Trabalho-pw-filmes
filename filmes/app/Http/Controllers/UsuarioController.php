<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retorna a lista de usuários
    }
    public function login(Request $request) {
        // Se for POST, tenta logar
        if ($request->isMethod('POST')) {
            $data = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if (Auth::attempt($data)) {
                return redirect()->route('home');
            } else {
                return redirect()->route('login')->with('erro', 'Deu ruim!');
            }
        }

        // Não era POST...
        return view('usuarios.login');
    }

    public function show($id)
    {
        // Retorna informações de um usuário específico
    }

    public function create()
    {
        // Exibe o formulário de criação de usuário
    }

    public function store(Request $request)
    {
        // Armazena um novo usuário no banco de dados
    }

    public function edit($id)
    {
        // Exibe o formulário de edição de usuário
    }

    public function update(Request $request, $id)
    {
        // Atualiza as informações de um usuário no banco de dados
    }

    public function destroy($id)
    {
        // Remove um usuário do banco de dados
    }
}
