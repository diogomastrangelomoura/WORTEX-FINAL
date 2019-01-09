  

  <!--======= RODAPÉ =========-->
  <footer>
    <div class="container"> 
      <div class="row">


        <?php

        $rua = "Av. Pres. Castelo Branco, Portão 3";
        $bairro = "Maracanã, Rio de Janeiro - RJ, 20271-130";
        $telefone = "11 23324444";
        $email = "teste@email.com.br";

        echo'

          <!-- ABOUT Location -->
            <div class="col-md-3">
              <div class="about-footer"> <img class="margin-bottom-30" src="images/logo-foot.png" alt="" >
                <p><i class="icon-pointer"></i> '.$rua.' <br>
                  '.$bairro.'</p>
                <p><i class="icon-call-end"></i> '.$telefone.'</p>
                <p><i class="icon-envelope"></i> '.$email.'</p>
              </div>
            </div>

        ';

        ?>

      <!-- HELPFUL LINKS -->
      <div class="col-md-3">
        <h6>CATEGORIAS</h6>
        <ul class="link">

          <?php

          $categoria = "Desodorantes";

          $i = 1;

          while ( $i <= 6) {
            

            echo'
              <li><a href="#."> '.$categoria.'</a></li>
            ';

            $i++;
          }

          ?>

        </ul>
      </div>
      
      <!-- SHOP -->
      <div class="col-md-3">
        <h6>LOJA</h6>
        <ul class="link">
          <li><a href="#."> Quem Somos</a></li>
          <li><a href="#."> Trocas e Devoluções</a></li>
          <li><a href="#."> Formas de Pagamento e Envio</a></li>
          <li><a href="#."> Termos e Condições</a></li>
          <li><a href="#."> Seja Nosso Distribuidor</a></li>
          <li><a href="#."> Contato</a></li>
        </ul>
      </div>
      
      <!-- MY ACCOUNT -->
      <div class="col-md-3">
        <h6>MINHA CONTA</h6>
        <ul class="link">
          <li><a href="#."> Login</a></li>
          <li><a href="#."> Minha Conta</a></li>
          <li><a href="#."> Carrinho</a></li>
          <li><a href="#."> Favoritos</a></li>
          <li><a href="#."> Finalizar Pedido</a></li>
        </ul>
      </div>

      </div>
      
      
      
      <!-- Rights -->

      <div class="row text-left">

        <div class="col-md-6 pagamento">
          <h6>PAGUE COM</h6>
            <ul >
              <li>

                <img src="imagens/pagamento/c-visa.png">
                <img src="imagens/pagamento/c-master.png">
                <img src="imagens/pagamento/c-elo.png">
                <img src="imagens/pagamento/c-diners.png">
                <img src="imagens/pagamento/c-american.png">
                <img src="imagens/pagamento/c-boleto.png">

              </li>
            </ul>
        </div>

        <div class="col-md-6 redes">
          <h6>REDES SOCIAIS</h6>
            <ul>
              <li><a href=""><i class="fab fa-facebook-square fa-2x"></i></a></li>
              <li><a href=""><i class="fab fa-instagram fa-2x"></i></a></li>
              <li><a href=""><i class="fab fa-whatsapp fa-2x"></i></a></li>
            </ul>
        </div>


      </div>
       

      <div class="rights">
        <p>©  2018 WORTEX. Todos os Direitos Reservados. </p>
        <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
      </div>
    </div>
  </footer>
  
  <!--======= RIGHTS =========--> 
  
</div>
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/own-menu.js"></script> 
<script src="js/jquery.lighter.js"></script> 
<script src="js/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
<script src="js/main.js"></script> 
<script src="js/main.js"></script>
</body>
</html>