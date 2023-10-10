@extends('layout._site')
@section('titulo','Home')
@section('conteudo')

<!DOCTYPE html>
<html>
    <head>
    <link href="{{('assets/css/stylefiltrar.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    @vite(['resources/js/pesquisa.js'])
    <title>Pesquisar</title> 
    </head>


<body class="body">

<div class="espacinho">
    <form method="POST" action="/pesquisarProjetos">
            @csrf
            <div class="separador">
                <div class="search-container">
                    <input type="text" name="termo_pesquisa" id="searchInput" placeholder="Pesquisar...">
                    <button id="searchButton" type="submit" ><img class="lupa" src="{{'assets/img_tcc/lupa.svg'}}"></button>
                </div>
            </div>
            
        </form>

        <div class="filtrar">
            <div class="filtro"><img class="filter" src="{{'assets/img_tcc/filtersearch.svg'}}"></img></div>
            <div class="textfiltro">Filtrar Pesquisa</div>
        </div>
    </div>

    <div>
        <div class="pessoasProjetos"> 
                <form action="{{route('pesquisausuario') }}" method="GET">
                    <input type="submit" value="Pessoas" class="button2" />
                </form>

                <form action="{{route('projetoIsolado')}}">
                    <input type="hidden" name="id_projeto" value="">
                    <input type="submit" value="Projetos" class="button" />
                </form>
        </div>
            <div class="center">  
                <div class="quad">
                <form method="POST" aaction="/pesquisarProjetos">
                        @csrf
                     <!-- Outros campos do formulário, se houver -->
                     <div class="separador">
                <div class="search-container">
                    <input type="text" name="termo_pesquisa" id="searchInput" placeholder="Pesquisar...">
                    <button id="searchButton" type="submit" ><img class="lupa" src="{{'assets/img_tcc/lupa.svg'}}"></button>
                </div>
            </div>
                    <div class="status">
                        <label for="status">Status de Projeto:</label>
                        <select id="status" name="status">
                            <option value="em-andamento">Em Andamento</option>
                            <option value="concluido">Concluído</option>
                        </select>
                    </div>
                    
                        <div class="Porcentagem">
                            <p id="lado0">Porcentagem:</p>
                            <label for="porcentagem" id="lado" >Maior que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                            <label for="porcentagem" id="lado2" >Menor que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                        </div>
                    
                        <div class="datatt">
                            <p id="lado0">Data de Atualização:</p>
                            <label for="porcentagem" id="lado" >Maior que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                            <label for="porcentagem" id="lado2" >Menor que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                        </div>

                        <div class="botoesform">
                        <input class="buttons" type="reset" value="">
                        <input class="buttons" type="submit" value="">
                        <input class="buttons" type="submit" value="">
                        </div>
                </form>
                
                </div>
                
                
            </div>

           
                
        <div>

    <div class="result">
        @foreach($resultados as $row)
        <div class="result_pess">
            <div class="conta">
                <div id="nome">{{ $row->nome_projeto }}</div>
            </div>
        </div>
            <input type="submit" value="Segue você" class="button" />
            <input type="submit" value="Seguir de volta" class="button" />
        @endforeach
    </div>
</body>

</html>
@endsection 