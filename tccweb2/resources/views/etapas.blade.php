<html>
    <head>
        <style type="text/css">
            .order
            {
                display: block;
            }
            .quadradinho
            {
                background: #BBE1F3;
                border-radius: 10px;
                margin: 10px;
                border: 2px solid black;
                padding: 10px;
                width: 300px;
                height: 120px;
                font-family: Helvetica;
            }
            .quadradinho h3
            {
                margin-top: 0;
                margin-bottom: 10px;
                text-align: center;
            }
            .quadradinho h4
            {
                margin: 10px;
                float: right;
            }
            .num-porcentagem
            {
                padding-left: 5px;
            }

            .barraPreta
            {
                box-sizing: border-box;
                width: 100%;
                background-color: white;
                display: block;
                align-self: center;
                text-align: center;
                border: black;
                border-radius: 10px;
                border: 1px solid black;
            }

            .barra-progress{
                margin-left: 15px;
                width: 250px;
                display: flex;
                border-radius: 18px;
                padding: 10px;
                color: black;
                background: none;
            }

            .progress{
                padding-left: 0;
                color: black;
                margin-top: 10%;
                position: fixed;
            }

            .barra {
                background-color: #364E65;
                height: 20px;
                border-radius: 10px;
                display: flex;
            }

            .etapas
            {
                background: #BBE1F3;
                width: 400px;
                border: 1px solid black;
                border-radius: 10px;
                padding: 10px;
                margin: 10px;
                font-family: Helvetica;
            }

            .etapas h3
            {
                margin-top: 10px;
            }

            .etapas p
            {
                background: #8AB6D5;
                border-radius: 10px;
                padding: 10px;
            }

            .orderbi
            {
                display: flex;
            }
            
            .line
            {
                width: 400px;
                display: inline-flex;
            }
        </style>

</head>
<body>
        
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
                            <p>{{$rowE->descricao_etapa}}</p>
                            
                        </div>
                    </div>
                    @endif
                @endforeach
        </div>
        </div>
    @endforeach


</body>
</html>