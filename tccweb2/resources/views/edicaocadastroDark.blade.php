<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{('assets/css/styleEdicaoCadastroDark.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Edição de Cadastro</title>
</head>
<body>
    <!-- header -->

    <div class="header">
        <nav id="navbar">  
            <ul>
                <img src="{{'assets/img_tcc/logoclaro.svg'}}" alt="img" class="imglogo">
                <div class="navButtom">
                    <li><a class="links" href="index">Seguindo</a></li>
                    <li><a class="links" href="sobre">Explorar</a></li>
                    <li><a class="links" href="pesquisar.html">Pesquisar</a></li>
                </div>

                <div class="navIcon">
                    <img src="{{'assets/img_tcc/perfilclaro.png'}}" alt="img" class="imgperfil">
                    <img src="{{'assets/img_tcc/confgclaro.png'}}" alt="img" class="imgconfg">
                </div>
            </ul>
        </nav>
    </div> 

    <!-- body -->
    <main>
        <div class="fundo">
            <div class="titulo">
                <h2> Editar Cadastro </h2>
            </div>

            <form class="form_altera">

                <div class="divLabel">
                    <label for="email">Alterar e-mail:</label>
                    <input class="form_input" type="text" id="email" name="email" placeholder="e-mail">
                </div>
                <div class="divLabel">
                    <label for="datanasc">Data de nascimento:</label>
                    <input class="form_input" type="date" id="datanasc" style="width:" name="datanasc">
                </div>
                <div class="divLabel">
                    <label for="senha">Alterar senha:</label>
                    <input class="form_input" type="password" id="senha" name="senha" placeholder="senha">
                </div>
            
                <button class="divButton" type="submit">Salvar alterações</button>
            </form>
        </div>
    </main>
            
    <!-- footer -->
        
    <div class="footer">
        <img src="{{'assets/img_tcc/logoSenseiclaro.svg'}}" alt="img" class="imgfooter">

        <div class="botoesfooter">
            <a href="index.blade.php">Home</a>
            <a href="sobre">Sobre nós</a>
            <a href="pesquisar.html">Download</a>
            <p class="emailequipe">sensei.system7@gmail.com</p>
        </div>
    </div>  
</body>
</html>