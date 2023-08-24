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
Route::get('/placeholder', ['as' => 'loginInicial.placeholder',
        'uses'=>'App\Http\Controllers\UsuariostccController@enterplaceholder']);

Route::group(['middleware'=>'auth'],function()
{
    Route::get('/', function () {
        return view('loginInicial.login');
    });
});

Route::get('/busca', ['as' => 'pesquisaTotal',
        'uses'=>'App\Http\Controllers\UsuariostccController@enterplaceholder']);

Route::get('/pesquisar', ['as' => 'pesquisarAll', 
'uses'=>'App\Http\Controllers\UsuariostccController@showUsers']);

Route::get('/login', ['as' => 'loginInicial.index',
'uses'=>'App\Http\Controllers\UsuariostccController@index']);

Route::post('/logar',
['as'  =>'loginInicial.logar',
 'uses'=>'App\Http\Controllers\UsuariostccController@entrar']);

//Route::post('/logar', ['as' =>'loginInicial.logar', 'uses' => 'App\Http\Controllers\UsuariostccController@login'] );

Route::get('/home',
['as'   =>'homeInicial', 
 'uses' =>'App\Http\Controllers\homeController@showProjects']);

 Route::get('/projetoUser',
['as'   =>'projetoIsolado', 
 'uses' =>'App\Http\Controllers\homeController@showProjectIsoled']);

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/telainicial', function () {
    return view('telainicial');
});

Route::get('/teladownload', function () {
    return view('teladownload');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/edicaoperfil', function () {
    return view('edicaoperfil');
});