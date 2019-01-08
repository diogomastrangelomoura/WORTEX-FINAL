    <!-- Produtos -->
    <section class="padding-top-50 padding-bottom-150">
      <div class="container"> 
        
        <!-- Main Heading -->
        <div class="heading text-center">
          <h4>produtos</h4></div>
        
            <!-- Popular Products -->
    <section class="shop-page padding-top-100 padding-bottom-100">
      <div class="container">
        
        <!-- Popular Item Slide -->
        <div class="papular-block row"> 
                 

                 <?php

                  $imagem = "imagens/produtos/produto1.jpg";
                  $imagem2 = "imagens/produtos/produto1.jpg";
                  $nome = "CREME PARA A PELE - 200ML";
                  $descricao = "200ML - CREME PARA PELE, ANTI RUGAS, ESFOLIANTE";
                  $preco_antigo = "399.00";
                  $preco_novo = "49.00";

                  $oferta = 1;
                  $valor_oferta = "20";

                  $i = 1;

                  while ($i <= 8){

                    echo'

                      <div class="col-md-3">
                        <div class="item">';

                        if ($oferta == 1){

                          echo'
                            <!-- Sale Tags -->
                            <div class="on-sale">
                            '.$valor_oferta.'%
                            <span>OFF</span>
                            </div>';

                        }
                    
                        echo'
                        
                          <!-- Item img -->
                          <div class="item-img"> <img class="img-1" src="'.$imagem.'" alt="" > <img class="img-2" src="'.$imagem2.'" alt="" > 
                            <!-- Overlay -->
                            <div class="overlay">
                              <div class="position-center-center">
                                <div class="inn"><a href="'.$imagem.'" data-lighter><i class="icon-magnifier"></i></a> <a href="#."><i class="icon-basket"></i></a> <a href="#." ><i class="icon-heart"></i></a></div>
                              </div>
                            </div>
                          </div>
                          <!-- Nome do Item -->
                          <div class="item-name"> <a href="#.">'.$nome.'</a>
                            <p>'.$descricao.'</p>
                          </div>
                          <!-- Preço -->
                          <br>
                          <div class="riscopreco">
                             <small>DE: R$</small><span>'.$preco_antigo.'</span>
                          </div>
                          <span class="price"><small>POR: R$</small>'.$preco_novo.'</span></div>
                          
                      </div>

                    ';

                    $i++;

                  }

                  
                 ?>   
      
        </div>
      </div>
    </section>

      </div>
    </section>