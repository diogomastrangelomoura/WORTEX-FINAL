    <!-- Produtos -->
    <section class="padding-top-150 padding-bottom-50">
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
                  $nome = "CREME PARA A PELE - 200ML - CREME PARA PELE, ANTI RUGAS, ESFOLIANTE";
                  $preco_antigo = "399.00";
                  $preco_novo = "69.00";
                  $desc_botao = "R$ 39.90 no boleto ou transferência";
                  $preco_juros = "6x de R$ 23,30 S/ JUROS";

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
                          </div>
                          <!-- Preço -->
                          <br>
                          <div class="riscopreco">
                             <small>R$</small><span>'.$preco_antigo.'</span>
                          </div>
                          <span class="price"><small>R$</small>'.$preco_novo.'</span></div>
                          <div class="promocoes">
                             <span>'.$preco_juros.'</span>
                              <div class="promocoes-texto">
                                <a href=""><h1>'.$desc_botao.'</h1></a>
                              </div>
                             
                        </div>
                          
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