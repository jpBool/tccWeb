<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{('assets/css/stylehome.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>

<body >
    @foreach($rows as $row) 
    <div class='project'>
        <div class="titulo">
            <img src="{{'assets/img_tcc/usuario.png'}}" alt="img" id="img-user">
            <label class="label-titulo"> Nova atualização de <div id="nome-autor">{{$row->autores}} </div>. Há 18 horas </label>
        </div>
        
        <div class="conteudo"> 
            <div>
                <img src="{{'assets/img_tcc/gatinho.png'}}" alt="img" id="img-project" width="200px">
            </div>
            <div class="conteudo-texto">
                <h2> {{$row->nome_projeto}} </h2>
                {{$row->descricao_breve}} 
                <br>
                {{$row->data_criacao}}
            </div> 
        </div>
        <br>
    </div>
    <br>
    @endforeach  
</body>
