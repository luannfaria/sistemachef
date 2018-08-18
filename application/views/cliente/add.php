<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">NOVO CLIENTE</h3>
            </div>
            <?php echo form_open('cliente/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">

					<div class="col-md-6">
						<label for="nome" class="control-label"><span class="text-danger">*</span>Nome completo</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
							<span class="text-danger"><?php echo form_error('nome');?></span>
						</div>
					</div>
					<div class="col-md-2">
						<label for="rg" class="control-label">RG</label>
						<div class="form-group">

							<input type="text" name="rg" value="<?php echo $this->input->post('rg'); ?>" class="form-control" id="rg" />
						</div>
					</div>

          <div class="col-md-2">
						<label for="cpf" class="control-label">CPF</label>
						<div class="form-group">
							<input type="text" name="cpf" value="<?php echo $this->input->post('cpf'); ?>" class="form-control" id="cpf" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="datanasc" class="control-label">Data Nascimento</label>
						<div class="form-group">
							<input type="text" name="datanasc" value="<?php echo $this->input->post('datanasc'); ?>" class="has-datepicker form-control" id="datanasc" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="telfixo" class="control-label">Tel. fixo</label>
						<div class="form-group">
							<input type="text" name="telfixo" value="<?php echo $this->input->post('telfixo'); ?>" class="form-control" id="telfixo" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="celular" class="control-label">Celular</label>
						<div class="form-group">
							<input type="text" name="celular" value="<?php echo $this->input->post('celular'); ?>" class="form-control" id="celular" />
						</div>
					</div>

					<div class="col-md-4">
						<label for="rua" class="control-label">Rua</label>
						<div class="form-group">
							<input type="text" name="rua" value="<?php echo $this->input->post('rua'); ?>" class="form-control" id="rua" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="numero" class="control-label">Numero</label>
						<div class="form-group">
							<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="bairro" class="control-label">Bairro</label>
						<div class="form-group">
							<input type="text" name="bairro" value="<?php echo $this->input->post('bairro'); ?>" class="form-control" id="bairro" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="cidade" class="control-label">Cidade</label>
						<div class="form-group">
							<input type="text" name="cidade" value="<?php echo $this->input->post('cidade'); ?>" class="form-control" id="cidade" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="observacao" class="control-label">Observação</label>
						<div class="form-group">
							<input type="text" name="observacao" value="<?php echo $this->input->post('observacao'); ?>" class="form-control" id="observacao" />

              <input type="hidden" name="ativo" value="1">
						</div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script type="text/javascript">

$("#celular").mask("(00) 00000-0000");
$("#telfixo").mask("(00) 0000-0000");
</script>
