@extends('layout._site')
@section('titulo','Logar')
@section('conteudo')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="{{('assets/css/styleEdicaoPerfil.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edição de Perfil</title>
</head>
<body>
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
                    <input type="file" name="nova_foto" class="button" accept="image/*">
                </div>
            </div>

            <form class="form_altera" method="POST" action="{{ route('perfil.atualizar') }}">
                @csrf

                <div class="divLabel">
                    <label for="nome">Nome:</label>
                    <input class="form_input" type="text" id="nome" name="nome" placeholder="Nome" value="{{$usuario->nome }}">
                </div>

                <div class="divLabel">
                    <label for="TextNat">Naturalidade:</label>
                    <input class="form_input" type="text" id="TextNat" name="TextNat" placeholder="Naturalidade" value="{{$usuario->naturalidade }}">
                </div>

                <div class="divLabel">
                    <label for="TextBio">Biografia:</label>
                    <input class="form_input" type="text" id="TextBio" name="TextBio" placeholder="Bio" value="{{$usuario->bio }}"> </textarea>
                </div>

                <button class="divButton" type="submit">Salvar alterações</button>
            </form>
        </div>
    </main>
            
    <!-- footer -->
        
    
</body>

    
</html>
@endsection 