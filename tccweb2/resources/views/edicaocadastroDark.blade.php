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
                    <img src="{{'assets/img_tcc/icon_perfilclaro.svg'}}" alt="img" class="nav-icon">
                    <img src="{{'assets/img_tcc/icon_menu_claro.svg'}}" alt="img" class="nav-icon" id="openSidebarButton">

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

    <script>

        function openSidebar() {
            document.getElementById('sidebar').style.visibility = 'visible';
        };

        function closeSidebar() {
            document.getElementById('sidebar').style.visibility = 'hidden'
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('sidebar').style.visibility = 'hidden'
            document.getElementById('openSidebarButton').addEventListener('click', () => openSidebar());
            document.getElementById('closeSidebarButton').addEventListener('click', () => closeSidebar());
        });

    </script>

</html>