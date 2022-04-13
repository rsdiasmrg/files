<!-- /////////////////////////////////////////////// Body ////////////////////////////////////////////////// -->
   <div class="container">
           <div class="body-contato">
             <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
               <div class="w-100 p-md-5 p-4">
                 <h3 class="featurette-heading" style="color:#56619d">Contate-nos!<h6 class="text-muted">Envie suas Dúvidas, Sugestões
                   ou Críticas.</h6></h3> <!-- style="color:#ea6a2d" (Laranja) / style="color:#56619d" (Azul) -->
                 <div id="form-message-warning" class="mb-4">Alguma coisa deu errado, tente novamente.</div>
                 <div id="form-message-success" class="mb-4">Sua Mensagem foi enviada com Sucesso!</div>

                 <form method="POST" action="envio_email_contato.php" id="contactForm" name="contactForm" class="contactForm">
                   <div class="row">
                     <div class="col-md-6">
                       <!-- <div class="form-group"> -->
                         <label class="label" for="name">Nome</label>
                         <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome...">
                       <!-- </div> -->
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label class="label" for="email">E-mail</label>
                         <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu E-mail...">
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-group">
                         <label class="label" for="subject">Assunto</label>
                         <input class="form-control" type="subject" name="subject" list="datalistOptions" id="assuntoDataList" placeholder="Escolha o assunto...">
                           <datalist id="datalistOptions">
                             <option value="Compras">
                             <option value="Dúvidas">
                             <option value="Sugestões">
                             <option value="Suporte Técnico">
                             <option value="Produtos">
                          </datalist>
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-group">
                         <label class="label" for="#">Mensagem</label>
                         <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Digite sua mensagem..."></textarea>
                         <br>
                       </div>
                     </div>

                     <div class="col-md-12">
                       <div class="form-group">
                         <input type="submit" value="Enviar" class="btn btn-outline-success"> <!-- btn-outline-success (style_footer.css) -->
                         <div class="submitting"></div>
                       </div>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
   </div>
