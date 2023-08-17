<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        // Lógica para exibir a lista de filmes para o usuário
        $filmes = Filme::all();
        return view('usuario.filmes.index', compact('filmes'));
    }

    public function register(Request $request)
    {
        // Lógica para criar uma nova conta de usuário
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('usuario.filmes.index');
    }

    public function showLoginForm()
    {
        // formulário de login
        return view('usuario.login');
    }

    public function login(Request $request)
    {
        // autenticar
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('usuario.filmes.index');
        } else {

            return redirect()->route('usuario.login')->withErrors(['login' => 'Credenciais inválidas']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('usuario.login');
    }
}
