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
use App\Models\gp2_colaboradores;
use App\Models\gp2_seguidores;
use Carbon\Carbon;
use phpseclib\Net\SCP;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Ftp\FtpAdapwter;
use Illuminate\Support\Facades\DB;


//use App\usuariostcc;

class UsuariostccController extends Controller
{

    // Redirecionar após o login bem-sucedido

    public function sair()
    {
        // Encerrar a sessão e remover todos os dados da sessão
        session()->flush();
        return redirect()->route('login');
        
    }
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
    session()->flush();
    $email = $request->input('email');
    $password = md5($request->input('password'));
    
    $user = gp2_usuarios::where('email', $email)
        ->where('senha', $password)
        ->first();

    if ($user) {
        session(['user_id' => $user->id_usuario]);
        // Autenticação bem-sucedida
        
        return redirect()->route('homeInicial'); // Corrigido para redirecionar para a rota nomeada
    } else {
        // Autenticação falhou, redirecione de volta para a página de login
        return redirect()->back()->withInput()->withErrors(['email' => 'Credenciais inválidas']);
    }
}

    
    //public function login(Request $request)
    public function enterplaceholder(Request $request)
    {
        $userId = session('user_id');
    if (session()->has('user_id')) 
    {
        $projetos = gp2_projetos::where('excluido', false)
            ->orderBy('porcentagem', 'desc')
            ->get();
        $rowsProject = [];
        foreach ($projetos as $projeto) {
            $dataAtualizacao = $projeto->data_atualizacao;
            $dataAtualizacao = Carbon::parse($dataAtualizacao);
            $dataAtual = Carbon::now();
            $diferencaDias = $dataAtual->diffInDays($dataAtualizacao);
            $projeto->diferencaDias = $diferencaDias;
            $rowsProject[] = $projeto;
        }
        $usuario = $request->input('usuario');
        $user = gp2_usuarios::where('id_usuario', $usuario)->first();

        if (!$user) {
            abort(404); // Ou qualquer outra ação adequada em caso de usuário não encontrado
        }
        $rowsColab = gp2_colaboradores::where('id_colaborador', $usuario)->get();
        $rowsUsers = gp2_usuarios::all();
        $rows = gp2_projetos::where('id_criador', $usuario)->get();
        $rowsImagens = gp2_imagens::all();

        $countSeguidor = DB::table('gp2_seguidores')
        ->where('id_seguidor', $userId)
        ->count();

        $countSeguido = DB::table('gp2_seguidores')
        ->Where('id_seguido', $userId)
        ->count();
        
        return view('loginInicial.placeholder', compact('user', 'rows', 'rowsImagens', 'rowsUsers', 'rowsColab', 'rowsProject', 'userId', 'countSeguidor', 'countSeguido'));
    }
    else
    {
        return view('loginInicial.login');
    }

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


    public function returnLogin()
    {
        return redirect()->route('loginInicial.placeHolder');
    }

    public function showUsers()
    {$userId = session('user_id');
        if($userId)
        {
        $rows = gp2_usuarios::all();
        return view('buscar', compact('rows'));
        }
        else
        {
            return view('loginInicial.login');
        }
    }


    public function pesquisar()
    {
    $userId = session('user_id');
        if($userId)
        {
            return view('pesquisar'); // Crie uma view chamada 'pesquisar' para exibir o formulário de pesquisa.
        }
        else
        {
            return view('loginInicial.login');
        }
    }

    

    public function processarProjetos(Request $request)
    {
        $userId = session('user_id');
    if($userId)
    {
        $termoPesquisa = $request->input('termo_pesquisa');

        // Execute a pesquisa no banco de dados usando o termo de pesquisa.
        $resultados = gp2_projetos::all();
        $resultados = gp2_projetos::whereRaw('LOWER(nome_projeto) ILIKE ?', ["%$termoPesquisa%"])
            ->orWhereRaw('LOWER(descricao_breve) ILIKE ?', ["%$termoPesquisa%"])
            ->get();
       
        return view('resultadosProjeto', ['resultados' => $resultados], compact('userId'));
    }
    else
    {
        return view('loginInicial.login');
    }
    }


    public function cadastrar(Request $request)
    {
       
      
        
        // Valide os dados do formulário de cadastro
        $regras = [
            'nome' => 'required|string',
            'email' => 'required|email|unique:gp2_usuarios',
            'datanasc' => 'required|date',
            'senha' => 'required|min:6',
        ];

        $mensagens = [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'datanasc.required' => 'O campo data de nascimento é obrigatório.',
            'datanasc.date' => 'O campo data de nascimento deve ser uma data válida.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
        ];
        
        $request->validate($regras, $mensagens);

       
        $avatarNumero = rand(1, 30);
        // Crie um novo usuário
        gp2_usuarios::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'datanasc' => $request->input('datanasc'),
            'senha' => md5($request->input('senha')),
            'avatar' => $avatarNumero,
            // Outros campos do usuário que você deseja salvar
        ]);

        // Redirecione para a página de login ou para onde desejar após o cadastro
        return redirect()->route('loginInicial.index');//' ou outra rota de sua escolha
    }

    public function editar()
    {
        $userId = session('user_id');
        if($userId)
        {
        $usuario = gp2_usuarios::where('id_usuario', $userId)->first(); // Obtém o usuário autenticado
        return view('edicaoperfil', compact('usuario', 'userId'));
        }
        else
        {
            return view('loginInicial.login');
        }
    }

    public function editarCadastro()
    {
        $userId = session('user_id');
        if($userId)
        {
        $usuario = gp2_usuarios::where('id_usuario', $userId)->first(); // Obtém o usuário autenticado
        return view('edicaocadastro', compact('usuario', 'userId'));
        }
        else
        {
            return view('loginInicial.login');
        }
    }

    public function atualizar(Request $request)
{
    // Obtém o ID do usuário da sessão
    $userId = session('user_id');

    // Verifica se o usuário está autenticado
    if($userId)
    {
        // Recupere o usuário com base no ID da sessão
        $usuario = gp2_usuarios::find($userId);

        // Verifique se o usuário foi encontrado
        if ($usuario) {
            // Valide os campos do formulário
            $request->validate([
                'nome' => 'required|string|max:255',
                // Adicione outras regras de validação para os campos do perfil
            ]);

            // Atualize os campos do perfil com os valores do formulário
            $usuario->nome = $request->input('nome');
            $usuario->naturalidade = $request->input('TextNat');
            $usuario->bio = $request->input('TextBio');
            // Atualize os outros campos do perfil aqui

            // Salve as alterações no banco de dados
            $usuario->save();

            return view('edicaoperfil', compact('usuario', 'userId'))->with('success', 'Perfil atualizado com sucesso');
        } else {
            // Se o usuário não foi encontrado, você pode redirecioná-lo para uma página de erro ou executar outra ação apropriada.
            return view('pagina_de_erro');
        }
    }
    else
    {
        return view('loginInicial.login');
    }
}



public function store(Request $request)
{
    if($request->hasFile('profile_image')) {
         
        //get filename with extension
        $filenamewithextension = $request->file('profile_image')->getClientOriginalName();
 
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
 
        //get file extension
        $extension = $request->file('profile_image')->getClientOriginalExtension();
 
        //filename to store
        $filenametostore = $filename.'_'.uniqid().'.'.$extension;
 
        //Upload File to external server
        Storage::disk('ftp')->put($filenametostore, fopen($request->file('profile_image'), 'r+'));
 
        //Store $filenametostore in the database
    }
 
    return redirect('images')->with('status', "Image uploaded successfully.");
}

public function atualizarCadastro(Request $request)
{
    // Obtém o ID do usuário da sessão
    $userId = session('user_id');

    // Verifica se o usuário está autenticado
    if($userId)
    {
        // Recupere o usuário com base no ID da sessão
        $usuario = gp2_usuarios::find($userId);

        // Verifique se o usuário foi encontrado
        if ($usuario) {
            // Valide os campos do formulário
            $request->validate([
                
                // Adicione outras regras de validação para os campos do perfil
            ]);

            // Atualize os campos do perfil com os valores do formulário
            $usuario->email = $request->input('nome');
            $usuario->nascimento = $request->input('TextNat');
            $usuario->bio = $request->input('TextBio');
            // Atualize os outros campos do perfil aqui

            // Salve as alterações no banco de dados
            $usuario->save();

            return view('edicaoperfil', compact('usuario', 'userId'))->with('success', 'Perfil atualizado com sucesso');
        } else {
            // Se o usuário não foi encontrado, você pode redirecioná-lo para uma página de erro ou executar outra ação apropriada.
            return view('pagina_de_erro');
        }
    }
    else
    {
        return view('loginInicial.login');
    }

}

    public function handleFollow(Request $request)
        {
            $seguido = $request->input('id_seguido');
            $userId = session('user_id');
            $dataAtual = now()->format('Y-m-d ');
            gp2_seguidores::create([
                'id_seguidor' => $userId,
                'id_seguido' => $seguido,
                'data_inicio_seguindo' => $dataAtual,
            ]);

            return redirect()->back();
            
        }

        public function handleUnfollow(Request $request)
        {
            $seguido = $request->id_seguido;
            $userId = session('user_id');

            // Encontre o registro correspondente e exclua-o
            gp2_seguidores::where('id_seguidor', $userId)
                ->where('id_seguido', $seguido)
                ->delete();

            return redirect()->back(); // Ou redirecione para a página desejada após deixar de seguir o usuário.
        }


    public function processarPesquisa(Request $request)
    {
        $userId = session('user_id');
        if($userId)
        {
            $termoPesquisa = $request->input('termo_pesquisa');
            if($termoPesquisa != null)
            {
               

                // Execute a pesquisa no banco de dados usando o termo de pesquisa.
                $resultados = gp2_usuarios::all();
                $resultados = gp2_usuarios::whereRaw('LOWER(nome) ILIKE ?', ["%$termoPesquisa%"])
                    ->orWhereRaw('LOWER(email) ILIKE ?', ["%$termoPesquisa%"])
                    ->get();
            }
            else
            {
                $resultados = gp2_usuarios::all();
            }
            

            $rowsSeguidores = gp2_seguidores::all();
            return view('resultados', ['resultados' => $resultados], compact('userId', 'rowsSeguidores'));
        }
        else
        {
            return view('loginInicial.login');
        }
    }

    public function seguidores(Request $request)
    {
        $userId = session('user_id');
        if($userId)
        {
            $termoPesquisa = $request->input('termo_pesquisa');

            // Execute a pesquisa no banco de dados usando o termo de pesquisa.
            $resultadosSeg = gp2_seguidores::where('id_seguidor', $userId)->get();

            $resultados2 = gp2_usuarios::whereRaw('LOWER(nome) ILIKE ?', ["%$termoPesquisa%"])
            ->orWhereRaw('LOWER(email) ILIKE ?', ["%$termoPesquisa%"])
            ->get();

            $resultadosSeg = gp2_seguidores::where('id_seguidor', $userId)->pluck('id_seguido');
            
            $resultados = $resultados2->whereIn('id_usuario', $resultadosSeg)->all();
            
            $rowsSeguidores = gp2_seguidores::all();

            return view('seguidores', ['resultados' => $resultados], compact('userId', 'rowsSeguidores'));
        }
        else
        {
            return view('loginInicial.login');
        }
    }

    public function seguidores2(Request $request)
    {
        $userId = session('user_id');
        if($userId)
        {
            $termoPesquisa = $request->input('termo_pesquisa');

            // Execute a pesquisa no banco de dados usando o termo de pesquisa.
            $resultadosSeg = gp2_seguidores::where('id_seguido', $userId)->get();

            $resultados2 = gp2_usuarios::whereRaw('LOWER(nome) ILIKE ?', ["%$termoPesquisa%"])
            ->orWhereRaw('LOWER(email) ILIKE ?', ["%$termoPesquisa%"])
            ->get();

            $resultadosSeg = gp2_seguidores::where('id_seguido', $userId)->pluck('id_seguidor');
            
            $resultados = $resultados2->whereIn('id_usuario', $resultadosSeg)->all();
            
            $rowsSeguidores = gp2_seguidores::all();

            return view('seguindo', ['resultados' => $resultados], compact('userId', 'rowsSeguidores'));
        }
        else
        {
            return view('loginInicial.login');
        }
    }

    

}
