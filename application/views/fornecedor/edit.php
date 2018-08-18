<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">EDITAR FORNECEDOR</h3>
            </div>
			<?php echo form_open('fornecedor/edit/'.$fornecedor['idfornecedor']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-4">
						<label for="razaosocial" class="control-label"><span class="text-danger">*</span>Razão social</label>
						<div class="form-group">
							<input type="text" name="razaosocial" value="<?php echo ($this->input->post('razaosocial') ? $this->input->post('razaosocial') : $fornecedor['razaosocial']); ?>" class="form-control" id="razaosocial" />
							<span class="text-danger"><?php echo form_error('razaosocial');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="nomefantasia" class="control-label"><span class="text-danger">*</span>Fantasia</label>
						<div class="form-group">
							<input type="text" name="nomefantasia" value="<?php echo ($this->input->post('nomefantasia') ? $this->input->post('nomefantasia') : $fornecedor['nomefantasia']); ?>" class="form-control" id="nomefantasia" />
							<span class="text-danger"><?php echo form_error('nomefantasia');?></span>
						</div>
					</div>
					<div class="col-md-3">
						<label for="cnpj" class="control-label"><span class="text-danger">*</span>CNPJ</label>
						<div class="form-group">
							<input type="text" name="cnpj" value="<?php echo ($this->input->post('cnpj') ? $this->input->post('cnpj') : $fornecedor['cnpj']); ?>" class="form-control" id="cnpj" />
							<span class="text-danger"><?php echo form_error('cnpj');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="rua" class="control-label">Rua</label>
						<div class="form-group">
							<input type="text" name="rua" value="<?php echo ($this->input->post('rua') ? $this->input->post('rua') : $fornecedor['rua']); ?>" class="form-control" id="rua" />
						</div>
					</div>
					<div class="col-md-1">
						<label for="numero" class="control-label">Numero</label>
						<div class="form-group">
							<input type="text" name="numero" value="<?php echo ($this->input->post('numero') ? $this->input->post('numero') : $fornecedor['numero']); ?>" class="form-control" id="numero" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="bairro" class="control-label">Bairro</label>
						<div class="form-group">
							<input type="text" name="bairro" value="<?php echo ($this->input->post('bairro') ? $this->input->post('bairro') : $fornecedor['bairro']); ?>" class="form-control" id="bairro" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="cidade" class="control-label">Cidade</label>
						<div class="form-group">
							<input type="text" name="cidade" value="<?php echo ($this->input->post('cidade') ? $this->input->post('cidade') : $fornecedor['cidade']); ?>" class="form-control" id="cidade" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="telefonefixo" class="control-label">Telefone</label>
						<div class="form-group">
							<input type="text" name="telefonefixo" value="<?php echo ($this->input->post('telefonefixo') ? $this->input->post('telefonefixo') : $fornecedor['telefonefixo']); ?>" class="form-control" id="telefonefixo" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="celular" class="control-label">Celular</label>
						<div class="form-group">
							<input type="text" name="celular" value="<?php echo ($this->input->post('celular') ? $this->input->post('celular') : $fornecedor['celular']); ?>" class="form-control" id="celular" />
						</div>
					</div>
					<div class="col-md-7">
						<label for="observacao" class="control-label">Observacao</label>
						<div class="form-group">
							<input type="text" name="observacao" value="<?php echo ($this->input->post('observacao') ? $this->input->post('observacao') : $fornecedor['observacao']); ?>" class="form-control" id="observacao" />
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
