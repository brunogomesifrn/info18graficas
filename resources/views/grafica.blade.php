@extends('layout.base')
@section('conteudo')
<h1>Minhas Gráficas</h1>

<p><a href="/grafica_cadastrar">Cadastrar Gráfica</a></p>

@foreach($graficas as $g)
<p>{{$g->nome}} | <a href="/grafica_editar/{{$g->id}}"><i class="fa fa-pencil-square-o"></i></a> | <a href="/grafica_remover/{{$g->id}}"><i class="fa fa-trash"></i></a></p>
@endforeach
<p><a href="/perfil"> Voltar</a></p>
@endsection
