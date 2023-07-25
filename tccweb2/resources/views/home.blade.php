<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{('assets/css/stylehome.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>

<body>
    @foreach($rows as $row)
    <img src="{{'assets/img_tcc/logo.png'}}" alt="img" id="img-logo">
    <div class='project'>  
        <h4>Nova atualização de {{$row->autores}} </h4> --- {{$row->nome_projeto}} <br>
        {{$row->email_contato}} <br>
        {{$row->descricao_breve}} 
    </div>
    <br>
    @endforeach  
</body>
