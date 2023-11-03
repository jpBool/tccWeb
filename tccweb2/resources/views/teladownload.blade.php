@extends('layout._site')
@section('titulo','Download')
@section('conteudo')

<!DOCTYPE html>
<html>
    <head>
        <link href="{{('assets/css/styledownload.css')}}" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Download</title>
    </head>

    <body>
        <div class="main">
            <div class="Titulo">
                <h1>SENSEI Desktop</h1>
            </div>
            
            <div class="conteudo">
                <div class="download">
                    <div class="subtitulo"> 
                        <h2>Download Sensei - Windows</h2>
                    </div>

                    
                    <img src="{{'assets/img_tcc/download.png'}}" alt="img" class="imgdownload">
                    

                    <button type="button" class="button">Download</button>

                </div>
                
                <div class="textos">
                    <h2>Quais as vantagens de baixar o nosso sistema?</h2>
                        <p class="textin">
                            Nosso site oferece diversas vantagens para os usuários que buscam explorar 
                            o potencial da tecnologia.
                        </p>
                        <p class="textin">
                            Ao identificar as 
                            necessidades individuais dos clientes em relação à tecnologia, proporcionamos soluções direcionadas e eficazes. 
                            Além disso, estamos comprometidos
                            em auxiliar as pessoas na resolução de problemas sociais por meio 
                            da inovação tecnológica, promovendo um impacto positivo na sociedade. 
                        </p>
                        <p class="textin">
                            Para os 
                            desenvolvedores, oferecemos uma oportunidade única de ascensão acadêmica e profissional, 
                            impulsionando suas carreiras para novos patamares. 
                        </p>
                        <p class="textin">
                            Nossa plataforma se destaca pela facilidade de acesso e uso, garantindo que todos possam 
                            desfrutar das possibilidades tecnológicas sem barreiras. 
                            Ao participar conosco, você estará imerso em um ambiente que valoriza o desenvolvimento e a
                            criatividade, fomentando um cenário dinâmico e estimulante no campo tecnológico.
                        </p>
                </div>   
            </div>  

        </div>
    </body>
</html>
@endsection 
