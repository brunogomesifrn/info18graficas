@extends('layout.base')
@section('conteudo')
<h1>Minhas Gráficas</h1>

<p><a href="/grafica_cadastrar">Cadastrar Gráfica</a></p>

@foreach($graficas as $g)
<p>{{$g->nome}} | <a href="/grafica_editar/{{$g->id}}">Editar</a> | <a href="/grafica_remover/{{$g->id}}">Remover</a></p>
@endforeach

@endsection