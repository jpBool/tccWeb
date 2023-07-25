@foreach($rows as $row)


<div class='project'> 
<h4>{{$row->nome_projeto}}</h4> --- {{$row->autores}} <br>
{{$row->email_contato}} <br>
{{$row->descricao_breve}} 
</div>
<br>
@endforeach
