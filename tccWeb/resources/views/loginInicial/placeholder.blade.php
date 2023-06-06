
@foreach($rows as $row)
    <h1>{{$xemail}}</h1>
    @if($xemail == $row->email && $xsenha == $row->senha)
        <h1>Logado com sucesso</h1>
    @else
        <h1>Login incorreto<h1>
    @endif
@endforeach
