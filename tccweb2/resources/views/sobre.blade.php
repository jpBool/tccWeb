<!DOCTYPE html>
<html>
    <head>
    <link href="{{('assets/css/stylesobre.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Sobre</title> 
    </head>

<body class="body">

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

    <div class="divtotal1">
        <div class="text"><h1 class="titulo">About Us</h1>
            <p>Este sistema visa atender um amplo grupo de pessoas que buscam uma plataforma digital que possa solucionar suas dúvidas no contexto profissional. A nossa prioridade é desenvolver uma plataforma simplificada, garantindo com que seja acessível a todos os públicos e a diversos nichos de programadores e colaboradores empresariais.
            Através dessa plataforma, busca-se impulsionar a criação de soluções inovadoras, atender necessidades decorrentes, estimular a criatividade e colaboração dos profissionais de programação, além de promover a inclusão digital e democratizar o acesso ao conhecimento tecnológico.</p>
        </div>
    <img src="{{'assets/img_tcc/imgsobre.png'}}" alt="pessoas" class="imgpessoas">
    </div>
    

    <div class="devs">
       
        <div class="desen"><h3>Desenvolvedores</h3></div>
       
            <div class="desen4">

                <div class="bonito"><img src="{{'assets/img_tcc/devs.png'}}" alt="dev1" class="imagem-redonda" >
                    <div class="caption">Aline Tiemi</div> <div class="caption">aline-tiemi.awoki@unesp.br</div></div>
                
                <div class="bonito"><img src="{{'assets/img_tcc/devs.png'}}" alt="dev2" class="imagem-redonda" >
                    <div class="caption">Beatriz Kaori</div> <div class="caption">kaori.sakai@unesp.br</div></div>
                
                <div class="bonito"><img src="{{'assets/img_tcc/devs.png'}}" alt="dev3" class="imagem-redonda" >
                    <div class="caption">Beatriz Osajima</div> <div class="caption">beatriz.suwa@unesp.br</div></div>

                <div class="bonito"><img src="{{'assets/img_tcc/devs.png'}}" alt="dev4" class="imagem-redonda" >
                    <div class="caption">Joâo Pedro</div> <div class="caption">joao-pedro.santos@unesp.br</div></div>
            </div>
       

        <div class="desen3">
            <div class="bonito"><img src="{{'assets/img_tcc/devs.png'}}" alt="dev4" class="imagem-redonda" >
                <div class="caption">Mariana Caroline</div> <div class="caption">mariana.caroline@unesp.br</div></div>

            <div class="bonito"><img src="{{'assets/img_tcc/devs.png'}}" alt="dev4" class="imagem-redonda" >
                <div class="caption">Matheus Gimenes</div> <div class="caption">mathues.gimenes-soares@unesp.br</div></div>

            <div class="bonito"><img src="{{'assets/img_tcc/devs.png'}}" alt="dev4" class="imagem-redonda" >
                <div class="caption">Renan Hayashi</div> <div class="caption">renan.h.moreira@</div></div>
        </div>
    </div>

    <div class="footer">
                <img src="{{'assets/img_tcc/logoSensei.png'}}" alt="img" class="imgfooter">

                <div class="botoesfooter">
                <a href="index.blade.php">Home</a>
                <a href="sobre">Sobre nós</a>
                <a href="pesquisar.html">Download</a>
                <p class="emailequipe">sensei.system7@gmail.com</p>
        </div>
  
</body>

<script>
        document.addEventListener('scroll', () => {
            let scrollVertical = window.pageYOffset;
            const header = document.getElementById('navbar');
            if(scrollVertical > 100) {
                header.style.backgroundColor = 'white';
                console.log(`Scroll vertical:`, header);
            } else {
                header.style.backgroundColor = 'transparent';
            }

        }) 
    </script>

</html>
