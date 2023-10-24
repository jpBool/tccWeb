    @extends('layout._site')
    @section('titulo','Home')
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
            <div class="allall">
                <h1>Para você!</h1>
                @foreach($rows as $row)
                <div id="margin-project">
                    <div class='project'>
                        <div class="titulo">
                            @foreach($rowsUsers as $rowU)
                                @if($row->atualizador == $rowU->id_usuario)
                                <a href="{{route('loginInicial.placeholder', ['usuario' => $rowU->id_usuario]) }}">
                                    <img src="assets/img_tcc/iconsPerfil/{{$rowU->avatar}}.png" alt="img" id="img-user">
                                </a>
                                
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
                                </label>
                        </div> <!-- titulo -->
                        
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
                                    <div class="progress">Progresso</div>
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
                                    <!--<button href="{{route('projetoIsolado')}}" type="button" class="button">Show all</button> -->
                                
                                    <form action="{{route('projetoIsolado')}}">
                                        <input type="hidden" name="id_projeto" value="{{$row->id_projeto}}">
                                        <input type="submit" value="Mostrar mais" class="button" />
                                    </form>
                                </div> 
                            </div> <!-- allConteudo-->
                        </div> <!-- conteudo -->
                    </div>   <!-- project -->
                </div> <!-- margin-project -->
                @endforeach 
            </div> <!-- allall -->
        </div> <!-- main -->
    </body>
    @endsection 