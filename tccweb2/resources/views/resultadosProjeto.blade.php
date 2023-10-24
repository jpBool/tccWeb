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
<div class="main">
<div class="quad-bonito">
    <div class="quad-bonito2">
        <div class="ladolado">
            <div class="espacinho3">
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
        </div>

        <div class="lado">
            <div class="pessoasProjetos2"> 
                <form action="{{route('pesquisausuario') }}" method="GET">
                    <input type="submit" value="Pessoas" class="button2" />
                </form>

                <form action="{{route('projetoIsolado')}}">
                    <input type="hidden" name="id_projeto" value="">
                    <input type="submit" value="Projetos" class="button" />
                </form>
            </div>
        </div>
        <div class="teste">

            <div class="result">
                @foreach($resultados as $row)
                <div class="result_pess">
                    <div class="conta">
                        <div id="nome">{{ $row->nome_projeto }}</div>
                    </div>
                    <input type="submit" value="Segue você" class="button" />
                    <input type="submit" value="Seguir de volta" class="button" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
            <div class="quad-result">  
                <div class="quad">
                    <form method="POST" aaction="/pesquisarProjetos">
                            @csrf
                        <!-- Outros campos do formulário, se houver -->
                        <div class="mindi">
                            <div class="conto">
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
                            <div id="block">
                                <div id="lado">
                                    <label for="porcentagem">Maior que:</label>
                                    <div id="porcentagem">
                                        <input type="number" name="porcentagem" min="0" max="100">
                                    </div>
                                </div>
                                <div id="lado2">
                                    <label for="porcentagem">Menor que:</label>
                                    <div id="porcentagem">
                                        <input type="number" name="porcentagem" min="0" max="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="datatt">
                            <p id="lado0">Data de Atualização:</p>
                                <div id="block">
                                    <div id="lado">
                                        <label for="porcentagem">Maior que:</label>
                                        <div id="porcentagem">
                                            <input type="number" name="porcentagem" min="0" max="100">
                                        </div>
                                    </div>
                                    <div id="lado2">
                                        <label for="porcentagem">Menor que:</label>
                                        <div id="porcentagem">
                                            <input type="number" name="porcentagem" min="0" max="100">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="botoesform">
                            <input class="buttons" type="reset" value="Dó">
                            <input class="buttons" type="submit" value="Ré">
                            <input class="buttons" type="submit" value="Mi">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</body>
</html>
@endsection 