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
    <form method="POST" action="/pesquisar">
        @csrf
        <div class="separador">
            <div class="search-container">
                <input type="text" name="termo_pesquisa" id="searchInput" placeholder="Pesquisar...">
                <button id="searchButton" type="submit" ><img class="lupa" src="{{'assets/img_tcc/lupa.svg'}}"></button>
            </div>
        </div>
        
    </form>

   
    <div class="pessoasProjetos"> 
                <form action="" method="GET">
                    <input type="submit" value="Pessoas" class="button" />
                </form>

                <form action="{{ route('filtrarpesquisa') }}" method="GET">
                    <!-- Outros campos do formulário, se houver -->
                    <input type="hidden" name="id_projeto" value="">
                    <input type="submit" value="Projetos" class="button2" />
                </form>
    </div>
            


                
    

        

       


</div>
</body>

</html>
@endsection 