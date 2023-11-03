@extends('layout._site')
@section('titulo','Perfil')
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
        <div class="allall"> 
            <div class="top">
                <div id="linha-perfil">
                    <div class="top-left">
                        <div class="img-perfil">
                        <img src="assets/img_tcc/iconsPerfil/{{$user->avatar}}.png" alt="img" id="img-pess" >
                        </div>
                        <div class="seguidores-commits">
                            <div class="seguidores"> 
                                <div class="top-left-left-top-left">
                                    <label>seguidores <br> {{$countSeguidor}} </label>
                                </div>
                                <div class="top-left-left-top-right">
                                    <label>seguindo <br> {{$countSeguido}} </label>
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
                    <div class="top-botton">
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
                    @if($user->id_usuario == $userId)
                    <form action="{{ route('editar') }}">
                       
                        <input type="submit" value="Editar" class="button-perfil" />
                    </form>
                    @endif
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="projects-perfil">
                <div class="BackProjects">
                    <br><br>
                    <h1 id="piupiu">Projetos: </h1> <br><br><br>
                    <!--@foreach($rows as $row)
                        <div id="margin-project">   
                            <div class='project'>
                                <div class="titulo">
                                    <img src="assets/img_tcc/iconsPerfil/{{$user->avatar}}.png" alt="img" id="img-pess2">
                                    @foreach($rowsUsers as $rowU)
                                    @if($row->atualizador == $rowU->id_usuario)
                           
                            
                                    <label class="label-titulo"> Nova atualização de 
                                    <a href="{{route('loginInicial.placeholder', ['usuario' => $rowU->id_usuario]) }}" class="a">
                                        <div id="nome-autor">{{ $rowU->nome}}.</div>
                                    </a>
                                    @endif
                                    @endforeach
                                    <label class="label-titulo"> Nova atualização de <div id="nome-autor">{{$row->autores}} </div>. Há 18 horas </label>
                                </div>
                                    
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
                                            <form action="{{route('projetoIsolado')}}">
                                                <input type="hidden" name="id_projeto" value="{{$row->id_projeto}}">
                                                <input type="submit" value="Show All" class="button" />
                                            </form>
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                    @endforeach -->





                   
                    @foreach($rowsColab as $rowC)
                        @foreach($rowsProject as $row)
                            @if($rowC->id_projeto == $row->id_projeto)
                            <div id="margin-project">   
                                <div class='project'>
                                    <div class="titulo">
                                        <img src="assets/img_tcc/iconsPerfil/{{$user->avatar}}.png" alt="img" id="img-pess2">
                                        @foreach($rowsUsers as $rowU)
                                        @if($row->atualizador == $rowU->id_usuario)
                            
                                
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
                                        
                                    </div>
                                        
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
                                                <form action="{{route('projetoIsolado')}}">
                                                    <input type="hidden" name="id_projeto" value="{{$row->id_projeto}}">
                                                    <input type="submit" value="Show All" class="button" />
                                                </form>
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach 
                    @endforeach
                
                </div>
            </div>
        </div>
    </div>

</body>
@endsection 