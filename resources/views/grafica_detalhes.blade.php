@extends('layout.base')
@section('conteudo')

@foreach($grafica as $g)
<h1>Detalhes da {{$g->nome}}</h1>

<p>{{$g->nome}}</p>
<p><h3>{{$g->endereco}}</h3></p>
<p><h3>{{$g->cnpj}}</h3></p>
@endforeach

@endsection
<!--@foreach($servicos as $s)
<p><h3>{{$s->nome}}</h3></p>-->




