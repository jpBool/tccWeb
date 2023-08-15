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

    <div class="conteudo">
        <div class="titulo">         
            <h1> Create Account </h1>
            <p> Join us to create amazing projects </p>
        </div>

        <p>Nome</p>
        <p>username</p>
        <p>Email</p>
        <p>email</p>
        <p>Data de nascimento</p>
        <p>dd/mm/aaaa</p>
        <p>Senha</p>
        <p>senha</p>

    </div>

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