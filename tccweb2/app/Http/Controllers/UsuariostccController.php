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

    public function busca()
    {
       
    }
    public function entrar(Request $req)
{
    $dados = $req->all();
    $email = $dados['email'];
    $senha = $dados['senha'];

    $user = gp2_usuarios::where('email', $email)->first();

    if ($user) {
        // Verifique se a senha fornecida pelo usuário corresponde à senha criptografada no banco de dados
        if (password_verify($senha, $user->senha)) {
            $rows = gp2_projetos::where('id_criador', $user->id_usuario)
                ->orderBy('porcentagem', 'desc')
                ->get();

            return view('loginInicial.placeholder', compact('user', 'rows'));
        }

        // Senha incorreta, redirecione de volta para a página de login
        return redirect()->route('loginInicial.index');
    } else {
        // Usuário não encontrado, redirecione de volta para a página de login
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

    public function showUsers()
    {
        $rows = gp2_usuarios::all();
        return view('buscar', compact('rows'));
    }


    public function pesquisar()
    {
        return view('pesquisar'); // Crie uma view chamada 'pesquisar' para exibir o formulário de pesquisa.
    }

    public function processarPesquisa(Request $request)
    {
        $termoPesquisa = $request->input('termo_pesquisa');

        // Execute a pesquisa no banco de dados usando o termo de pesquisa.
        $resultados = gp2_usuarios::all();
        $resultados = gp2_usuarios::whereRaw('LOWER(nome) ILIKE ?', ["%$termoPesquisa%"])
            ->orWhereRaw('LOWER(email) ILIKE ?', ["%$termoPesquisa%"])
            ->get();

        return view('resultados', ['resultados' => $resultados]);
    }


    public function cadastrar(Request $request)
    {
        // Valide os dados do formulário de cadastro
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:gp2_usuarios',
            'datanasc' => 'required|date',
            'senha' => 'required|min:6',
        ]);

        // Crie um novo usuário
        gp2_usuarios::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'datanasc' => $request->input('datanasc'),
            'senha' => bcrypt($request->input('senha')),
            // Outros campos do usuário que você deseja salvar
        ]);

        // Redirecione para a página de login ou para onde desejar após o cadastro
        return view('loginInicial.login');// ou outra rota de sua escolha
    }

}
