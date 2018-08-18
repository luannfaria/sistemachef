<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">EDITAR ADICIONAL</h3>
            </div>
			<?php echo form_open('adicional/edit/'.$adicional['idadicionais']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-4">
						<label for="nome" class="control-label"><span class="text-danger">*</span>Nome</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $adicional['nome']); ?>" class="form-control" id="nome" />
							<span class="text-danger"><?php echo form_error('nome');?></span>
						</div>
					</div>
					<div class="col-md-2">
						<label for="custo" class="control-label">Custo</label>
						<div class="form-group">
							<input type="text" name="custo" onclick="this.value=''" value="<?php echo ($this->input->post('custo') ? $this->input->post('custo') : $adicional['custo']); ?>" class="form-control" id="custo" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="valor" class="control-label"><span class="text-danger">*</span>Valor</label>
						<div class="form-group">
							<input type="text" name="valor"  onclick="this.value=''" value="<?php echo ($this->input->post('valor') ? $this->input->post('valor') : $adicional['valor']); ?>" class="form-control" id="valor" />
							<span class="text-danger"><?php echo form_error('valor');?></span>
						</div>
					</div>
          <div class="col-md-2">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
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
									$selected = ($value == $adicional['status']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								}
								?>
							</select>
							<span class="text-danger"><?php echo form_error('ativo');?></span>
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
$("#custo").maskMoney();
$('#valor').maskMoney();

</script>
