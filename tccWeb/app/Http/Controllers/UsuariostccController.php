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
  
        $xsenha = $request->input('senha');
        $xemail = $request->input('email');

        $rows = gp2_usuarios::all();
        //dd($rows);
        return view('loginInicial.placeholder', compact('rows'), compact('xemail'), compact('xsenha'));
    }
}
