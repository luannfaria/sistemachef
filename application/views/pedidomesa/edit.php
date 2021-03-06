<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pedidomesa Edit</h3>
            </div>
			<?php echo form_open('pedidomesa/edit/'.$pedidomesa['idpedidomesa']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="data" class="control-label">Data</label>
						<div class="form-group">
							<input type="text" name="data" value="<?php echo ($this->input->post('data') ? $this->input->post('data') : $pedidomesa['data']); ?>" class="has-datetimepicker form-control" id="data" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numeromesa" class="control-label">Numeromesa</label>
						<div class="form-group">
							<input type="text" name="numeromesa" value="<?php echo ($this->input->post('numeromesa') ? $this->input->post('numeromesa') : $pedidomesa['numeromesa']); ?>" class="form-control" id="numeromesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idclientes" class="control-label">Idclientes</label>
						<div class="form-group">
							<input type="text" name="idclientes" value="<?php echo ($this->input->post('idclientes') ? $this->input->post('idclientes') : $pedidomesa['idclientes']); ?>" class="form-control" id="idclientes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subtotal" class="control-label">Subtotal</label>
						<div class="form-group">
							<input type="text" name="subtotal" value="<?php echo ($this->input->post('subtotal') ? $this->input->post('subtotal') : $pedidomesa['subtotal']); ?>" class="form-control" id="subtotal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="taxaservico" class="control-label">Taxaservico</label>
						<div class="form-group">
							<input type="text" name="taxaservico" value="<?php echo ($this->input->post('taxaservico') ? $this->input->post('taxaservico') : $pedidomesa['taxaservico']); ?>" class="form-control" id="taxaservico" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desconto" class="control-label">Desconto</label>
						<div class="form-group">
							<input type="text" name="desconto" value="<?php echo ($this->input->post('desconto') ? $this->input->post('desconto') : $pedidomesa['desconto']); ?>" class="form-control" id="desconto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pago" class="control-label">Pago</label>
						<div class="form-group">
							<input type="text" name="pago" value="<?php echo ($this->input->post('pago') ? $this->input->post('pago') : $pedidomesa['pago']); ?>" class="form-control" id="pago" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="horaabertura" class="control-label">Horaabertura</label>
						<div class="form-group">
							<input type="text" name="horaabertura" value="<?php echo ($this->input->post('horaabertura') ? $this->input->post('horaabertura') : $pedidomesa['horaabertura']); ?>" class="form-control" id="horaabertura" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="horafechamento" class="control-label">Horafechamento</label>
						<div class="form-group">
							<input type="text" name="horafechamento" value="<?php echo ($this->input->post('horafechamento') ? $this->input->post('horafechamento') : $pedidomesa['horafechamento']); ?>" class="form-control" id="horafechamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pessoasmesa" class="control-label">Pessoasmesa</label>
						<div class="form-group">
							<input type="text" name="pessoasmesa" value="<?php echo ($this->input->post('pessoasmesa') ? $this->input->post('pessoasmesa') : $pedidomesa['pessoasmesa']); ?>" class="form-control" id="pessoasmesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="totalpago" class="control-label">Totalpago</label>
						<div class="form-group">
							<input type="text" name="totalpago" value="<?php echo ($this->input->post('totalpago') ? $this->input->post('totalpago') : $pedidomesa['totalpago']); ?>" class="form-control" id="totalpago" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="valoremaberto" class="control-label">Valoremaberto</label>
						<div class="form-group">
							<input type="text" name="valoremaberto" value="<?php echo ($this->input->post('valoremaberto') ? $this->input->post('valoremaberto') : $pedidomesa['valoremaberto']); ?>" class="form-control" id="valoremaberto" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>