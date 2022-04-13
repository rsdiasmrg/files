<!-- /////////////////////////////////////////////// Body ////////////////////////////////////////////////// -->
   <div class="container">
           <div class="body-contato">
             <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
               <div class="w-100 p-md-5 p-4">
                 <h3 class="featurette-heading" style="color:#56619d">Newsletter!<h6 class="text-muted">Cadastre-se para receber novidades,
                   lições curtas e notícias.</h6></h3> <!-- style="color:#ea6a2d" (Laranja) / style="color:#56619d" (Azul) -->
                 <div id="form-message-warning" class="mb-4">Alguma coisa deu errado, tente novamente.</div>
                 <div id="form-message-success" class="mb-4">Sua Mensagem foi enviada com Sucesso!</div>

                 <form method="POST" action="" id="newsletterForm" name="newsletterForm" class="newsletterForm">
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
                         <br>
                       </div>
                     </div>

                     <div class="col-md-12">
                       <div class="form-group">
                         <input type="submit" value="Cadastrar" class="btn btn-outline-success"<br> <!-- btn-outline-success (style_footer.css) -->
                         <!-- <a class="btn btn-outline-success" href="?p=envio_email_newsletter" role="button">Contato</a> <br> -->
                         <div class="submitting"></div>
                       </div>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
   </div>
