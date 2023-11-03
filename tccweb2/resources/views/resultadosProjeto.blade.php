@extends('layout._site')
@section('titulo','Pesquisar')
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
                <form action="{{route('pesquisarU')}}" method="GET">
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
                <div id="margin-project">
                    <div class='project'>
                        <div class="titulo">
                            @foreach($rowsUsers as $rowU)
                                @if($row->atualizador == $rowU->id_usuario)
                                <a href="{{route('loginInicial.placeholder', ['usuario' => $rowU->id_usuario]) }}">
                                    <img src="assets/img_tcc/iconsPerfil/{{$rowU->avatar}}.png" alt="img" id="img-user2">
                                </a>
                                
                                <label class="label-titulo"> Nova atualização de 
                                <a href="{{route('loginInicial.placeholder', ['usuario' => $rowU->id_usuario]) }}" class="a">
                                    <div id="nome-autor">{{ $rowU->nome}}.</div>
                                </a>
                                @endif
                            @endforeach
                        
                                    @if($row->diferencaDias > 0)
                                    Há {{ $row->diferencaDias }} {{ Str::plural('dia', $row->diferencaDias) }}
                                    @else
                                        <?php
                                            $dataAtualizacao = \Carbon\Carbon::parse($row->data_atualizacao);
                                            echo 'Há ' . $dataAtualizacao->diffForHumans();
                                        ?>
                                    @endif
                                </label>
                        </div> <!-- titulo -->
                        
                        <div class="conteudo"> 
                            <div class="foto">
                                @php
                                    $countMatches = 0; // Variável de contagem
                                @endphp

                                @foreach($rowsImagens as $rowI)
                                    @if($rowI->id_projeto == $row->id_projeto)
                                        @if($rowI->imagem_principal == true)
                                            <img src="{{$rowI->diretorio}}" alt="img" id="img-project" width="340px">
                                        @endif
                                        @php
                                            $countMatches ++; // Incrementa a contagem quando encontra um match
                                        @endphp
                                    @endif
                                @endforeach

                                @if($countMatches === 0)
                                    <img src="{{'assets/img_tcc/gatinho.png'}}" alt="img" id="img-project" width="340px">
                                @endif
                            </div>

                            <div class="allConteudo">
                                <h2> {{$row->nome_projeto}} </h2>
                                <div class="barra-progress">
                                    <div class="progress">Progresso</div>
                                        <div class="barraPreta">
                                            <div class="barra" style="width: {{$row->porcentagem}}%;">

                                            </div>
                                        </div>
                                        <div class="num-porcentagem">{{$row->porcentagem}}%</div>
                                </div>
                                
                                <div class="conteudo-texto">
                                    {{$row->descricao_breve}} 
                                    <br>
                                    <br>
                                    {{$row->data_criacao}} <br>
                                    <!--<button href="{{route('projetoIsolado')}}" type="button" class="button">Show all</button> -->
                                
                                    <form action="{{route('projetoIsolado')}}">
                                        <input type="hidden" name="id_projeto" value="{{$row->id_projeto}}">
                                        <input type="submit" value="Mostrar mais" class="button" />
                                    </form>
                                </div> 
                            </div> <!-- allConteudo-->
                        </div> <!-- conteudo -->
                    </div>   <!-- project -->
                </div> <!-- margin-project -->
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
                            <input class="buttons" type="reset" value="LIMPAR FILTROS">
                            <input class="buttons" type="submit" value="CANCELAR">
                            <input class="buttons" type="submit" value="APLICAR FILTRO">
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