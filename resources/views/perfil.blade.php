@extends('layout.base')
@section('conteudo')

<p><h1>Bem-vindo {{Auth::user()->name}}</h1></p>
<p><a href="/grafica">Minhas gráficas</a></p>
<p>Meus Pedidos</p>
<p>Serviços</p>



@endsection