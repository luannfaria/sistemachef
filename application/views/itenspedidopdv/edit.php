<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Itempedidopdv Edit</h3>
            </div>
			<?php echo form_open('itenspedidopdv/edit/'.$itempedidopdv['iditenspedidodelivery']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idpedidopdv" class="control-label">Idpedidopdv</label>
						<div class="form-group">
							<input type="text" name="idpedidopdv" value="<?php echo ($this->input->post('idpedidopdv') ? $this->input->post('idpedidopdv') : $itempedidopdv['idpedidopdv']); ?>" class="form-control" id="idpedidopdv" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produto_id" class="control-label">Produto Id</label>
						<div class="form-group">
							<input type="text" name="produto_id" value="<?php echo ($this->input->post('produto_id') ? $this->input->post('produto_id') : $itempedidopdv['produto_id']); ?>" class="form-control" id="produto_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomeproduto" class="control-label">Nomeproduto</label>
						<div class="form-group">
							<input type="text" name="nomeproduto" value="<?php echo ($this->input->post('nomeproduto') ? $this->input->post('nomeproduto') : $itempedidopdv['nomeproduto']); ?>" class="form-control" id="nomeproduto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quantidade" class="control-label">Quantidade</label>
						<div class="form-group">
							<input type="text" name="quantidade" value="<?php echo ($this->input->post('quantidade') ? $this->input->post('quantidade') : $itempedidopdv['quantidade']); ?>" class="form-control" id="quantidade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="valor" class="control-label">Valor</label>
						<div class="form-group">
							<input type="text" name="valor" value="<?php echo ($this->input->post('valor') ? $this->input->post('valor') : $itempedidopdv['valor']); ?>" class="form-control" id="valor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hora" class="control-label">Hora</label>
						<div class="form-group">
							<input type="text" name="hora" value="<?php echo ($this->input->post('hora') ? $this->input->post('hora') : $itempedidopdv['hora']); ?>" class="form-control" id="hora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="data" class="control-label">Data</label>
						<div class="form-group">
							<input type="text" name="data" value="<?php echo ($this->input->post('data') ? $this->input->post('data') : $itempedidopdv['data']); ?>" class="form-control" id="data" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="usuario_id" class="control-label">Usuario Id</label>
						<div class="form-group">
							<input type="text" name="usuario_id" value="<?php echo ($this->input->post('usuario_id') ? $this->input->post('usuario_id') : $itempedidopdv['usuario_id']); ?>" class="form-control" id="usuario_id" />
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