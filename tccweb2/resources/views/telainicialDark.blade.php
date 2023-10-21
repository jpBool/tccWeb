@extends('layout._siteDark')
@section('titulo','Logar')
@section('conteudo')

<!DOCTYPE html>
<html>
    <head> 
    <link href="{{('assets/css/styletelainicialDark.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Home</title>
    </head>
    <body>


        <div class="globo">                             
            <img src="{{'assets/img_tcc/globoescuro.svg'}}" alt="img" class="imglobo"> 
        </div>

        <!-- body -->

        <div class="textos">
            <div class="divbonita">

                <div class="textprimeiro">
                    <h1>Bem vindo ao Sensei!</h1>
                    <p>Compartilhe seu talento, conecte-se com desenvolvedores e alcance novos patamares.</p>
                </div>

                <div class="entrar">
                    <img src="{{'assets/img_tcc/icon1claro.svg'}}" alt="img" class="sidebar-icon" style="width: 3%;" > 
                    
                    <div class="buttonsHome">
                        <a class="button" href="{{route('cadastroDark')}}" >
                            <p>Criar conta</p>
                        </a>
                        <a href="{{route('loginInicial.index')}}">Ja possui uma conta? Entrar</a>
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
                    <div class="imgtextos">
                        <img src="{{'assets/img_tcc/ExplorarDark.png'}}" alt="img" class="imgtexto1" style="width: 100%;" > 
                        <img style="background-color: #364E65" src="{{'assets/img_tcc/icon2claro.svg'}}" alt="img" class="sidebar-icon-overlay" style="width: 2%;" >
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
                    <img style="background-color: #364E65" src="{{'assets/img_tcc/icon3claro.svg'}}" alt="img" class="sidebar-icon-overlay" style="width: 2%;"> 

                    <div class="imgtextos">
                        <img src="{{'assets/img_tcc/PesquisaUsuarioDark.png'}}" alt="img" class="imgtexto1" style="width: 100%;" > 
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
                    <img style="background-color: #364E65" src="{{'assets/img_tcc/icon4claro.svg'}}" alt="img" class="sidebar-icon-overlay" style="width: 2%;" > 

                    <div class="imgtextos">
                        <img src="{{'assets/img_tcc/EtapasProjeto.png'}}" alt="img" class="imgtexto1" style="width: 100%;" > 
                    </div>
                </div>

                <!---------------------------------------------------------------------------------------------->
            </div> 
            
            <div class="ultimotexto">
                <div class="text2"> 
                    <h2> Inspiri-se e seja inspiração!</h2>
                    <div class="textin2">
                        <p>Acreditamos no poder da colaboração!
                        Faça parte de uma comunidade de desenvolvedores que compartilham ideias e conquistam o impossível.</p>
                    </div>
                </div>

                <div class="botoesembaixo">
                    <button type="button" class="button1">Criar conta</button>
                    <button type="button" class="button2">Entrar</button>
                </div>
            </div>
        </div>       
            
</body>

</html>

@endsection