@extends('layout.base')
@section('conteudo')

<p><h1>Bem-vindo {{Auth::user()->name}}</h1></p>
<p><a href="/grafica">Minhas gráficas</a></p>
<p><a href="/pedidos">Meus pedidos</a></p>
<p><a href="/servicos">Serviços</a></p>



@endsection