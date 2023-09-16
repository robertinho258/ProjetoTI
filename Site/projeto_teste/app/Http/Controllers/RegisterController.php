<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Exibe o formulário de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Processa o registro do usuário
    public function register(Request $request)
    {
        // Lógica para validar e criar um novo usuário aqui
    }
}
