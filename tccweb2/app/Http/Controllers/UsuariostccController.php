<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\gp2_usuarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\gp2_projetos;
use App\Http\Controllers\AuthenticatesUsers;
use App\Models\gp2_imagens;
//use App\usuariostcc;

class UsuariostccController extends Controller
{

    protected $redirectTo = '/home'; // Redirecionar após o login bem-sucedido

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('loginInicial.login'); // Substitua 'sua.visao.de.login' pelo caminho correto da sua visão de login
    }


    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = md5($request->input('password'));

        $user = gp2_usuarios::where('email', $email)
            ->where('senha', $password)
            ->first();

        if ($user) {
            // Autenticação bem-sucedida
            Auth::login($user);
            return redirect('/home'); // Redirecione para a página de destino após o login bem-sucedido
        } else {
            // Autenticação falhou, redirecione de volta para a página de login
            return redirect()->back()->withInput()->withErrors(['email' => 'Credenciais inválidas']);
    }
    }
    
    //public function login(Request $request)
    public function enterplaceholder(Request $request)
    {
        $usuario = $request->input('usuario');
        $user = gp2_usuarios::where('id_usuario', $usuario)->first();

        if (!$user) {
            abort(404); // Ou qualquer outra ação adequada em caso de usuário não encontrado
        }
        $rows = gp2_projetos::where('id_criador', $usuario)->get();
        $rowsImagens = gp2_imagens::all();
        return view('loginInicial.placeholder', compact('user', 'rows', 'rowsImagens'));
    }


    public function index()
    { // a visão que pede usuário e senha
        return view('loginInicial.login');
    }

    protected function attemptLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $credentials['ativo'] = 1; // Exemplo: Verificar se o usuário está ativo

        return $this->guard()->attempt(
            $credentials,
            $request->filled('remember')
        );
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

    public function processarProjetos(Request $request)
    {
        $termoPesquisa = $request->input('termo_pesquisa');

        // Execute a pesquisa no banco de dados usando o termo de pesquisa.
        $resultados = gp2_projetos::all();
        $resultados = gp2_projetos::whereRaw('LOWER(nome_projeto) ILIKE ?', ["%$termoPesquisa%"])
            ->orWhereRaw('LOWER(descricao_breve) ILIKE ?', ["%$termoPesquisa%"])
            ->get();

        return view('resultadosProjeto', ['resultados' => $resultados]);
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
            'senha' => md5($request->input('senha')),
            // Outros campos do usuário que você deseja salvar
        ]);

        // Redirecione para a página de login ou para onde desejar após o cadastro
        return view('loginInicial.login');// ou outra rota de sua escolha
    }

    public function editar()
    {
        $usuario = Auth::user(); // Obtém o usuário autenticado
        return view('edicaoperfil', compact('usuario'));
    }

    public function atualizar(Request $request)
    {
        $usuario = Auth::user(); // Obtém o usuário autenticado

        $request->validate([
            'nome' => 'required|string|max:255',
            // Outras regras de validação para os campos do perfil
        ]);

        // Atualize os campos do perfil com os novos valores do formulário
        $usuario->update([
            'nome' => $request->input('nome'),
            // Atualize os outros campos do perfil aqui
        ]);

        return redirect()->route('edicaoperfil')->with('success', 'Perfil atualizado com sucesso');
    }


    

}
