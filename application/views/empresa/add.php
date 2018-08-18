<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">NOVA EMPRESA</h3>
            </div>
            <?php echo form_open('empresa/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-4">
						<label for="razaosocial" class="control-label"><span class="text-danger">*</span>Razão social</label>
						<div class="form-group">
							<input type="text" name="razaosocial" value="<?php echo $this->input->post('razaosocial'); ?>" class="form-control" id="razaosocial" />
							<span class="text-danger"><?php echo form_error('razaosocial');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="nomefantasia" class="control-label"><span class="text-danger">*</span>Nome fantansia</label>
						<div class="form-group">
							<input type="text" name="nomefantasia" value="<?php echo $this->input->post('nomefantasia'); ?>" class="form-control" id="nomefantasia" />
							<span class="text-danger"><?php echo form_error('nomefantasia');?></span>
						</div>
					</div>
					<div class="col-md-3">
						<label for="cnpj" class="control-label">CNPJ</label>
						<div class="form-group">
							<input type="text" name="cnpj" value="<?php echo $this->input->post('cnpj'); ?>" class="form-control" id="cnpj" />
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
					<div class="col-md-2">
						<label for="telefonefixo" class="control-label">Telefone</label>
						<div class="form-group">
							<input type="text" name="telefonefixo" value="<?php echo $this->input->post('telefonefixo'); ?>" class="form-control" id="telefonefixo" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="celular" class="control-label">Celular</label>
						<div class="form-group">
							<input type="text" name="celular" value="<?php echo $this->input->post('celular'); ?>" class="form-control" id="celular" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="taxaservico" class="control-label">% serviço</label>
						<div class="form-group">
							<input type="text" name="taxaservico" value="<?php echo $this->input->post('taxaservico'); ?>" class="form-control" id="taxaservico" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="numeromesas" class="control-label">Nº de mesas</label>
						<div class="form-group">
							<input type="text" name="numeromesas" value="<?php echo $this->input->post('numeromesas'); ?>" class="form-control" id="numeromesas" />
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
$("#telefonefixo").mask("(00) 0000-0000");
$("#cnpj").mask("00.000.000/0000-00");
</script>
