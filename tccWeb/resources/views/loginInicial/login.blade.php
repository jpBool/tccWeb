<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{('assets/css/style.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>

<body>
    <div class = "main-login">
    <img src="{{'assets/img_tcc/logo.png'}}" alt="img" id="img-logo">

        <div class="card-login">
            <div class="card-left">
                <h1>Hello!</h1>
                <h3>Sign in to your account</h3>
                <form method="post" action="{{route('loginInicial.logar')}}">
                    {{csrf_field() }}
                    <div class="formEmail">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Email" id="email">
                    </div> 
                    <br>
                    <div class="formSenha">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" id="senha">
                    </div>
                    <br>
                        <input type="submit" value="logar" class="botaoLogin">
                <form>
            </div>
            <div class="card-right">
                <h1>Bem vindo!</h1>
                <h3>Faça login login para entrar para nosso time</h3>
            </div>
        </div>
    </div>
</body>
</html>          