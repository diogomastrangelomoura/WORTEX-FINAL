<h5><i class="fa fa-truck fa-fw"></i>PREÇOS / ENTREGA</h5>
<hr>


<div class="row">


	<div class="col-md-6">
    	<div class="card">
        	<h6 class="card-header">Preços</h6>
            <div class="card-body">
            
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Preço normal</label>
                        <div class="input-group">
                            <span class="input-group-addon">R$</span>
                            <input type="text" class="form-control mascara-dinheiro" data-decimal="." name="preco_normal_produto" data-thousands="" value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'preco_normal_produto','cad_produtos','id_produto');} ?>">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Preço de venda do produto (DE).</small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Promocional</label>
                        <div class="input-group">
                            <span class="input-group-addon">R$</span>
                            <input type="text" class="form-control mascara-dinheiro" data-thousands="" data-decimal="." name="preco_promocional_produto" value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'preco_promocional_produto','cad_produtos','id_produto');} ?>">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Preço promocional do produto (POR).</small>
                    </div>
                  
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Preço Custo</label>
                        <div class="input-group">
                            <span class="input-group-addon">R$</span>
                            <input type="text" class="form-control mascara-dinheiro" name="preco_custo_produto" data-thousands="" data-decimal="." value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'preco_custo_produto','cad_produtos','id_produto');} ?>">
                        </div>
                         <small id="emailHelp" class="form-text text-muted">Não é exibido na loja.</small>
                    </div>
                </div>
                                
            </div>
        </div>
     </div>



	<div class="col-md-6">
    	<div class="card">
        	<h6 class="card-header">Entrega</h6>
            <div class="card-body">
            
                <div class="form-row">

                    
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Peso</label>
                        <div class="input-group">
                            <input type="number" class="form-control mascara-dinheiro" data-precision="3" name="peso_produto" data-thousands="" data-decimal="." value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'peso_produto','cad_produtos','id_produto');} ?>">
                            <span class="input-group-addon">KG</span>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Em kilogramas Ex:0,50 = 500g.</small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Comprimento</label>
                        <div class="input-group">
                            <input type="text" class="form-control mascara-dinheiro" name="comprimento_produto" data-thousands="" data-decimal="." value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'comprimento_produto','cad_produtos','id_produto');} ?>">
                            <span class="input-group-addon"><i class="fa fa-arrows-h fa-fw"></i></span>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Em centímetros.</small>
                    </div>
                  
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Altura</label>
                        <div class="input-group">
                            <input type="text" class="form-control mascara-dinheiro" name="altura_produto" data-thousands="" data-decimal="." value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'altura_produto','cad_produtos','id_produto');} ?>">
                            <span class="input-group-addon"><i class="fa fa-arrows-v fa-fw"></i></span>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Em centímetros.</small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Largura</label>
                        <div class="input-group">
                            <input type="text" class="form-control mascara-dinheiro" name="largura_produto" data-thousands="" data-decimal="." value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'largura_produto','cad_produtos','id_produto');} ?>">
                            <span class="input-group-addon"><i class="fa fa-arrows-alt fa-fw"></i></span>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Em centímetros.</small>
                    </div>
                
                </div>
                                
            </div>
        </div>
     </div>


</div>