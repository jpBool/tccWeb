<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request)
    {
        return view("loginInicial.login_back");
        
        
        //$usuarios = gp2_usuarios::get(); 
        
    }
}
