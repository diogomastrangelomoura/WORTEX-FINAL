<!-- Mais Vendidos -->
        <!-- Popular Products -->
    <section class="padding-top-50 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center padding-bottom-50">
          <h4>mais vendidos</h4>
        </div>
        
        <!-- Popular Item Slide -->
        <div class="papular-block block-slide">

          <?php

                  $imagem = "imagens/maisvendidos/produto1.jpg";
                  $imagem2 = "imagens/maisvendidos/produto1.jpg";
                  $nome = "CREME PARA A PELE - 200ML";
                  $descricao = "200ML - CREME PARA PELE, ANTI RUGAS, ESFOLIANTE";
                  $preco_antigo = "399.00";
                  $preco_novo = "49.00";

                  $oferta = 1;
                  $valor_oferta = "20";

                  $i = 1;

                  while ($i <= 8){

                    echo '

                    <!-- Item -->
                      <div class="item"> 
                        <!-- Item img -->
                        <div class="item-img"> <img class="img-1" src="'.$imagem.'" alt="" > <img class="img-2" src="'.$imagem2.'" alt="" > 
                          <!-- Overlay -->
                          <div class="overlay">
                            <div class="position-center-center">
                              <div class="inn"><a href="'.$imagem.'" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#." ><i class="icon-heart"></i></a></div>
                            </div>
                          </div>
                        </div>
                        <!-- Item Name -->
                        <div class="item-name"> <a href="#.">'.$nome.'</a>
                          <p>'.$descricao.'</p>
                        </div>
                        <!-- Price --> 
                        <span class="price"><small>R$</small>'.$preco_novo.'</span> 
                     </div>

                    ';

                    $i++;
                  }

          ?>
                  
        </div>
      </div>
    </section>