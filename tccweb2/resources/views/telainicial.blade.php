
<!DOCTYPE html>
<html>
    <head> 
    <link href="{{('assets/css/styletelainicial.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Home</title>
    </head>
    <body>

    <div class="globo">                             
        <img src="{{'assets/img_tcc/globoclaro.svg'}}" alt="img" class="imglobo"> 
    </div>

    <!-- body -->

    
    <main class="main"> 
        <div class="textos">
            <div class="divbonita">

                <div class="textprimeiro">
                    <h1>Bem vindo ao Sensei!</h1>
                    <p>Compartilhe seu talento, conecte-se com desenvolvedores e alcance novos patamares.</p>
                </div>

                <div class="entrar">
                    <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="sidebar-icon" style="width: 3%;" > 
                   
                    <div class="buttonsHome">
                        
                        <a class="button" href="{{route('cadastro')}}" >
                            <p>Criar conta</p>
                        </a>
                        <a class="buttonLogin" href="{{route('loginInicial.index')}}">Ja possui uma conta? Entrar</a>
                    </div>
                    
                </div>

                <!---------------------------------------------------------------------------------------------->

                <div class="textprimeiro"> 
                    <div class="espaco">
                        <h2> Compartilhe seus projetos com o mundo</h2>
                        <p>Esta plataforma te permite compartilhar projetos com quem desejar, de onde estiver.</p><br>
                    </div>
                </div>

                <div class="textprimeiro">

                    <img style="background-color: #e3f2fa" src="{{'assets/img_tcc/icon2.svg'}}" alt="img" class="sidebar-icon-overlay svg-test" style="width: 2%;" >
                    
                    <div class="imgtextos">
                        <img src="{{'assets/img_tcc/Feed.png'}}" alt="img" class="imgtexto1" style="width: 100%;" > 
                    </div>
                </div>

                <!---------------------------------------------------------------------------------------------->

                <div class="textprimeiro"> 
                    <div class="espaco">
                        <h2>Procure softwares e encontre desenvolvedores.</h2>
                        <p>Apoiando a união de projetos e desenvolvedores de software.</p><br>
                    </div>
                </div>

                <div class="textprimeiro">
                    <img style="background-color: #e3f2fa" src="{{'assets/img_tcc/icon3.svg'}}" alt="img" class="sidebar-icon-overlay" style="width: 2%;"> 

                    <div class="imgtextos">
                        <img src="{{'assets/img_tcc/PesquisaUsuario.png'}}" alt="img" class="imgtexto1" style="width: 100%;" > 
                    </div>
                </div>

                <!---------------------------------------------------------------------------------------------->

                <div class="textprimeiro"> 
                    <div class="espaco">
                        <h2> Gerencie seus projetos com a sua equipe.</h2>
                        <p>Possibilitando uma melhora profissional, o site possui diversas funcionalidades para sua formação empresa.</p><br>
                    </div>
                </div>

                <div class="textprimeiro">
                    <img  style="background-color: #e3f2fa" src="{{'assets/img_tcc/icon4.svg'}}" alt="img" class="sidebar-icon-overlay" style="width: 2%;" > 

                    <div class="imgtextos">
                        <img src="{{'assets/img_tcc/EtapasProjeto.png'}}" alt="img" class="imgtexto1" style="width: 100%;" > 
                    </div>
                </div>
            </div> 
        </div>

        <div class="ultimotexto">
            <div class="text2"> 
                <h2> Inspiri-se e seja inspiração!</h2>
                <div class="textin2">
                    <p>Acreditamos no poder da colaboração!
                    Faça parte de uma comunidade de desenvolvedores que compartilham ideias e conquistam o impossível.</p>
                </div>
            </div>


            <a href="{{route('loginInicial.index')}}">
                <div class="botoesembaixo">
                    <button type="button" class="button1">Criar conta</button>
                    <button type="button" class="button2">Entrar</button>
                </div>
            </a>
        </div>     
            
        <!-- footer -->
    </main> 
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
