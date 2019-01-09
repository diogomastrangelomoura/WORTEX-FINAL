<?php
    require 'includes/topo.php';
    require 'includes/barratopo.php';
    require 'includes/menu.php';
?>
  
  <!-- Content -->
  <div id="content"> 
    
    <!--======= PAGES INNER =========-->
    <section class="chart-page padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart"> 
          
          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info register">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-12">
                <h6>CADASTRAR</h6>
                <form>
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-6">
                      <label> *NOME
                        <input type="text" name="first-name" value="" placeholder="" required="required">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *SOBRENOME
                        <input type="text" name="last-name" value="" placeholder="" required="required">
                      </label>
                    </li>
                    
                    <!-- EMAIL ADDRESS -->
                    <li class="col-md-6">
                      <label> *EMAIL
                        <input type="email" name="contry-state" value="" placeholder="" required="required">
                      </label>
                    </li>
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <label> *TELEFONE
                        <input type="text" name="postal-code" value="" placeholder="" required="required">
                      </label>
                    </li>
                    
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *CELULAR
                        <input type="password" name="last-name" value="" placeholder="" required="required">
                      </label>
                    </li>
                    
                    <li class="col-md-6"> 
                      <!-- ADDRESS -->
                      <label>*ENDEREÇO
                        <input type="text" name="address" value="" placeholder="" required="required">
                      </label>
                    </li>

                    <li class="col-md-6"> 
                      <!-- ADDRESS -->
                      <label>*CEP
                        <input type="text" name="address" value="" placeholder="" required="required"> 
                      </label>
                    </li> 

                    <!-- TOWN/CITY -->
                    <li class="col-md-6">
                      <label>*CIDADE
                        <input type="text" name="town" value="" placeholder="" required="required">
                      </label>
                    </li>

                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *USUÁRIO
                        <input type="text" name="last-name" value="" placeholder="" required="required">
                      </label>
                    </li>

                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *SENHA
                        <input type="password" name="last-name" value="" placeholder="" required="required">
                      </label>
                    </li>

                    <!-- PHONE -->
                    <li class="col-md-6">
                      <button type="submit" class="btn">ENVIAR</button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>
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
  
