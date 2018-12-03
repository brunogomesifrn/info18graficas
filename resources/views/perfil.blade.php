@extends('layout.base')
@section('conteudo')
<h1>Bem-vindo {{Auth::user()->name}}</h1>

<p>Minhas gráficas</p>
<p>Meus Pedidos</p>


@endsection