<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\gp2_projetos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\gp2_grupos_etapas;
use App\Models\gp2_etapas;

class homeController extends Controller
{
    
    //
    public function showProjects()
    {
       

            $rows = [];
            $projetos = gp2_projetos::all();
            foreach ($projetos as $projeto) {
                $dataAtualizacao = $projeto->data_atualizacao;
                $dataAtualizacao = Carbon::parse($dataAtualizacao);
                $dataAtual = Carbon::now();
                $diferencaDias = $dataAtual->diffInDays($dataAtualizacao);
                $projeto->diferencaDias = $diferencaDias;
                $rows[] = $projeto;
            }
    
            return view('home', compact('rows'));     
        
         
    }

    public function showUserProjects()
    {
        $rows = gp2_projetos::all();
        return view('home', compact('rows'));
    }

    public function ShowProjectIsoled(Request $request) {
        $projeto = $request->input('id_projeto');
        
        $rows = gp2_projetos::where('id_projeto', $projeto)
        ->orderBy('porcentagem', 'desc')
        ->first();

        
        // Faça algo com $descricao_breve
        
        // Por exemplo, você pode retornar uma view com o valor
        return view('projeto', compact('rows'));
    }

    public function ShowEtapas(Request $request)
    {
        $projeto = $request->input('id_projeto');
        $row = gp2_grupos_etapas::where('id_projeto', $projeto)->get();
        $rowEtapas = [];

            $projetos = gp2_etapas::all();
            foreach ($row as $projetoGrupo) {
                foreach($projetos as $projeto)
                {
                    if($projetoGrupo->id_grupo == $projeto->id_grupo)
                    {
                        $rowEtapas[] = $projeto;
                    }
                    
                    
                }
                
            }
        return view('etapas', compact('row', 'rowEtapas'));
    }
}
