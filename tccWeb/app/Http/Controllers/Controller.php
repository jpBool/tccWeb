<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function enter()
    {
        return view("loginInicial.login");
    }
    public function login()
    {
        return view("loginInicial.login_back");
    }
    public function conexao()
    {
        return view("loginInicial.conexao");
    }

    
}

