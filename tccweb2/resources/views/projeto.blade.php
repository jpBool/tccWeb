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
                <label>E-mail para contato: <div class="email">{{$rows->email_contato}};</div></label>
                <label>Site do Projeto: <div class="link-site">{{$rows->link_site}};</div></label>
                <br>
                <h2>Status do Projeto: < {{$rows->status}} ></h2>
                <h4>Previsão de Conclusão : < {{$rows->previsao}} > </h4>
                <h4>Linguagem: < {{$rows->linguagem}} > </h4>
                <div class="descricao">
                    <h2>Descrição</h2>
                    {{$rows->descricao_detalhada}};
                </div>

                <h2>Imagens</h2>

                <h2>Vídeo do Projeto</h2>

                <h2>Etapas do Projeto</h2>

                <h2>Colaboradores do Projeto</h2>
                <div class="colaboradores">
                    <h4>{{$rows->id_criador}};</h4>
                </div>

                <div class="palavras-chave">
                    <h2>Palavras Chaves</h2>
                    <h4>{{$rows->palavras_chaves}}</h4>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            {{$rows->id_projeto}};
            {{$rows->excluido}};   
    </div>
</body>
@endsection