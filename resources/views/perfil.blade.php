@extends('layout.base')
@section('conteudo')

<p><h1>Bem-vindo {{Auth::user()->name}}</h1></p>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="/perfil" class="list-group-item list-group-item-action active">{{Auth::user()->name}}</a>
              <a href="/grafica" class="list-group-item list-group-item-action">Minhas gráficas</a>
              <a href="#" class="list-group-item list-group-item-action">Meu Pedidos</a>
              <a href="#" class="list-group-item list-group-item-action">Serviços</a>
              
		    </div>
		</div>
	</div>
</div>
<!--<p><a href="/grafica">Minhas gráficas</a></p>
<p>Meus Pedidos</p>


<p>Serviços</p>
<a href="#"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#"><i class="fa fa-eye"></i></a>
                                        <a href="#"></a>
-->


@endsection