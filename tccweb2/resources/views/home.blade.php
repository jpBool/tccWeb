@extends('layout._site')
@section('titulo','Alunos')
@section('conteudo')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{('assets/css/stylehome.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>

<body>
    <div class="main">
        <h1>Para você!</h1>
        @foreach($rows as $row) 
        <div class='project'>
            <div class="titulo">
                <img src="{{'assets/img_tcc/usuario.png'}}" alt="img" id="img-user">
                <label class="label-titulo"> Nova atualização de <div id="nome-autor">{{$row->autores}} </div>. Há 18 horas </label>
            </div>
            
            <div class="conteudo"> 
                <div>
                    <img src="{{'assets/img_tcc/gatinho.png'}}" alt="img" id="img-project" width="280px">
                </div>
                <div class="allConteudo">
                    <h2> {{$row->nome_projeto}} </h2>
                    <div class="conteudo-texto">
                        {{$row->descricao_breve}} 
                        <br>
                        <br>
                        {{$row->data_criacao}} <br>
                        <button type="button" class="button">Show all</button>
                    </div> 
                </div> 
                
            </div>
            <br>
        </div>   
        <br>
        @endforeach 
    </div>
    
</body>
@endsection