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
        <div class="espacinho2">
            <form method="POST" action="{{route('Seguidores')}}">
                @csrf
                <div class="separador">
                    <div class="search-container">
                        <input type="text" name="termo_pesquisa" id="searchInput" placeholder="Pesquisar...">
                        <button id="searchButton" type="submit" ><img class="lupa" src="{{'assets/img_tcc/lupa.svg'}}"></button>
                    </div>
                </div>
            </form>

            <div class="lado1">
                <div class="pessoasProjetos"> 
                    <form action="{{route('pesquisausuario')}}" method="GET">
                        <input type="submit" value="Pessoas" class="button" />
                    </form>
                    <form action="{{ route('filtrarpesquisa') }}" method="GET">
                        <!-- Outros campos do formulário, se houver -->
                        <input type="hidden" name="id_projeto" value="">
                        <input type="submit" value="Projetos" class="button2" />
                    </form>
                </div>
            </div>

            <div class="result1">
                @foreach($resultados as $row)
                <div class="result_pess">
                    <a href="{{route('loginInicial.placeholder', ['usuario' => $row->id_usuario]) }}">
                        <img src="assets/img_tcc/iconsPerfil/{{$row->avatar}}.png" alt="img" id="img-user" >
                    </a>
                    <div class="conta">
                        <div id="nome">{{ $row->nome }} </div>
                        <div id="email">{{ $row->email }}</div> 
                    </div>
                    <form action="{{ route('handleFollow')}}" method="GET">
                        @php
                            $seguidor = 0; // Inicializa a variável $seguidor como 0
                        @endphp
                        
                        @foreach($rowsSeguidores as $rowS)
                            @if($rowS->id_seguido == $row->id_usuario)
                                @if($rowS->id_seguidor == $userId)
                                    <input type="submit" value="Deixar de seguir" class="button" />
                                    @php
                                        $seguidor = 1; // Define $seguidor como 1
                                    @endphp
                                    @break
                                @endif
                            @endif
                        @endforeach
                        
                        @if($seguidor == 0)
                            <input type="hidden" name="id_seguido" id="id_seguido" value="{{ $row->id_usuario }}">
                            <input type="submit" value="Seguir" class="button" />
                        @endif
                    </form>

                   
                </div>
                @endforeach
            </div>
        <div>
    </div>
</body>
</html>
@endsection 
