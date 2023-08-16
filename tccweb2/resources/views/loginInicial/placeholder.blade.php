@extends('layout._site')
@section('titulo','Logar')
@section('conteudo')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{('assets/css/stylePerfilUsuario.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>

<body> 
    <div class="main">
        <div class="top">
            <div id="linha-perfil">
                <div class="top-left">
                    <div class="img-perfil">
                        <img src="{{'assets/img_tcc/usuario.png'}}" alt="img" id="img-pess">
                    </div>
                    <div class="seguidores-commits">
                        <div class="seguidores"> 
                                <div class="top-left-left-top-left">
                                    <labeL>134 seguidores</label>
                                </div>
                                <div class="top-left-left-top-right">
                                    <labeL>136 seguindo</label>
                                </div>
                                </div>
                                <div id="linha">
                                </div>
                                <div class="commits">
                                    <label>{{$user->commits}}</label>
                                    <label>commits</label>
                                </div>
                                <div class="data-ativo">
                                    <label>Ativo desde {{$user->inscricao}}</label>
                                </div>
                        </div>
                </div>
                <div clss="top-botton">
                    <label>Nome : {{$user->nome}}</label><br>
                    <label>Email : {{$user->email}}</label>
                </div>
            </div>

            <div class="top-right">
                <div class="linha-bio">
                    <div class="top-right-right">
                        <label>Bio : {{$user->bio}}</label>
                    </div>
                </div>
                <button type="button" class="button-perfil">Editar Perfil</button>
            </div>
            
        </div>

        <div class="projects-perfil">
            <label>Seus Projetos: </label>
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

                        <div class="barra-progress">
                            <div class="progress">Progress</div>
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
                                <button type="button" class="button">Show all</button>
                            </div> 
                        </div> 
                    </div>
                </div> 
                @endforeach 
            <a href="{{route('homeInicial')}}">Home</a>
        </div>
</div>
</body>
@endsection 


