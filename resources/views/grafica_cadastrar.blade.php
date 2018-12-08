@extends('layout.base')
@section('conteudo')
<h1>Cadastrar Gráfica</h1>

@if(empty($grafica))
	<form action="/grafica_salvar" method="post">
	@csrf
	<p>Nome: <input type="text" name="nome"></p>
	<p>CNPJ: <input type="text" maxlength="14" name="cnpj"></p>
	<p>Endereço: <input type="text" name="endereco"></p>
	
	<p>Serviços:</p>
	@foreach($servicos as $s)
	<p><input type="checkbox" name="servico" value="{{$s->id}}">{{$s->nome}}</p>
	@endforeach

</p>
@else
	<form action="/grafica_atualizar/{{$grafica->id}}" method="post">
	@csrf
	<p>Nome: <input type="text" name="nome" value="{{$grafica->nome}}"></p>
	<p>CNPJ: <input type="text" maxlength="14" name="cnpj" value="{{$grafica->cnpj}}"></p>
	<p>Endereço: <input type="text" name="endereco" value="{{$grafica->endereco}}"></p>

	<input type="hidden" name="id" value="{{$grafica->id}}" >

@endif
	
	<input type="submit" value="Enviar">
</form>
	



@endsection