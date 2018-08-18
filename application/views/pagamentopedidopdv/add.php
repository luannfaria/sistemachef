<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pagamentopedidopdv Add</h3>
            </div>
            <?php echo form_open('pagamentopedidopdv/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idpedidopdv" class="control-label">Idpedidopdv</label>
						<div class="form-group">
							<input type="text" name="idpedidopdv" value="<?php echo $this->input->post('idpedidopdv'); ?>" class="form-control" id="idpedidopdv" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="valor" class="control-label">Valor</label>
						<div class="form-group">
							<input type="text" name="valor" value="<?php echo $this->input->post('valor'); ?>" class="form-control" id="valor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao" class="control-label">Descricao</label>
						<div class="form-group">
							<input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idformapagamento" class="control-label">Idformapagamento</label>
						<div class="form-group">
							<input type="text" name="idformapagamento" value="<?php echo $this->input->post('idformapagamento'); ?>" class="form-control" id="idformapagamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="data" class="control-label">Data</label>
						<div class="form-group">
							<input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="has-datetimepicker form-control" id="data" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipomovimentacao" class="control-label">Tipomovimentacao</label>
						<div class="form-group">
							<input type="text" name="tipomovimentacao" value="<?php echo $this->input->post('tipomovimentacao'); ?>" class="form-control" id="tipomovimentacao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="usuario_id" class="control-label">Usuario Id</label>
						<div class="form-group">
							<input type="text" name="usuario_id" value="<?php echo $this->input->post('usuario_id'); ?>" class="form-control" id="usuario_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="formapgto" class="control-label">Formapgto</label>
						<div class="form-group">
							<input type="text" name="formapgto" value="<?php echo $this->input->post('formapgto'); ?>" class="form-control" id="formapgto" />
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