@extends('layout.base')
@section('conteudo')
<h3>Meus pedidos</h3>

<h6>{{$pedidos->descricao}}</h6>
<h6>{{$pedidos->servicos}}</h6>


@endsection