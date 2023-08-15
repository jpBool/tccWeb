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
    <div class="main">
            <div class="barra-progress">
                <div class="progress">Progress</div>
                <div class="barraPreta">
                    <div class="barra" style="width: {{$rows->porcentagem}}%;">
                        
                    </div>
                </div>
                <div class="num-porcentagem">{{$rows->porcentagem}}%</div>
            </div>

            <div class="GroupNomProjeto">
                <div class="nomeProjeto">
                    <h1>< {{$rows->nome_projeto}} ></h1>
                    {{$rows->descricao_breve}};
                </div>
                <div class="dadosProjeto">
                    Criado por : {{$rows->id_criador}};
                    <br><br>
                    Criado em : {{$rows->data_criacao}};
                    <br><br>
                    Atualizado por : {{$rows->atualizador}};
                    <br><br>
                    Atualizado em :{{ \Carbon\Carbon::parse($rows->data_atualizacao)->format('Y-m-d H:i') }};
                </div>
            </div>
            <div class="infoAutor"> 
                <div class="autores">Autores: {{$rows->autores}};</div>
                <div class="email">E-mail para contato: {{$rows->email_contato}};</div>
                <div>Site do Projeto: {{$rows->link_site}};</div>
                <br>
                <h2>Status do Projeto: < {{$rows->status}} ></h2>
                <h4>Previsão de Conclusão : < {{$rows->previsao}} > </h4>
                <h4>Linguagem: < {{$rows->linguagem}} > </h4>
                <div class="descricao"> 
                    {{$rows->descricao_detalhada}};
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            {{$rows->id_projeto}};
            {{$rows->id_criador}};
            
            {{$rows->palavras_chaves}};
            
            
        
            
        
            
            {{$rows->excluido}};   
    </div>
</body>
@endsection