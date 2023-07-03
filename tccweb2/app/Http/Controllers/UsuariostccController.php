<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\gp2_usuarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\usuariostcc;

class UsuariostccController extends Controller
{
    
    //public function login(Request $request)
    public function index()
    { // a visão que pede usuário e senha
        return view('loginInicial.login');
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
            return redirect()->route('loginInicial.index');
        }
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }

    public function returnLogin()
    {
        return redirect()->route('loginInicial.placeHolder');
    }
}
