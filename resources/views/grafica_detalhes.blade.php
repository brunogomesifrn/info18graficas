@extends('layout.base')
@section('conteudo')


  <div class="row">
          <div class="span12">
<h4>Detalhes da <strong>{{$grafica->nome}}</strong></h4>

<table class="table">
  <thead class="thead-dark">
     <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">CNPJ</th>
       <th scope="col">Serviços</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><h5>{{$grafica->nome}}</h5></td>
      <td><h5>{{$grafica->endereco}}</h5></td>
      <td><h5>{{$grafica->cnpj}}</h5></td>
      <td>@foreach($grafica->servicos as $s)
		<p><h5>{{$s->nome}}</h5></p>
		  @endforeach
	  </td>
    </tr>
  </tbody>
</table>
</div>
</div>
<div class="container">
        <div class="row">
          <div class="span12">
            <h4>Entre em contato conosco preenchendo o <strong>formulário de pedido</strong> abaixo</h4>

            <form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Escreva seu nome com pelo menos 4 letras" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" data-rule="email" data-msg="Escreva seu email" />
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Escreva o assunto com pelo menos 8 letras" />
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="mensagem"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Enviar mensagem</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>


<!--<p>{{$grafica->nome}}</p>
<p><h3>{{$grafica->endereco}}</h3></p>
<p><h3>{{$grafica->cnpj}}</h3></p>-->



<p><a href="/perfil"> Voltar</a><h3></p>
@endsection





