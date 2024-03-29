
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{('assets/css/styleDark.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <div class="header">
            <nav id="navbar">  
                <ul>
                    <img src="{{'assets/img_tcc/logoclaro.svg'}}" alt="img" class="imglogo">
                </ul>
            </nav>
        </div>

</head>

<body>
    <div class = "main">
    <div class="all">
        <div class="card-login">
            <div class="card-left">
                <h1>Hello!</h1>
                <h3>Sign in to your account</h3>
                <form method="POST" action="{{ route('loginDark') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <div id="but">
                            <button type="submit" id="button">LOGIN</button>
                        </div>
                    </div>
                </form>
                <a href="{{route('cadastro')}}">Você não possui uma conta? Criar</a>
            </div>
            <div class="card-right">
                <h1>Bem vindo!</h1>
                <p>Faça login para entrar para nosso time</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>          