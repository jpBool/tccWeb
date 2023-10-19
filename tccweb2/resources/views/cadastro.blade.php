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
                        <img src="{{'assets/img_tcc/icon_perfilescuro.svg'}}" alt="img" class="nav-icon">
                        <img src="{{'assets/img_tcc/icon_menu.svg'}}" alt="img" class="nav-icon" id="openSidebarButton">

                        <div class="sidebar" id="sidebar">
                            <!-- Conteúdo da barra lateral -->
                            <img src="{{'assets/img_tcc/icon_close.svg'}}" alt="img" class="nav-icon" id="closeSidebarButton" style="width: 20px">

                            <a href="#" class="integracao-button"> 
                                <img src="{{'assets/img_tcc/icon_logout.svg'}}" alt="img" class="sidebar-i">
                                <span>Logout</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_perfilescuro.svg'}}" alt="img" class="sidebar-i">
                                <span>Perfil</span>
                            </a>

                            <a href="#" class="integracao-button"> 
                                <img src="{{'assets/img_tcc/icon_search.svg'}}" alt="img" class="sidebar-i">
                                <span>Pesquisar</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_global.svg'}}" alt="img" class="sidebar-i">
                                <span>Explorar</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_notification.svg'}}" alt="img" class="sidebar-i">
                                <span>Seguindo</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_user_add.svg'}}" alt="img" class="sidebar-i">
                                <span>Seguidores</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_download.svg'}}" alt="img" class="sidebar-i">
                                <span>Download</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_user_edit.svg'}}" alt="img" class="sidebar-i">
                                <span>Editar perfil</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_lock.svg'}}" alt="img" class="sidebar-i">
                                <span>Editar cadastro</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_confg.svg'}}" alt="img" class="sidebar-i">
                                <span>Configurações</span>
                            </a>

                            <a href="#" class="integracao-button">
                                <img src="{{'assets/img_tcc/icon_people.svg'}}" alt="img" class="sidebar-i">
                                <span>Sobre</span>
                            </a>
                        </div>
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

                <form class="form_cadastro" method="POST" action="{{ route('cadastro.store') }}">
                    @csrf <!-- Adicione o token CSRF para proteção contra ataques de falsificação de solicitação entre sites -->
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
                        <input class="form_input" type="date" id="datanasc" name="datanasc">
                    </div>
                    <div class="divLabel">
                        <label for="senha">Senha:</label>
                        <input class="form_input" type="password" id="senha" name="senha" placeholder="senha">
                    </div>

                    <label> <input type="checkbox" id="rememberCheckbox"> Lembrar </label>

                    <button class="divButton" type="submit">Cadastrar</button>
                </form>

                <p id="loginLink">Já possui uma conta? <a href="{{route('loginInicial.index')}}" id="loginLink">Faça login</a></p>
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