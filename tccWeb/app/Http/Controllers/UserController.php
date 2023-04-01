<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request)
    {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    
            $stringdeconexao = "host=pgsql.projetoscti.com.br
                        port=5432
                        dbname=projetoscti9
                        user=projetoscti9
                        password=eq273b294";
    
        $conecta = pg_connect($stringdeconexao);
    
        $sql = "select * from gp2_usuarios where email = '$email' and senha = '$senha' ";
        //return view("loginInicial.login_back");
        
        
        //$usuarios = gp2_usuarios::get(); 
        
    }
}
