<!DOCTYPE html>
<html>
    <head>
    <link href="{{('assets/css/styledownload.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Download</title>
    </head>

<body>

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
                            <img src="{{'assets/img_tcc/icon_home.svg'}}" alt="img" class="sidebar-i">
                            <span>Home</span>
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

    <div class="main">

    <div class="Titulo">
        <h1> Download Sensei</h1>
    </div>
    
    <div class="conteudo">
        <div class="download">
            <div class="subtitulo"> 
                <h2>Download Sensei para Windows</h2>
            </div>

            
            <img src="{{'assets/img_tcc/download.png'}}" alt="img" class="imgdownload">
            

            <button type="button" class="button">Download</button>

        </div>
        
        <div class="textos">
            <h2>Quais as vantagens de baixar o nosso sistema?</h2>
                <p class="textin">Nosso site oferece diversas vantagens para os usuários que buscam explorar 
                    o potencial da tecnologia. 
                    Ao identificar as 
                    necessidades individuais dos clientes em relação à tecnologia, proporcionamos soluções direcionadas e eficazes. 
                    Além disso, estamos comprometidos
                    em auxiliar as pessoas na resolução de problemas sociais por meio 
                    da inovação tecnológica, promovendo um impacto positivo na sociedade. 
                    Para os 
                    desenvolvedores, oferecemos uma oportunidade única de ascensão acadêmica e profissional, 
                    impulsionando suas carreiras para novos patamares. 
                    Nossa plataforma se destaca pela facilidade de acesso e uso, garantindo que todos possam 
                    desfrutar das possibilidades tecnológicas sem barreiras. 
                    Ao participar conosco, você estará imerso em um ambiente que valoriza o desenvolvimento e a
                    criatividade, fomentando um cenário dinâmico e estimulante no campo tecnológico.
                </p>
        </div>   
    </div>     

    </div>    

    <div class="footer">
                <img src="{{'assets/img_tcc/logoSensei.svg'}}" alt="img" class="imgfooter">

                <div class="botoesfooter">
                <a href="index.blade.php">Home</a>
                <a href="sobre.blade.php">Sobre nós</a>
                <a href="pesquisar.html">Download</a>
                <p class="emailequipe">sensei.system7@gmail.com</p>
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
