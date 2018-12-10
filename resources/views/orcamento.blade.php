@extends('layout.base')
@section('conteudo')
			<form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Escreva seu nome com pelo menos 4 letras">
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" data-rule="email" data-msg="Escreva seu email">
                  <div class="validation"></div>
                </div>
                <div class="span4 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Serviços" data-rule="minlen:4" data-msg="Escreva o assunto com pelo menos 8 letras">
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
@endsection