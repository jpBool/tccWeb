<h1>vc entrou</h1>

@if(Auth::guest())
        <a href="#">Login</a>
@else
        <a>{{Auth::gp2_usuarios()->nome}}</a>
@endif

