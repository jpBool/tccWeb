<html>

<head>

  <title>@yield('titulo')</title>

    <link href="{{('assets/css/styleCabecalho.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Sobre</title>

    <div class="headerA">
        <nav id="navbar">  
            <ul>
                <img src="{{'assets/img_tcc/logo.svg'}}" alt="img" class="imglogo">
                <div class="navButtom">
                    <li><a class="links" href="index">Seguindo</a></li>
                    <li><a class="links" href="sobre">Explorar</a></li>
                    <li><a class="links" href="{{route('pesquisarAll')}}">Pesquisar</a></li>
                </div>

                <div class="navIcon">
                    <img src="{{'assets/img_tcc/perfil.png'}}" alt="img" class="imgperfil">
                    <img src="{{'assets/img_tcc/confg.png'}}" alt="img" class="imgconfg">
                </div>
            </ul>
        </nav>
    </div>
        
</head>

<body>

    