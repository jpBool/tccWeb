<?php

namespace App\Http\Controllers;

use App\Models\usuariostcc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\usuariostcc;

class UsuariostccController extends Controller
{
    //
    public function login()
    {
        $rows = usuariostcc::all();
        return view('loginInicial.placeholder', compact('rows'));
    }
}
