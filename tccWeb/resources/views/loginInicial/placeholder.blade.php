{{$email = $_POST["email"]}} <br> 
{{$senha = $_POST["senha"]}}

@foreach($rows as $row)
    @if($email == $row->email && $senha == $row->senha)
        <h1>Logado com sucesso</h1>
    @else
        <h1>Login incorreto<h1>
    @endif
@endforeach
