@extends('layout.base')
@section('conteudo')


  <div class="row">
          <div class="span8">
<h4>Detalhes da <strong>{{$grafica->nome}}</strong></h4>

<table class="table">
  <thead class="thead-dark">
     <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">CNPJ</th>
       <th scope="col">Serviços</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><h5>{{$grafica->nome}}</h5></td>
      <td><h5>{{$grafica->endereco}}</h5></td>
      <td><h5>{{$grafica->cnpj}}</h5></td>
      <td>@foreach($grafica->servicos as $s)
		<p><h5>{{$s->nome}}</h5></p>
		  @endforeach
	  </td>
    </tr>
  </tbody>
</table>
</div>
</div>



<p><a href="/orcamento">Faça seu pedido clicando aqui!</a></p>	




<!--<p>{{$grafica->nome}}</p>
<p><h3>{{$grafica->endereco}}</h3></p>
<p><h3>{{$grafica->cnpj}}</h3></p>-->



<p><a href="/perfil"> Voltar</a><h3></p>
@endsection





