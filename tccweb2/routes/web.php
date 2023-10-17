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
Route::get('/login', ['as' => 'loginInicial.index', 'uses' => 'App\Http\Controllers\UsuariostccController@index']);



// Agrupe apenas as rotas protegidas pelo middleware 'auth' aqui


        Route::get('/home', 
        ['as' => 'homeInicial', 'uses' => 'App\Http\Controllers\homeController@showProjects']);
        
        Route::get('/placeholder', ['as' => 'loginInicial.placeholder', 'uses' => 'App\Http\Controllers\UsuariostccController@enterplaceholder']);

        Route::get('/busca', ['as' => 'pesquisaTotal', 'uses' => 'App\Http\Controllers\UsuariostccController@enterplaceholder']);

        Route::get('/pesquisar', ['as' => 'pesquisarAll', 'uses' => 'App\Http\Controllers\UsuariostccController@showUsers']);


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
            return view('sobre');
        })->name('sobre');
        

        Route::get('/telainicial', function () {
            return view('telainicial');
        })->name('telainicial');

        Route::get('/telainicialDark', function () {
            return view('telainicialDark');
        }); 

        Route::get('/teladownload', function () {
            return view('teladownload');
        })->name('download');

        Route::get('/cadastro', function () {
            return view('cadastro');
        });

        Route::get('/edicaoperfil', function () {
            return view('edicaoperfil');
        })->name('edicaoperfil');

        Route::get('/filtrarpesquisa', function () {
            return view('filtrarpesquisa');
        });

        Route::get('/edicaocadastro', function () {
            return view('edicaocadastro');
        });

        Route::get('/pesquisar', 'App\Http\Controllers\UsuariostccController@pesquisar')->name('pesquisar');

        // Rota para a página de pesquisa
        Route::post('/pesquisar', 'App\Http\Controllers\UsuariostccController@processarPesquisa'); // Rota para processar a pesquisa

        Route::post('/pesquisarProjetos', 'App\Http\Controllers\UsuariostccController@processarProjetos'); // 

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

        Route::get('/perfil/editar', 'App\Http\Controllers\UsuariostccController@editar')->name('perfil.editar');

        Route::post('/perfil/atualizar', 'App\Http\Controllers\UsuariostccController@atualizar')->name('perfil.atualizar');

        Route::get('/filtrarpesquisa', function () {
            return view('filtrarpesquisa');
        })->name('filtrarpesquisa');

        Route::get('pesquisausuario', function () {
            return view('pesquisaUsuarios');
        })->name('pesquisausuario');

        Route::post('/edicaocadastro', function () {
            return view('edicaocadastro');
        })->name('edicaocadastro');


       

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

        Route::get('/edicaocadastroDark', function () {
            return view('edicaocadastroDark');
        });

        Route::get('/edicaoperfilDark', function () {
            return view('edicaoperfilDark');
        });


    // Demais rotas


   
   
