
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="{{('assets/css/style.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <div class="header">
            <nav id="navbar">  
                <ul>
                    <img src="{{'assets/img_tcc/logo.svg'}}" alt="img" class="imglogo">
                    <div class="navButtom">
                        <li><a class="links" href="index">Seguindo</a></li>
                        <li><a class="links" href="{{route('homeInicial')}}">Explorar</a></li>
                        <li><a class="links" href="{{route('pesquisausuario') }}">Pesquisar</a></li>
                    </div>

                    <div class="navIcon">
                        <img src="{{'assets/img_tcc/perfil.png'}}" alt="img" class="imgperfil">
                        <img src="{{'assets/img_tcc/confg.png'}}" alt="img" class="imgconfg">
                    </div>
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
                <form method="POST" action="{{ route('login') }}">
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
                        <button type="submit">Login</button>
                    </div>
                </form>
                <p>Você não possui uma conta? Criar</p>
            </div>
            <div class="card-right">
                <h1>Bem vindo!</h1>
                <h3>Faça login login para entrar para nosso time</h3>
            </div>
        </div>
    </div>
    <div class="footer">
                <img src="{{'assets/img_tcc/logoSensei.svg'}}" alt="img" class="imgfooter">

                <div class="botoesfooter">
                <a href="index.blade.php">Home</a>
                <a href="sobre">Sobre nós</a>
                <a href="pesquisar.html">Download</a>
                <p class="emailequipe">sensei.system7@gmail.com</p>
                </div>
    </div>
</div>
</body>
</html>          