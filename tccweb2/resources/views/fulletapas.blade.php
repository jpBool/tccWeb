<html>
    <head>
    <link href="{{('assets/css/stylefulletapas.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Etapas</title>
</head>
<body class="all">
    <div class="so-top">
        <div class="top-all">
            <img src="{{'assets/img_tcc/logo.svg'}}" alt="img" class="imglogo">
            <h1>etapas do projeto place holder</h1>
        </div>
        <div class="top-top-all">
            <div class="one">
                <h4>Criado em : </h4>
                <h4>Criado por : </h4>
            </div>
            <div class="two">
                <h4>Atualizado em : </h4>
                <h4>Atualizado por :</h4>
            </div>
        </div>
    </div>

    @foreach($row as $row2)
        <div class="order">
        <div class="line">
            <div class="quadradinho">
                @if ($row2)
                    <h3>{{$row2->nome_grupo}}</h3>
                    <div class="barra-progress">
                    <div class="barraPreta">
                        <div class="barra" style="width: {{$row2->porcentagem}}%;">
                            
                        </div>
                    </div>
                    <div class="num-porcentagem">{{$row2->porcentagem}}%</div>
                </div>
                <label>N° etapas: {{$row2->num_etapas}}</label>
                <h4>{{$row2->ordenador}}</h4>
                @else
                    <!-- Caso não haja registro correspondente -->
                    Não foi encontrado nenhum registro.
                @endif
            </div>

                @foreach($rowEtapas as $rowE)
                    @if($rowE->id_grupo == $row2->id_grupo)
                    <div class="orderbi">
                        <div class="etapas">
                            <h3>{{$rowE->nome_etapa}}</h3>
                            <h4>Status : {{$rowsStatus[$rowE->status -1]->status}}</h4>
                            <h4>Responsável : {{$rowE->responsavel}}</h4>
                            <h4>Email : {{$rowE->email_responsavel}}</h4>
                            <div class="impact">
                                <h3>Descrição:</h3>
                                <p>{{$rowE->descricao_etapa}}</p>
                            </div>
                            <div class="impact">
                                @if($rowE->descricao_impedimento != null)
                                    <h3>Impedimentos:</h3>
                                    <p>{{$rowE->descricao_impedimento}}</p>
                                @endif
                            </div>
                            <h4>Porcentagem :    {{$rowE->porcentagem}}</h4>
                            <h4>Nível de prioridade : {{$rowE->prioridade}}</h4>
                            <h4>Peso da etapa: {{$rowE->peso}}</h4>
                            <div class="bottom-etapas">
                                <label>Criado em : {{$rowE->data_criacao}}<label>
                                <label>Atualizado em : {{$rowE->data_atualizacao}}<label>
                                <label>Atualizado por : {{$rowE->responsavel}}<label>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach

        </div>
        </div>
    @endforeach

</body>
</html>