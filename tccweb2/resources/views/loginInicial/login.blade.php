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
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-right">
                <h1>Bem vindo!</h1>
                <h3>Faça login login para entrar para nosso time</h3>
            </div>
        </div>
    </div>
</body>
</html>          