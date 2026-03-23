<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(Request $request){
    // dd($request->login,$request->senha);
    dd($request->all('login','senha'));
    $login = $_POST['login'];
    $senha = $_POST['senha'];

        return response()->json([
            'login' => $login,
            'senha' => $senha
        ]);
    }
}


