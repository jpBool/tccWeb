<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Defina as rotas fora do grupo 'auth'
Route::get('/', function () {
    return view('loginInicial.login');
});

Route::post('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\UsuariostccController@login']);

Route::get('/sair', ['as' => 'sair', 'uses' => 'App\Http\Controllers\UsuariostccController@sair']);

Route::get('/login', ['as' => 'loginInicial.index', 'uses' => 'App\Http\Controllers\UsuariostccController@index']);



// Agrupe apenas as rotas protegidas pelo middleware 'auth' aqui


        Route::get('/home', ['as' => 'homeInicial', 'uses' => 'App\Http\Controllers\homeController@showProjects']);

        Route::get('/follow', ['as' => 'handleFollow', 'uses' => 'App\Http\Controllers\UsuariosTccController@handleFollow']);
        
        Route::get('/unfollow', ['as' => 'handleUnfollow', 'uses' => 'App\Http\Controllers\UsuariosTccController@handleUnfollow']);

        Route::get('/placeholder', ['as' => 'loginInicial.placeholder', 'uses' => 'App\Http\Controllers\UsuariostccController@enterplaceholder']);

        Route::get('/busca', ['as' => 'pesquisaTotal', 'uses' => 'App\Http\Controllers\UsuariostccController@enterplaceholder']);

       


Route::get('/edicaoperfilDark', function () {
    return view('edicaoperfilDark');
});

Route::get('/homeDark', function () {
    return view('homeDark');
});
        Route::post('/logar', ['as' => 'loginInicial.logar', 'uses' => 'App\Http\Controllers\UsuariostccController@entrar']);

        

        Route::get('/projetoUser', ['as' => 'projetoIsolado', 'uses' => 'App\Http\Controllers\homeController@showProjectIsoled']);

        Route::get('/Etapas', ['as' => 'ShowEtapas', 'uses' => 'App\Http\Controllers\homeController@ShowEtapas']);
        Route::get('/EtapasFull', ['as' => 'ShowEtapasFull', 'uses' => 'App\Http\Controllers\homeController@ShowEtapasFull']);

        Route::get('/sobre', 
            function () {
            $userId = session('user_id');
            return view('sobre', compact('userId'));
        })->name('sobre');
        

        Route::get('/telainicial', function () {
            return view('telainicial');
        })->name('telainicial');

        Route::get('/telainicialDark', function () {
            return view('telainicialDark');
        }); 

        Route::get('/teladownload', function () {
            $userId = session('user_id');
            return view('teladownload', compact('userId'));
        })->name('download');

        Route::get('/cadastro', function () {
            return view('cadastro');
        })->name('cadastro');

        Route::get('/edicaoperfil', function () {
            return view('edicaoperfil');
        })->name('edicaoperfil');

        Route::get('/filtrarpesquisa', function () {
            $userId = session('user_id');
            return view('filtrarpesquisa', compact('userId'));
        });

     

       // Route::get('/pesquisar', 'App\Http\Controllers\UsuariostccController@pesquisar')->name('pesquisar');

        // Rota para a página de pesquisa
        Route::get('/pesquisar', 'App\Http\Controllers\UsuariostccController@processarPesquisa')->name('pesquisarU'); 

        Route::get('/seguidores', 'App\Http\Controllers\UsuariostccController@seguidores')->name('Seguidores');
        Route::get('/seguindo', 'App\Http\Controllers\UsuariostccController@seguidores2')->name('Seguidores2');/// Rota para processar a pesquisa

        Route::post('/pesquisarProjetos', 'App\Http\Controllers\UsuariostccController@processarProjetos'); // 

        Route::post('/upload-foto', 'App\Http\Controllers\UsuariostccController@store')->name('store');
        Route::get('/teladownloadDark', function () {
            return view('teladownloadDark');
        });

        Route::get('/cadastroDark', function () {
            return view('cadastroDark');
        });

        Route::get('/sobreDark', function () {
            return view('sobreDark');
        });

        Route::post('/cadastrar', 'App\Http\Controllers\UsuariostccController@cadastrar')->name('cadastro.store');

        Route::get('/editar', 'App\Http\Controllers\UsuariostccController@editar')->name('editar');

        Route::post('/atualizar', 'App\Http\Controllers\UsuariostccController@atualizar')->name('perfil.atualizar');

        Route::post('/atualizarCadastro', 'App\Http\Controllers\UsuariostccController@atualizarCadastro')->name('perfil.atualizarCadastro');

        Route::get('/filtrarpesquisa', function () {
            $userId = session('user_id');
            return view('filtrarpesquisa', compact('userId'));
        })->name('filtrarpesquisa');

        Route::get('pesquisausuario', function () {
            $userId = session('user_id');
            return view('pesquisaUsuarios', compact('userId'));
        })->name('pesquisausuario');

        Route::get('/edicaocadastro', 'App\Http\Controllers\UsuariostccController@editarCadastro')->name('edicaocadastro');
        /*
        Route::get('/edicaocadastro', function () {
            $userId = session('user_id');
            return view('edicaocadastro', compact('userId'));
        })->name('edicaocadastro'); */


       

        Route::get('/teladownloadDark', function () {
            return view('teladownloadDark');
        });

        Route::get('/cadastroDark', function () {
            return view('cadastroDark');
        })->name('cadastroDark');

        Route::get('/sobreDark', function () {
            return view('sobreDark');
        });

        Route::post('/cadastrar', 'App\Http\Controllers\UsuariostccController@cadastrar')->name('cadastro.store');

        Route::get('/edicaocadastroDark', function () {
            return view('edicaocadastroDark');
        });

        Route::get('/edicaoperfilDark', function () {
            return view('edicaoperfilDark');
        });


    // Demais rotas


   
   
