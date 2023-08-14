
@extends('layout._site')
@section('titulo','Logar')
@section('conteudo')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{('assets/css/styleProjetoCompleto.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show All</title>
</head>

<body>
    <br><br><br><br><br><br>
    <div class="main">

        <div class="barra-progress">
            <div class="progress">Progress</div>
            <div class="barraPreta">
                <div class="barra" style="width: {{$rows->porcentagem}}%;">
                    
                </div>
            </div>
            <div class="num-porcentagem">{{$rows->porcentagem}}%</div>
        </div>
        {{$rows->id_projeto}};
        {{$rows->id_criador}};
        {{$rows->autores}};
        {{$rows->email_contato}};
        {{$rows->nome_projeto}};
        {{$rows->palavras_chaves}};
        {{$rows->descricao_breve}};
        {{$rows->descricao_detalhada}};
        {{$rows->link_site}};
        {{$rows->status}};
       
        {{$rows->data_criacao}};
        {{$rows->data_atualizacao}};
        {{$rows->atualizador}};
        {{$rows->excluido}};
        {{$rows->linguagem}};
        {{$rows->previsao}};
    </div>
</body>

@endsection 