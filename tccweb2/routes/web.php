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


Route::get('/login', ['as' => 'loginInicial.index',
'uses'=>'App\Http\Controllers\UsuariostccController@index']);

Route::post('/logar',
['as'  =>'loginInicial.logar',
 'uses'=>'App\Http\Controllers\UsuariostccController@entrar']);

//Route::post('/logar', ['as' =>'loginInicial.logar', 'uses' => 'App\Http\Controllers\UsuariostccController@login'] );

Route::get('/home',
['as'   =>'homeInicial', 
 'uses' =>'App\Http\Controllers\homeController@showProjects']);

Route::get('/sobre', function () {
    return view('sobre');
});