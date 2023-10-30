@extends('layout._site')
@section('titulo','Home')
@section('conteudo')

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{('assets/css/styleEdicaoCadastro.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Edição de Cadastro</title>
</head>
<body>
    <!-- header -->




    <!-- body -->
    <main>
        <div class="fundo">
            <div class="titulo">
                <h2> Editar Cadastro </h2>
            </div>

            <form class="form_altera" method="POST" action="{{ route('perfil.atualizarCadastro') }}">
                @csrf

                <div class="divLabel">
                    <label for="email">Alterar e-mail:</label>
                    <input class="form_input" type="text" id="email" name="email" placeholder="e-mail" value="{{$usuario->email}}>
                </div>
                <div class="divLabel">
                    <label for="datanasc">Data de nascimento:</label>
                    <input class="form_input" type="date" id="datanasc" style="width:" name="datanasc" value="{{$usuario->nascimento}}>
                </div>
                <div class="divLabel">
                    <label for="senha">Alterar senha:</label>
                    <input class="form_input" type="password" id="senha" name="senha" placeholder="senha" value="">
                </div>
            
                <button class="divButton" type="submit">Salvar alterações</button>
            </form>
        </div>
    </main>
            
    <!-- footer -->
        
     
         
</body>

    

</html>
@endsection 