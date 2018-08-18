<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pedidopdv Edit</h3>
            </div>
			<?php echo form_open('pedidopdv/edit/'.$pedidopdv['idpedidopdv']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="data" class="control-label">Data</label>
						<div class="form-group">
							<input type="text" name="data" value="<?php echo ($this->input->post('data') ? $this->input->post('data') : $pedidopdv['data']); ?>" class="form-control" id="data" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hora" class="control-label">Hora</label>
						<div class="form-group">
							<input type="text" name="hora" value="<?php echo ($this->input->post('hora') ? $this->input->post('hora') : $pedidopdv['hora']); ?>" class="form-control" id="hora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subtotal" class="control-label">Subtotal</label>
						<div class="form-group">
							<input type="text" name="subtotal" value="<?php echo ($this->input->post('subtotal') ? $this->input->post('subtotal') : $pedidopdv['subtotal']); ?>" class="form-control" id="subtotal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desconto" class="control-label">Desconto</label>
						<div class="form-group">
							<input type="text" name="desconto" value="<?php echo ($this->input->post('desconto') ? $this->input->post('desconto') : $pedidopdv['desconto']); ?>" class="form-control" id="desconto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cliente_id" class="control-label">Cliente Id</label>
						<div class="form-group">
							<input type="text" name="cliente_id" value="<?php echo ($this->input->post('cliente_id') ? $this->input->post('cliente_id') : $pedidopdv['cliente_id']); ?>" class="form-control" id="cliente_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pago" class="control-label">Pago</label>
						<div class="form-group">
							<input type="text" name="pago" value="<?php echo ($this->input->post('pago') ? $this->input->post('pago') : $pedidopdv['pago']); ?>" class="form-control" id="pago" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="horafechamento" class="control-label">Horafechamento</label>
						<div class="form-group">
							<input type="text" name="horafechamento" value="<?php echo ($this->input->post('horafechamento') ? $this->input->post('horafechamento') : $pedidopdv['horafechamento']); ?>" class="form-control" id="horafechamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="usuarioid" class="control-label">Usuarioid</label>
						<div class="form-group">
							<input type="text" name="usuarioid" value="<?php echo ($this->input->post('usuarioid') ? $this->input->post('usuarioid') : $pedidopdv['usuarioid']); ?>" class="form-control" id="usuarioid" />
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