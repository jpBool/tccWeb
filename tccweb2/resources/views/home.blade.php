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
            <br><br><br><br><br>
            
            <div class="allall">
            <h1>Para você!</h1>
            @foreach($rows as $row)
            <div id="margin-project">
                <div class='project'>
                    <div class="titulo">
                        <img src="{{'assets/img_tcc/usuario.png'}}" alt="img" id="img-user">
                        
                        <label class="label-titulo"> Nova atualização de <div id="nome-autor">{{ $row->autores }}</div>. 

                                            @if($row->diferencaDias > 0)
                            Há {{ $row->diferencaDias }} {{ Str::plural('dia', $row->diferencaDias) }}
                        @else
                            <?php
                                $dataAtualizacao = \Carbon\Carbon::parse($row->data_atualizacao);
                                echo 'Há ' . $dataAtualizacao->diffForHumans();
                            ?>
                        @endif

                        </label>
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
                                <!--<button href="{{route('projetoIsolado')}}" type="button" class="button">Show all</button> -->
                            
                                <form action="{{route('projetoIsolado')}}">
                                    <input type="hidden" name="id_projeto" value="{{$row->id_projeto}}">
                                    <input type="submit" value="Show All" class="button" />
                                </form>
                            </div> 
                        </div> 
                        
                    </div>
                    <br>
                </div>   
            </div>   
            <br>
            @endforeach 
            </div>
            
        </div>
    </body>
    @endsection 