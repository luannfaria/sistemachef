<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Itempedidodelivery Edit</h3>
            </div>
			<?php echo form_open('itenspedidodelivery/edit/'.$itempedidodelivery['iditenspedidodelivey']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idpedidodelivery" class="control-label">Idpedidodelivery</label>
						<div class="form-group">
							<input type="text" name="idpedidodelivery" value="<?php echo ($this->input->post('idpedidodelivery') ? $this->input->post('idpedidodelivery') : $itempedidodelivery['idpedidodelivery']); ?>" class="form-control" id="idpedidodelivery" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produto_id" class="control-label">Produto Id</label>
						<div class="form-group">
							<input type="text" name="produto_id" value="<?php echo ($this->input->post('produto_id') ? $this->input->post('produto_id') : $itempedidodelivery['produto_id']); ?>" class="form-control" id="produto_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quantidade" class="control-label">Quantidade</label>
						<div class="form-group">
							<input type="text" name="quantidade" value="<?php echo ($this->input->post('quantidade') ? $this->input->post('quantidade') : $itempedidodelivery['quantidade']); ?>" class="form-control" id="quantidade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="preco" class="control-label">Preco</label>
						<div class="form-group">
							<input type="text" name="preco" value="<?php echo ($this->input->post('preco') ? $this->input->post('preco') : $itempedidodelivery['preco']); ?>" class="form-control" id="preco" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="impresso" class="control-label">Impresso</label>
						<div class="form-group">
							<input type="text" name="impresso" value="<?php echo ($this->input->post('impresso') ? $this->input->post('impresso') : $itempedidodelivery['impresso']); ?>" class="form-control" id="impresso" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="usuario_id" class="control-label">Usuario Id</label>
						<div class="form-group">
							<input type="text" name="usuario_id" value="<?php echo ($this->input->post('usuario_id') ? $this->input->post('usuario_id') : $itempedidodelivery['usuario_id']); ?>" class="form-control" id="usuario_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomeitem" class="control-label">Nomeitem</label>
						<div class="form-group">
							<input type="text" name="nomeitem" value="<?php echo ($this->input->post('nomeitem') ? $this->input->post('nomeitem') : $itempedidodelivery['nomeitem']); ?>" class="form-control" id="nomeitem" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="horapedidoitem" class="control-label">Horapedidoitem</label>
						<div class="form-group">
							<input type="text" name="horapedidoitem" value="<?php echo ($this->input->post('horapedidoitem') ? $this->input->post('horapedidoitem') : $itempedidodelivery['horapedidoitem']); ?>" class="form-control" id="horapedidoitem" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="precoadicional" class="control-label">Precoadicional</label>
						<div class="form-group">
							<input type="text" name="precoadicional" value="<?php echo ($this->input->post('precoadicional') ? $this->input->post('precoadicional') : $itempedidodelivery['precoadicional']); ?>" class="form-control" id="precoadicional" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timstamp" class="control-label">Timstamp</label>
						<div class="form-group">
							<input type="text" name="timstamp" value="<?php echo ($this->input->post('timstamp') ? $this->input->post('timstamp') : $itempedidodelivery['timstamp']); ?>" class="has-datetimepicker form-control" id="timstamp" />
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