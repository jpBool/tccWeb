<html>

<head>

  <title>@yield('titulo')</title>

    <link href="{{('assets/css/styleCabecalho.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Sobre</title>


    <div class="header">
        <nav id="navbar">  
            <ul>
                <img src="{{'assets/img_tcc/logo.svg'}}" alt="img" class="imglogo">
                <div class="navButtom">
                    <li><a class="links" href="{{route('Seguidores')}}">Seguindo</a></li>
                    <li><a class="links" href="{{route('homeInicial')}}">Explorar</a></li>
                    <li><a class="links" href="{{route('pesquisarU')}}">Pesquisar</a></li>
                </div>

                <div class="navIcon">

                    <a href="{{route('loginInicial.placeholder', ['usuario' => $userId]) }}">
                        <img src="{{'assets/img_tcc/icon_perfilescuro.svg'}}" alt="img" class="nav-icon"> </a>
                    <img src="{{'assets/img_tcc/icon_menu.svg'}}" alt="img" class="nav-icon" id="openSidebarButton">

                    <div class="sidebar" id="sidebar">
                        <!-- Conteúdo da barra lateral -->
                        <img src="{{'assets/img_tcc/icon_close.svg'}}" alt="img" class="nav-icon" id="closeSidebarButton" style="width: 20px">

                        <a href="{{route('sair')}}" class="integracao-button"> 
                            <img src="{{'assets/img_tcc/icon_logout.svg'}}" alt="img" class="sidebar-i">
                            <span>Logout</span>
                        </a>

                        
                        <a href="{{route('loginInicial.placeholder', ['usuario' => $userId]) }}" class="integracao-button">
                            <img src="{{'assets/img_tcc/icon_perfilescuro.svg'}}" alt="img" class="sidebar-i">
                            <span>Perfil</span>
                        </a>

                        <a href="{{route('pesquisarU')}}"class="integracao-button"> 
                            <img src="{{'assets/img_tcc/icon_search.svg'}}" alt="img" class="sidebar-i">
                            <span>Pesquisar</span>
                        </a>

                        <a href="{{route('homeInicial')}}" class="integracao-button">
                            <img src="{{'assets/img_tcc/icon_global.svg'}}" alt="img" class="sidebar-i">
                            <span>Explorar</span>
                        </a>

                        <a href="{{route('Seguidores')}}" class="integracao-button">
                            <img src="{{'assets/img_tcc/icon_notification.svg'}}" alt="img" class="sidebar-i">
                            <span>Seguindo</span>
                        </a>

                        <a href="{{route('Seguidores2')}}" class="integracao-button">
                            <img src="{{'assets/img_tcc/icon_user_add.svg'}}" alt="img" class="sidebar-i">
                            <span>Seguidores</span>
                        </a>

                        <a href="{{route('download')}}" class="integracao-button">
                            <img src="{{'assets/img_tcc/icon_download.svg'}}" alt="img" class="sidebar-i">
                            <span>Download</span>
                        </a>
           
                        <a href="{{route('editar')}}" class="integracao-button">
                            <img src="{{'assets/img_tcc/icon_user_edit.svg'}}" alt="img" class="sidebar-i">
                            <span>Editar perfil</span>
                        </a>


                        <a href="{{route('homeInicialDark')}}" class="integracao-button">
                            <img src="{{'assets/img_tcc/icon_confg.svg'}}" alt="img" class="sidebar-i">
                            <span>Configurações</span>
                        </a>

                        <a href="http://200.145.153.91/matheussoares/SENSEI/Help%20do%20Sistema%20-%20SENSEI.pdf" >
                        <img src="{{'assets/img_tcc/icon_helps.svg'}}" alt="img" class="sidebar-i">
                            <span>Help do sistema</span>
                        </a>


                        <a href="{{route('sobre')}}" class="integracao-button">
                            <img src="{{'assets/img_tcc/icon_people.svg'}}" alt="img" class="sidebar-i">
                            <span>Sobre</span>
                        </a>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
        
</head>
<body>

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

    