
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

        <div class="top-right"></div>
            <div class="linha-bio">
                <div class="top-right-right">
                    <label>Bio : {{$user->bio}}</label>
                </div>
            </div>
        </div>
        <button type="button" class="button">Editar Perfil</button>
        
        <h1>vc entrou</h1>
            Naturalidade : {{$user->naturalidade }} <br>
            Nascimento : {{$user->nascimento }} <br>
            Telefone : {{$user->telefone }} <br>
        <a href="{{route('homeInicial')}}">Home</a>
    </div>
</body>




