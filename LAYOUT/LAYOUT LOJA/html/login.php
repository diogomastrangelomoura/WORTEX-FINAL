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
          <div class="cart-ship-info">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-7">
                <h6>LOGIN</h6>
                <form>
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-12">
                      <label> USUÁRIO
                        <input type="text" name="first-name" value="" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-12">
                      <label> SENHA
                        <input type="password" name="last-name" value="" placeholder="">
                      </label>
                    </li>
                    
                    <!-- LOGIN -->
                    <li class="col-md-6 text-left">
                      <button type="submit" class="btn">LOGIN</button>
                    </li>
                                        
                    <!-- FORGET PASS -->
                    <li class="col-md-6">
                      <div class="checkbox margin-0 margin-top-20 text-right">
                        <a href="#.">Recuperar Senha</a>
                      </div>
                    </li>
                  </ul>
                </form>
                
              </div>
              
              <!-- SUB TOTAL -->
              <div class="col-sm-5">
                <h6>LOGIN COM</h6>
                
                <ul class="login-with">
                	<li>
                    	<a href="#."><i class="fab fa-facebook"></i>FACEBOOK</a>
                    
                    </li>
                    
                    <li>
                    	<a href="#."><i class="fab fa-google"></i>GOOGLE</a>
                    
                    </li>
                                   
                </ul>
                
                
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