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
                <h2> Editar Perfil </h2>
            </div>
            <div class="userconfig">  
                <img src="{{'assets/img_tcc/joao.svg'}}" alt="foto" class="imgUsuario">      
                <div>
                    <h3> Nome de Usuário </h3>
                    <button type="button" class="button">Alterar foto de perfil</button>
                </div>
            </div>

            <form class="form_altera" method="POST" action="{{ route('perfil.atualizar') }}">
                @csrf

                <div class="divLabel">
                    <label for="nome">Nome:</label>
                    <input class="form_input" type="text" id="nome" name="nome" placeholder="Nome" value="{{ $usuario->nome }}">
                </div>

                <div class="divLabel">
                    <label for="TextNat">Naturalidade:</label>
                    <input class="form_input" type="text" id="TextNat" name="TextNat" placeholder="Naturalidade" value="{{ $usuario->naturalidade }}">
                </div>

                <div class="divLabel">
                    <label for="TextBio">Biografia:</label>
                    <textarea class="form_input" id="TextBio" name="TextBio" placeholder="Biografia">{{ $usuario->biografia }}</textarea>
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