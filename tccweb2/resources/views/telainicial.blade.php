<!DOCTYPE html>
<html>
    <head> 
    <link href="{{('assets/css/styletelainicial.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Home</title>
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
                    <img src="{{'assets/img_tcc/perfil.png'}}" alt="img" class="imgperfil">
                    <img src="{{'assets/img_tcc/confg.png'}}" alt="img" class="imgconfg">
                </div>
            </ul>
        </nav>
    </div>

    <div class="globo">                             
        <img src="{{'assets/img_tcc/globo.png'}}" alt="img" class="imglobo"> 
    </div>


        <div class="textos">
            <div class="divbonita">
                <div class="linha-lateral"></div>

                <div class="textprimeiro">
                    <h1> Bem vindo ao Sensei!</h1>
                        <p>Compartilhe seu talento, conecte-se com desenvolvedores e alcance novos patamares.</p>
                    <div class="entrar">
                        <button type="button" class="button">Criar conta</button>
                        <p>Ja possui uma conta? Entrar</p>
                    </div>
                </div>
            </div>

            <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="icon1" style="width: 1.5%;" > 
            
            <div class="divbonita">
                <div class="iconlinha">
            
            <div class="linha-lateral2"></div>
                </div>
            <div class="textoimagem">
                <div class="text1"> <h2> Compartilhe seus projetos com o mundo</h2>
                    <p>Esta plataforma te permite compartilhar projetos com quem desejar, de onde estiver.</p><br>
                </div>

                <div class="imgtextos">
                <img src="{{'assets/img_tcc/img1.jpg'}}" alt="img" class="imgtexto1" style="width: 50%;" > 
                </div>
            </div>
            </div>

            <img src="{{'assets/img_tcc/icon2.svg'}}" alt="img" class="icon2" style="width: 1.5%;" > 

            <div class="divbonita">
                <div class="iconlinha">
                

                <div class="linha-lateral2"></div>
                </div>
                
                <div class="textoimagem">
                <div class="text3"> <h2> Procure softwares e encontre desenvolvedores.</h2>
                    <p>Apoiando a união de projetos e desenvolvedores de software.</p><br>
                </div>

                <div class="imgtextos">
                <img src="{{'assets/img_tcc/img2.jpg'}}" alt="img" class="imgtexto1" style="width: 50%;" > 
                </div>
</div>
            </div>

            <img src="{{'assets/img_tcc/icon3.svg'}}" alt="img" class="icon3" style="width: 1.5%;" > 

            <div class="divbonita">
                <div class="iconlinha">

                <div class="linha-lateral2"></div>
            </div>
            <div class="textoimagem">
                <div class="text3"> <h2> Gerencie seus projetos com a sua equipe.</h2>
                    <p>Possibilitando uma melhora profissional, o site possui diversas funcionalidades para sua formação empresa.</p><br>
                </div>

                <div class="imgtextos">
                <img src="{{'assets/img_tcc/img3.jpg'}}" alt="img" class="imgtexto1" style="width: 50%;" > 
                </div>
</div>
            </div>

            <img src="{{'assets/img_tcc/icon4.svg'}}" alt="img" class="icon4" style="width: 1.5%;" > 

            <div class="divbonita">
                <div class="iconlinha">
                <div class="linha-lateral2"></div>
            </div>
            <div class="textoimagem">
                <div class="text3"> <h2> Navegue em seu feed e descubra novos softwares.</h2>
                    <p>As sugestões selecionadas para você, abrirão as portas da exploração e descoberta de suas preferências.</p><br>
                </div>

                <div class="imgtextos">
                <img src="{{'assets/img_tcc/img4.jpg'}}" alt="img" class="imgtexto1" style="width: 50%;" > 
                </div>
</div>
</div>
                <img src="{{'assets/img_tcc/icon1.svg'}}" alt="img" class="icon5" style="width: 1.5%;" > 

                <div class="iconlinha2">
                <div class="linha-lateral3"></div>
                <div class="ultimotexto">
                <div class="text2"> <h2> Inspiri-se e seja inspiração!</h2>
                    <div class="textin2"><p>Acreditamos no poder da colaboração!
                        Faça parte de uma comunidade de desenvolvedores que compartilham ideias e conquistam o impossível.</p>
                    </div>
                </div>

                    <div class="botoesembaixo">
                <button type="button" class="button1">Criar conta</button>
                <button type="button" class="button2">Entrar</button>
                    </div>
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
