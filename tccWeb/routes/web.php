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

Route::get('/', function () {
    return view('loginInicial.login');
});

Route::post('/logar',
['as'  =>'loginInicial.logar',
 'uses'=>'App\Http\Controllers\UsuariostccController@login']);

//Route::post('/logar', ['as' =>'loginInicial.logar', 'uses' => 'App\Http\Controllers\UsuariostccController@login'] );

Route::get('/sobre', function () {
    return view('sobre.blade.php');
});