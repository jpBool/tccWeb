<html>
    <head>
        <style type="text/css">
            .order
            {
                display: block;
                font-family: Helvetica;
            }
            .quadradinho
            {
                background: #BBE1F3;
                border-radius: 10px;
                margin: 10px;
                border: 2px solid black;
                padding: 10px;
                width: 300px;
            }
            .quadradinho h3
            {
                margin-bottom: 0;
            }
            .num-porcentagem
            {
                padding-left: 5px;
            }

            .barraPreta
            {
                box-sizing: border-box;
                width: 22%;
                background-color: white;
                display: block;
                align-self: center;
                text-align: center;
                border: black;
                border-radius: 10px;
                border: 1px solid black;
            }

            .barra-progress{
                width: 990px;
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
        </style>

</head>
<body>
</body>
    </html>

    <div class="order">
        @foreach($row as $row2)
        <div class="quadradinho">
            @if ($row2)
                <h3>{{$row2->nome_grupo}}</h3><br>
                {{$row2->porcentagem}}<br>
                {{$row2->ordenador}}<br>

                <div class="barra-progress">
                <div class="barraPreta">
                    <div class="barra" style="width: {{$row2->porcentagem}}%;">
                        
                    </div>
                </div>
                <div class="num-porcentagem">{{$row2->porcentagem}}%</div>
            </div>
                {{$row2->num_etapas}}<br>
            @else
                <!-- Caso não haja registro correspondente -->
                Não foi encontrado nenhum registro.
            @endif
        </div>
        @endforeach
        </div>
