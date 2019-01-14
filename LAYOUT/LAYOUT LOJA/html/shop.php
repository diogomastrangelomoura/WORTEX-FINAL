<?php
    require 'includes/topo.php';
    require 'includes/barratopo.php';
    require 'includes/menu.php';
?>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Products -->
    <section class="shop-page padding-top-50 padding-bottom-100">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop SideBar -->
          <div class="col-sm-3">
            <div class="shop-sidebar"> 
              
              <!-- Category -->
              <h5 class="shop-tittle margin-bottom-30">filtrar por categoria</h5>
              <ul class="shop-cate">

                <?php

                  $categoria = "Perfumes";
                  $quantidade_produtos = "24";

                  $qte = 1;

                  while ( $qte <= 10) {

                    echo '

                    <li><a href="#."> '.$categoria.' <span>'.$quantidade_produtos.'</span></a></li>

                    ';

                    $qte++;
                    
                  }

                ?>
                
              </ul>
              
              <!-- FILTER BY PRICE -->
              <h5 class="shop-tittle margin-top-60 margin-bottom-30">filtrar por preço</h5>
              
            </div>
          </div>
          
          <!-- Item Content -->
          <div class="col-sm-9">
            <div class="item-display">
              <div class="row">

                <?php

                  $numero_produtos = "40";

                  echo'

                     <div class="col-xs-6"> <span class="product-num">1 - 10 de '.$numero_produtos.' produtos</span> </div>

                  ';

                ?>
 
                <!-- Products Select -->
                <div class="col-xs-6">
                  <div class="pull-right"> 
                    
                    <!-- Filter By -->
                    <select class="selectpicker">
                      <option>Maior Preço</option>
                      <option>Menor Preço</option>
                      <option>Mais Vendidos</option>
                    </select>
                    
                </div>
              </div>
            </div>
            
            <!-- Popular Item Slide -->
            <div class="papular-block row">

              <?php

                  $imagem = "imagens/maisvendidos/produto1.jpg";
                  $imagem2 = "imagens/maisvendidos/produto1.jpg";
                  $nome = "CREME PARA A PELE - 200ML - CREME PARA PELE, ANTI RUGAS, ESFOLIANTE";
                  $preco_antigo = "6x de R$ 23,30 S/ JUROS";
                  $preco_novo = "69.00";
                  $desc_botao = "R$ 39.90 no boleto ou transferência";
                  $oferta = 1;
                  $valor_oferta = "20";

                   $i = 1;

                  while ($i <= 9){

                    echo'

                      <div class="col-md-4">
                        <div class="item"> 
                          <!-- Sale Tags -->
                          <div class="on-sale"> '.$valor_oferta.'% <span>OFF</span> </div>
                          
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
                          </div>
                          <!-- Price --> 
                          <span class="price"><small>R$</small>'.$preco_novo.'</span>

                                <div class="promocoes">
                                     <span>'.$preco_antigo.'</span>
                                      <div class="promocoes-texto">
                                        <a href=""><h1>'.$desc_botao.'</h1></a>
                                      </div>
                                     
                                </div>
                      </div>
                                                       
            </div>






                    ';

                    $i++;
                  }


              ?>
                            
              <!-- Item -->
              
            
            <!-- Pagination -->
            <ul class="pagination">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
        
<?php
    require 'includes/newsletter.php';
?>

  </div>
  
<?php
    require 'includes/rodape.php';
?>