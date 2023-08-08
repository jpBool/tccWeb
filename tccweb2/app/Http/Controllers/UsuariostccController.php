<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\gp2_usuarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\gp2_projetos;
//use App\usuariostcc;

class UsuariostccController extends Controller
{
    
    //public function login(Request $request)
    public function enterplaceholder()
    {
        return view('loginInicial.placeholder');
    }
    public function index()
    { // a visão que pede usuário e senha
        return view('loginInicial.login');
    }
    public function entrar(Request $req)
    {
        $dados = $req->all();
        //$email = Input::get('email');
        //$senha = Input::get('senha');
        $email = $dados['email'];
        $senha = $dados['senha'];

        $user = gp2_usuarios::where('email', $email) -> first();
        
        //$senha = gp2_usuarios::where('senha', $senha) -> first();

        
        //$senhaI = Hash::make(Request::input('senha'));
        if($user)
        { // redireciona para a home mas agora logado
            
            if($user->senha == $senha)
            {
                $rows = gp2_projetos::where('id_criador', $user->id_usuario)
                ->orderBy('porcentagem', 'desc')
                ->get();
                
                return view('loginInicial.placeholder', compact('user', 'rows'));
            }
            return redirect()->route('loginInicial.index');
            //return view('loginInicial.placeholder');
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
