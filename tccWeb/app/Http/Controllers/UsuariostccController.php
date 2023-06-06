<?php

namespace App\Http\Controllers;

use App\Models\gp2_usuarios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\usuariostcc;

class UsuariostccController extends Controller
{
    //
    public function login(Request $request)
    {
  
        $senha = $request->input('senha');
        $email = $request->input('email');

        $rows = gp2_usuarios::all();
        //dd($rows);
        return view('loginInicial.placeholder', compact('rows'), compact('email'), compact('senha'));
    }
}
