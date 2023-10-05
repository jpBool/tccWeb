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
                <h1>Progress</h1>
                <div class="barraPreta">
                    <div class="barra" style="width: {{$rows->porcentagem}}%;">
                        
                    </div>
                </div>
                <div class="num-porcentagem">{{$rows->porcentagem}}%</div>
            </div>

            <div class="GroupNomProjeto">
                <div class="nomeProjeto">
                    <h1> {{$rows->nome_projeto}}</h1>
                    {{$rows->descricao_breve}};
                </div>
                <div class="dadosProjeto">
                    Criado por : {{$rows->autores}};
                    <br><br>
                    Criado em : {{$rows->data_criacao}};
                    <br><br>
                    Atualizado por : {{$rows->atualizador}};
                    <br><br>
                    Atualizado em :{{ \Carbon\Carbon::parse($rows->data_atualizacao)->format('Y-m-d H:i') }};
                </div>
            </div>
            <div class="infoAutor"> 
                <div class="text">
                    <div class="autores">
                        <label>Autores: {{$rows->autores}};</label>
                        <label>E-mail para contato: <div class="email">{{$rows->email_contato}};</div></label>
                        <label>Site do Projeto: <div class="link-site"><a href="{{$rows->link_site}}">{{$rows->link_site}} </a></div></label>
                    </div>
                </div>
                <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="icon">
                
                <div class="text">
                    <h2>Status do Projeto: < {{$rowsStatus[$rows->status]->status}} ></h2>

                    <h4>Previsão de Conclusão : < {{$rows->previsao}} > </h4>
                    <h4>Linguagem: < {{$rows->linguagem}} > </h4>
                    <div class="descricao">
                        <h2>Descrição</h2>
                        {{$rows->descricao_detalhada}};
                    </div>
                </div>

                <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="icon">

                <div class="text">
                    <h2>Imagens</h2>
                        @foreach($rowsImagens as $rowI)
                            @if($rowI->id_projeto == $rows->id_projeto)
                            <div id="imagem">
                                <img src="{{$rowI->diretorio}}" alt="img" id="img-project" width="340px">
                            </div>
                            @endif
                        @endforeach
                </div>

                <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="icon">

                <div class="text">
                    <h2>Vídeo do Projeto</h2>
                </div>

                <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="icon">

                <div class="text">
                    <h2>Etapas do Projeto</h2>
                    <iframe src="" id="meuIframe" width="1640" height="700"></iframe>
                </div>
                
                <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="icon">

                <div class="text">
                    <h2>Colaboradores do Projeto</h2>
                    <div class="colaboradores">
                        @foreach($rowsColab as $rowsC)
                            @if($rowsC->id_projeto == $rows->id_projeto)
                                @foreach($rowsUsers as $rowsA)
                                    @if($rowsA->id_usuario == $rowsC->id_colaborador)
                                <div id="linha">
                                    <div class="colabs">
                                        <img src="{{'assets/img_tcc/usuario.png'}}" alt="img" id="img-user" width="50px">
                                        <div class="text-colab">
                                            {{$rowsA->nome}}
                                        </div>
                                        <div class="email-colab">
                                            {{$rowsA->email}}<br>
                                        </div>
                                    </div>
                                </div>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>

                <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="icon">

                <div class="text">
                    <div class="palavras-chave">
                        <h2>Palavras Chaves</h2>
                        <h4>{{$rows->palavras_chaves}}</h4>
                    </div>
                </div>
            </div>
    </div>


    <script>
        // Obtém uma referência ao seu iframe
        var iframe = document.getElementById("meuIframe");

        // Obtém o valor do ID do projeto diretamente do PHP
        var idProjeto = <?php echo json_encode($rows->id_projeto); ?>;

        // Construa a URL com os parâmetros desejados
        var url = "{{ route('ShowEtapas') }}?id_projeto=" + idProjeto;

        // Define a URL do iframe
        iframe.src = url;
    </script>

</body>
@endsection