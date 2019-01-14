<?php
    require 'includes/topo.php';
    require 'includes/barratopo.php';
    require 'includes/menu.php';
?>

  <!-- Content -->
  <div id="content"> 
    
    <!--======= CONATACT  =========-->
    <section class="contact padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="contact-form">
          <h5>CONTATO</h5>
          <div class="row">
            <div class="col-md-8"> 
              
              <!--======= Success Msg =========-->
              <div id="contact_message" class="success-msg"><i class="fas fa-check-circle"></i>Obrigado! Sua imagem foi enviada!</div>
              
              <!--======= FORM  =========-->
              <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                <ul class="row">
                  <li class="col-sm-6">
                    <label>Nome Completo *
                      <input type="text" class="form-control" name="nome" id="nome" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>Email *
                      <input type="text" class="form-control" name="email" id="email" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>Telefone *
                      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>Assunto  
                      <input type="text" class="form-control" name="assunto" id="assunto" placeholder="">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>Mensagem
                      <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">ENVIAR</button>
                  </li>
                </ul>
              </form>
            </div>


            <?php

                $rua = "Av. Pres. Castelo Branco, Portão 3";
                $bairro = "Maracanã, Rio de Janeiro - RJ, 20271-130";
                $telefone = "11 23324444";
                $email = "teste@email.com.br";

                echo ' 

                 <div class="col-md-4">
                  <div class="contact-info">
                    <h6>LOCALIZAÇÃO</h6>
                    <ul>
                      <li> <i class="icon-map-pin"></i> '.$rua.'<br>
                       '.$bairro.'</li>
                      <li> <i class="icon-call-end"></i> '.$telefone.'</li>
                      <li> <i class="icon-envelope"></i> <a href="mailto:'.$email.'" target="_top">'.$email.'</a> </li>
                      <li>
                        <p>Nos mande sua dúvida ou sugestão, em 24 horas te respondemos!</p>
                      </li>
                    </ul>
                  </div>
                </div>

                ';

            ?>
            
            <!--======= ADDRESS INFO  =========-->
           
          </div>
        </div>
      </div>
    </section>
    
    <!--======= MAPA =========-->
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0238335795925!2d-43.23263618523061!3d-22.912491743834458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e5dd53f13b5%3A0x48f080313984a32d!2sESTADIO+MARIO+FILHO+MARACAN%C3%83!5e0!3m2!1spt-BR!2sbr!4v1547139347362" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
        
<?php
    require 'includes/newsletter.php';
?>

  </div>
  
<?php
    require 'includes/rodape.php';
?>