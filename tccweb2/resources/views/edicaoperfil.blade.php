<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{('assets/css/styleEdicaoPerfil.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Edição de Perfil</title>
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
                <h2> Editar Perfil </h2>
            </div>
            <div class="userconfig">  
                <img src="{{'assets/img_tcc/joao.svg'}}" alt="foto" class="imgUsuario">      
                <div>
                    <h3> Nome de Usuário </h3>
                    <button type="button" class="button">Alterar foto de perfil</button>
                </div>
            </div>

            <form class="form_altera">

                <div class="divLabel">
                    <label for="nome">Nome:</label>
                    <input class="form_input" type="text" id="nome" name="nome" placeholder="nome">
                </div>
                <div class="divLabel">
                    <label for="TextNat">Naturalidade:</label>
                    <input class="form_input" type="text" id="TextNat" name="TextNat" placeholder="naturalidade">
                </div>
                <div class="divLabel">
                    <label for="TextBio">Biografia:</label>
                    <input class="form_input" type="text" id="TextBio" name="TextBio" placeholder="biografia">
                </div>
            
                <button class="divButton" type="submit">Salvar alterações</button>
            </form>
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