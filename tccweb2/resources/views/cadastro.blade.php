<!DOCTYPE html>
<html>
    <head>
        <link href="{{('assets/css/stylecadastro.css')}}" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    <body>

        <!-- header -->
  
        <div class="header">
            <nav id="navbar">  
                <ul>
                    <img src="{{'assets/img_tcc/logo.svg'}}" alt="img" class="imglogo">
                    <div class="navButtom">
                        <li><a class="links" href="index">Seguindo</a></li>
                        <li><a class="links" href="sobre">Explorar</a></li>
                        <li><a class="links" href="pesquisar.html">Pesquisar</a></li>
                    </div>

                    <div class="navIcon">
                        <img src="{{'assets/img_tcc/perfil.png'}}" alt="img" class="imgperfil">
                        <img src="{{'assets/img_tcc/confg.png'}}" alt="img" class="imgconfg">
                    </div>
                </ul>
            </nav>
        </div> 

        <!-- body -->
        <main>
            <div class="fundo">

                <div class="titulo">         
                    <h1> Cadastro </h1>
                    <p> Entre conosco para criar projetos incríveis </p>
                </div>

                <form class="form_cadastro">
                    <div class="divLabel">
                        <label for="nome">Nome:</label>
                        <input class="form_input" type="text" id="nome" name="nome" placeholder="nome">
                    </div>
                    <div class="divLabel">
                        <label for="email">Email:</label>
                        <input class="form_input" type="email" id="email" name="email" placeholder="email">
                    </div>
                    <div class="divLabel">
                        <label for="datanasc">Data de nascimento:</label>
                        <input class="form_input" type="date" id="datanasc" style="width:" name="datanasc">
                    </div>
                    <div class="divLabel">
                        <label for="senha">Senha:</label>
                        <input class="form_input" type="password" id="senha" name="senha" placeholder="senha">
                    </div>

                    <label> <input type="checkbox" id="rememberCheckbox"> Lembrar </label>
                
                    <button class="divButton" type="submit">Cadastrar</button>
                </form>

                <p id="loginLink">Já possui uma conta? <a href="#" id="loginLink">Faça login</a></p>
            </div>


        </main>
        <!-- footer -->
        
        <div class="footer">
            <img src="{{'assets/img_tcc/logoSensei.svg'}}" alt="img" class="imgfooter">

            <div class="botoesfooter">
                <a href="index.blade.php">Home</a>
                <a href="sobre">Sobre nós</a>
                <a href="pesquisar.html">Download</a>
                <p class="emailequipe">sensei.system7@gmail.com</p>
            </div>
        </div>  

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