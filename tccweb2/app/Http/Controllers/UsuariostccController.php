<?php

namespace App\Http\Controllers;

use App\Models\gp2_usuarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\usuariostcc;

class UsuariostccController extends Controller
{
    
    //public function login(Request $request)
    public function index()
    { // a visão que pede usuário e senha
        return view('login.index');
    }
    public function entrar(Request $req)
    {
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']]))
        { // redireciona para a home mas agora logado
            return redirect()->route('loginInicial.placeHolder');
        }   
        else 
        { // pede usuario e senha novamente
            return redirect()->route('loginInicial.login');
        }
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
