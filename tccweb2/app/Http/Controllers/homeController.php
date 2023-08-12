<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\gp2_projetos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class homeController extends Controller
{
    //
    public function showProjects()
    {
        $rows = gp2_projetos::all();
        return view('home', compact('rows'));
    }

    public function showUserProjects()
    {
        $rows = gp2_projetos::all();
        return view('home', compact('rows'));
    }

    public function showProjectIsoled(Request $req)
    {
        $rows = gp2_projetos::where('id_projeto', $req->id_projeto) -> first();
        return view('projeto', compact('rows'));
    }
}
