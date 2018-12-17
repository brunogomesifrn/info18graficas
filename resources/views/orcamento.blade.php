@extends('layout.base')
@section('conteudo')
			<form action="/fazer_pedido" method="post" role="form" class="contactForm">
        @csrf
              <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
              <div id="errormessage"></div>

              
                <div class="span8 margintop8 form-group">
                  <p>Faça a descrição do seu pedido:</p>
                  <textarea class="form-control" name="descricao" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="mensagem"></textarea>
                </div>
<br/>
                <div class="row">
                  <p>Serviços:</p>
                @foreach($servicos as $s)
                
                <input type="radio" name="servico" value="{{$s->id}}"/> {{$s->nome}}<br />
                <!--<input type="radio" name="servicos[]" value="{{$s->id}}"/> {{$s->nome}}<br />
                <input type="radio" name="servicos[]" value="{{$s->id}}"/>{{$s->nome}}<br />
                <input type="radio" name="servicos[]" value="{{$s->id}}"/>{{$s->nome}}-->
                @endforeach
              </div>
               <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Enviar mensagem</button>
                  </p>
                
            </form>
@endsection