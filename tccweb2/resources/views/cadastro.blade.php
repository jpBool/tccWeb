<!DOCTYPE html>
<html>
    <head>
        <link href="{{('assets/css/stylecadastro.css')}}" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Cadastro</title>

        <div class="header">
            <nav id="navbar">  
                <ul>
                    <img src="{{'assets/img_tcc/logo.svg'}}" alt="img" class="imglogo">
                </ul>
            </nav>
        </div>
    </head>
    <body>
        <main>
        <div class="all">
            <div class="fundo">

                <div class="titulo">         
                    <h1> Cadastro </h1>
                    <p> Entre conosco para criar projetos incríveis </p>
                </div>

                <form class="form_cadastro" method="POST" action="{{ route('cadastro.store') }}">
                    @csrf <!-- Adicione o token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->

                    <div class="divLabel">
                        <label for="nome">Nome:</label>
                        <input class="form_input" type="text" id="nome" name="nome" placeholder="nome" value="{{ old('nome') }}">
                        @error('nome')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="divLabel">
                        <label for="email">Email:</label>
                        <input class="form_input" type="email" id="email" name="email" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="divLabel">
                        <label for="datanasc">Data de nascimento:</label>
                        <input class="form_input" type="date" id="datanasc" name="datanasc" value="{{ old('datanasc') }}">
                        @error('datanasc')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="divLabel">
                        <label for="senha">Senha:</label>
                        <input class="form_input" type="password" id="senha" name="senha" placeholder="senha">
                        @error('senha')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <label><input type="checkbox" id="rememberCheckbox"> Lembrar</label>

                    <button class="divButton" type="submit">Cadastrar</button>
                </form>


                <p id="loginLink">Já possui uma conta? <a href="{{route('loginInicial.index')}}" id="loginLink">Faça login</a></p>
            </div>
        </div>
        </main>
    </body>

    <script>
        document.addEventListener('scroll', () => {
            let scrollVertical = window.pageYOffset;
            const header = document.getElementById('navbar');
            if(scrollVertical > 300) {
                header.style.backgroundColor = 'white';
                console.log(`Scroll vertical:`, header);
            } else {
                header.style.backgroundColor = 'transparent';
            }

        }) 
    </script>
</html>