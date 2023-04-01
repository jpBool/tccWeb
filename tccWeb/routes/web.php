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

Route::post('/login', ['uses' => 'App\Http\Controllers\Controller@login'] );

Route::post('/conexao', ['uses' => 'App\Http\Controllers\Controller@conexao'] );

Route::post('/auth', ['uses' => 'App\Http\Controllers\UserController@auth' ] )->name('auth.gp2_usuarios');
