<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">EDITAR PRODUTO</h3>
            </div>
			<?php echo form_open('produto/edit/'.$produto['produto_id']); ?>
			<div class="box-body">
				<div class="row clearfix">

          <div class="col-md-4">
            <label for="nomeproduto" class="control-label"><span class="text-danger">*</span>NOME PRODUTO</label>
            <div class="form-group">
              <input type="text" name="nomeproduto" value="<?php echo ($this->input->post('nomeproduto') ? $this->input->post('nomeproduto') : $produto['nomeproduto']); ?>" class="form-control" id="nomeproduto" />
              <span class="text-danger"><?php echo form_error('nomeproduto');?></span>
            </div>
          </div>

          <div class="col-md-2">
						<label for="codbarra" class="control-label">CODIGO DE BARRAS</label>
						<div class="form-group">
							<input type="text" name="codbarra" value="<?php echo ($this->input->post('codbarra') ? $this->input->post('codbarra') : $produto['codbarra']); ?>" class="form-control" id="codbarra" />
							<span class="text-danger"><?php echo form_error('codbarra');?></span>
						</div>
					</div>

          <div class="col-md-3">
            <label for="idcategoria" class="control-label">CATEGORIA</label>
            <div class="form-group">
              <select name="idcategoria" class="form-control">
                <option value="">SELECIONE</option>
                <?php
                foreach($all_categorias as $categoria)
                {
                  $selected = ($categoria['idcategoria'] == $produto['idcategoria']) ? ' selected="selected"' : "";

                  echo '<option value="'.$categoria['idcategoria'].'" '.$selected.'>'.$categoria['nomecategoria'].'</option>';
                }
                ?>
              </select>
            </div>
          </div>
					<div class="col-md-2">
						<label for="unidade" class="control-label"><span class="text-danger">*</span>Unidade</label>
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
									$selected = ($value == $produto['unidade']) ? ' selected="selected"' : "";

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
							<input type="text" name="custoproduto" value="<?php echo ($this->input->post('custoproduto') ? $this->input->post('custoproduto') : $produto['custoproduto']); ?>" class="form-control" id="custoproduto" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="margemlucro" class="control-label">% LUCRO</label>
						<div class="form-group">
							<input type="text" name="margemlucro" value="<?php echo ($this->input->post('margemlucro') ? $this->input->post('margemlucro') : $produto['margemlucro']); ?>" class="form-control" id="margemlucro" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="vendaproduto" class="control-label"><span class="text-danger">*</span>VENDA</label>
						<div class="form-group">
							<input type="text" name="vendaproduto" value="<?php echo ($this->input->post('vendaproduto') ? $this->input->post('vendaproduto') : $produto['vendaproduto']); ?>" class="form-control" id="vendaproduto" />
							<span class="text-danger"><?php echo form_error('vendaproduto');?></span>
						</div>
					</div>
					<div class="col-md-1">
						<label for="estoquemin" class="control-label">EST. MIN</label>
						<div class="form-group">
							<input type="text" name="estoquemin" value="<?php echo ($this->input->post('estoquemin') ? $this->input->post('estoquemin') : $produto['estoquemin']); ?>" class="form-control" id="estoquemin" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="estoquemax" class="control-label">EST. MAX</label>
						<div class="form-group">
							<input type="text" name="estoquemax" value="<?php echo ($this->input->post('estoquemax') ? $this->input->post('estoquemax') : $produto['estoquemax']); ?>" class="form-control" id="estoquemax" />
						</div>
					</div>
  
          <div class="col-md-2">
						<label for="ativo" class="control-label"><span class="text-danger">*</span>Ativo</label>
						<div class="form-group">
							<select name="ativo" class="form-control">
								<option value="">select</option>
								<?php
								$ativo_values = array(
									'1'=>'ATIVO',
									'0'=>'INATIVO',
								);

								foreach($ativo_values as $value => $display_text)
								{
									$selected = ($value == $produto['ativo']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('ativo');?></span>
						</div>
					</div>
					<div class="col-md-2">
						<label for="impressora_id" class="control-label">Impressora Id</label>
						<div class="form-group">
							<input type="text" name="impressora_id" value="<?php echo ($this->input->post('impressora_id') ? $this->input->post('impressora_id') : $produto['impressora_id']); ?>" class="form-control" id="impressora_id" />
						</div>
					</div>



				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> ALTERAR
				</button>
	        </div>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>

<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>

<script>
$("#custoproduto").maskMoney();
$('#vendaproduto').maskMoney();

</script>
