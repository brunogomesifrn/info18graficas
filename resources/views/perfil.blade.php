@extends('layout.base')
@section('conteudo')

<p><h2>Bem-vindo, {{Auth::user()->name}}!</h2></p>
<p><a href="/grafica">Minhas gráficas</a></p>
<p><a href="/pedidos">Meus pedidos</a></p>
<p><a href="/servicos">Serviços</a></p>



@endsection