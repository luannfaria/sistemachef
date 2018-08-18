<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">NOVO PRODUTO</h3>
            </div>
            <?php echo form_open('produto/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">


                <div class="col-md-4">
      						<label for="nomeproduto" class="control-label"><span class="text-danger">*</span>NOME PRODUTO</label>
      						<div class="form-group">
      							<input type="text" name="nomeproduto" value="<?php echo $this->input->post('nomeproduto'); ?>" class="form-control" id="nomeproduto" />
      							<span class="text-danger"><?php echo form_error('nomeproduto');?></span>
      						</div>
      					</div>
      					<div class="col-md-2 ">
      						<label for="codbarra" class="control-label">CODIGO DE BARRAS</label>
      						<div class="form-group">
      							<input type="text" name="codbarra"  class="form-control" onBlur="myFunctionnovo()" id="codbarra" />
      							<span class="text-danger"><?php echo form_error('codbarra');?></span>
      						</div>
      					</div>

                <div class="col-md-3">
      						<label for="idcategoria" class="control-label">CATEGORIA</label>
      						<div class="form-group">
      							<select name="idcategoria" class="form-control" required>
      								<option value="">SELECIONE</option>
      								<?php
      								foreach($all_categorias as $categoria)
      								{
      									$selected = ($categoria['idcategoria'] == $this->input->post('idcategoria')) ? ' selected="selected"' : "";

      									echo '<option value="'.$categoria['idcategoria'].'" '.$selected.'>'.$categoria['nomecategoria'].'</option>';
      								}
      								?>
      							</select>
      						</div>
      					</div>
					<div class="col-md-2">
						<label for="unidade" class="control-label"><span class="text-danger">*</span>UNIDADE</label>
						<div class="form-group">
							<select name="unidade" class="form-control">
								<option value="">SELECIONE</option>
								<?php
								$unidade_values = array(
									'UN'=>'UN',
									'KG'=>'KG',
									'LT'=>'LT',
								);

								foreach($unidade_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('unidade')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('unidade');?></span>
						</div>
					</div>

          <div class="col-md-2">
            <label for="custoproduto" class="control-label">CUSTO</label>
            <div class="form-group">
              <input type="text" name="custoproduto" value="<?php echo $this->input->post('custoproduto'); ?>" class="form-control" id="custoproduto" />
            </div>
          </div>
          <div class="col-md-1">
            <label for="margemlucro" class="control-label">% LUCRO</label>
            <div class="form-group">
              <input type="text" name="margemlucro" value="<?php echo $this->input->post('margemlucro'); ?>" class="form-control" id="margemlucro" />
            </div>
          </div>
          <div class="col-md-2">
            <label for="vendaproduto" class="control-label"><span class="text-danger">*</span>VENDA</label>
            <div class="form-group">
              <input type="text" name="vendaproduto" value="<?php echo $this->input->post('vendaproduto'); ?>" class="form-control" id="vendaproduto" />
              <span class="text-danger"><?php echo form_error('vendaproduto');?></span>
            </div>
          </div>

          <div class="col-md-1">
						<label for="estoquemin" class="control-label">EST. MIN</label>
						<div class="form-group">
							<input type="text" name="estoquemin" value="<?php echo $this->input->post('estoquemin'); ?>" class="form-control" id="estoquemin" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="estoquemax" class="control-label">EST. MAX</label>
						<div class="form-group">
							<input type="text" name="estoquemax" value="<?php echo $this->input->post('estoquemax'); ?>" class="form-control" id="estoquemax" />
						</div>
					</div>

          <div class="col-md-1">
						<label for="estoque" class="control-label">Estoque</label>
						<div class="form-group">
							<input type="text" name="estoque" value="<?php echo $this->input->post('estoque'); ?>" class="form-control" id="estoque" disabled/>
						</div>
					</div>

      <!--    <div class="col-md-2">
            <label for="unidade" class="control-label"><span class="text-danger">*</span>PERMITIR ADICIONAIS?</label>
            <div class="form-group">
              <select name="permitiradd" class="form-control">
                <option value="">SELECIONE</option>
                <?php
          //      $adicionais = array(
        //          '0'=>'NÃO',
        //          '1'=>'SIM',

              //  );

    //            foreach($adicionais as $value => $display_text)
                {
      //            $selected = ($value == $this->input->post('permitiradd')) ? ' selected="selected"' : "";
//
//                  echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                }
                ?>
              </select>

            </div>
          </div>!-->

          <div class="col-md-2">
            <label for="impressora_id" class="control-label">Impressora</label>
            <div class="form-group">
              <input type="text" name="impressora_id" value="<?php echo $this->input->post('impressora_id'); ?>" class="form-control" id="impressora_id" />
            </div>
          </div>

					<div class="col-md-2">

						<div class="form-group">

              	<input type="hidden" name="status" value="1" class="form-control" id="status" />

						</div>
					</div>





					<div class="col-md-6">

						<div class="form-group">
						<!--	<input type="hidden" name="datacadastro" value="<?php echo $this->input->post('datacadastro'); ?>" class="form-control" id="datacadastro" />
					!-->	</div>
					</div>

					<div class="col-md-6">

						<div class="form-group">
					<!--		<input type="hidden" name="tipoproduto" value="<?php echo $this->input->post('tipoproduto'); ?>" class="form-control" id="tipoproduto" />
					!-->	</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> SALVAR
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>

<script  src="<?php echo site_url('resources/js/index.js')?>"></script>
<script src="<?php echo site_url('resources/js/jquery.js');?>"></script>

<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>

<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>

<script>


function myFunctionnovo(){
     var codbarra = document.getElementById("codbarra").value;


    if(codbarra.length>1){




                     $.ajax({
 type: "POST",
 url:"<?php echo base_url();?>produto/getproduto",
 data:"codbarra="+codbarra,
 dataType:'json',
 success:function(data)
 {
var len = data.length;
if(len>0){
         alert('PRODUTO JA CADASTRADO');
         $('#codbarra').val('');
          $('#codbarra').focus();
 }
 else{

     $('#categoria').focus();
 }
}
 });

return false;
    }

}

$("#custoproduto").maskMoney();
$('#vendaproduto').maskMoney();

</script>
