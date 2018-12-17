@extends('layout.base')
@section('conteudo')
<h3>Meus pedidos</h3>
@foreach($pedidos as $p)
<h6>Pedido: {{$p->descricao}}</h6>
<p>Serviço:</p>
<h6>{{$p->servico}}</h6>
<h6>Data: {{$p->data}}</h6>
@endforeach

@endsection