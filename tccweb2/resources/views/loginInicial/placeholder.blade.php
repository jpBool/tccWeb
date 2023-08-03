
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
            <div class="top-left">
                <div class="top-left-left">
                <img src="{{'assets/img_tcc/usuario.png'}}" alt="img" id="img-pess">
                    <div class="top-left-left-top-left">
                        <labeL>134 seguidores</label>
                    </div>
                    <div class="top-left-left-top-right">
                        <labeL>136 seguidores</label>
                    </div>
                </div>
            </div>
            <div class="top-left-left-botton">
                        <label>
                            Nome : {{$user->nome }} <br>
                            Email : {{$user->email }} <br>
                        </label>
                    </div>
            <div class="top-right">
            </div>
        </div>
        <h1>vc entrou</h1>
            
            
            Bio : {{$user->bio }} <br>
            Naturalidade : {{$user->naturalidade }} <br>
            Nascimento : {{$user->nascimento }} <br>
            Telefone : {{$user->telefone }} <br>
        <a href="{{route('homeInicial')}}">Home</a>
    </div>
</body>




