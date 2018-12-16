@extends('layout.base')
@section('conteudo')
			<form action="/fazer_pedido" method="post" role="form" class="contactForm">
              <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
              <div id="errormessage"></div>

              <div class="row">
                 <!-- <p>Serviços:<input type="radio-button" class="form-control" name="subject" id="subject"  data-rule="minlen:4" data-msg="Selecione apenas um serviço"></p>
                  <div class="validation"></div>
                </div>-->
                <div class="span12 margintop10 form-group">
                  <p>Faça a descrição do seu pedido:</p>
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="mensagem"></textarea>
                 
              </div>
                <div class="row">
                @foreach($servicos as $s)
                <input type="radio" name="servicos[]" value="{{$s->id}}"/> {{$s->nome}}<br />
                <input type="radio" name="servicos[]" value="{{$s->id}}"/> {{$s->nome}}<br />
                <input type="radio" name="servicos[]" value="{{$s->id}}"/>{{$s->nome}}<br />
                <input type="radio" name="servicos[]" value="{{$s->id}}"/>{{$s->nome}}
                @endforeach
              </div>
               <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Enviar mensagem</button>
                  </p>
                </div>
            </form>
@endsection