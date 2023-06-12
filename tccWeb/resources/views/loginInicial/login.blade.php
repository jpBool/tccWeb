<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="('assets/css/style.css')" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>

<body>
    <div class = "main-login">
        <div class="card-login">
            <h1>L O G I N</h1>
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
        <div>
    </div>
</body>
</html>          