<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Iteminventario Edit</h3>
            </div>
			<?php echo form_open('itensinventario/edit/'.$iteminventario['iditensinventario']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idinventario" class="control-label">Idinventario</label>
						<div class="form-group">
							<input type="text" name="idinventario" value="<?php echo ($this->input->post('idinventario') ? $this->input->post('idinventario') : $iteminventario['idinventario']); ?>" class="form-control" id="idinventario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produto_id" class="control-label">Produto Id</label>
						<div class="form-group">
							<input type="text" name="produto_id" value="<?php echo ($this->input->post('produto_id') ? $this->input->post('produto_id') : $iteminventario['produto_id']); ?>" class="form-control" id="produto_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomeproduto" class="control-label">Nomeproduto</label>
						<div class="form-group">
							<input type="text" name="nomeproduto" value="<?php echo ($this->input->post('nomeproduto') ? $this->input->post('nomeproduto') : $iteminventario['nomeproduto']); ?>" class="form-control" id="nomeproduto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="codbarra" class="control-label">Codbarra</label>
						<div class="form-group">
							<input type="text" name="codbarra" value="<?php echo ($this->input->post('codbarra') ? $this->input->post('codbarra') : $iteminventario['codbarra']); ?>" class="form-control" id="codbarra" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quantidade" class="control-label">Quantidade</label>
						<div class="form-group">
							<input type="text" name="quantidade" value="<?php echo ($this->input->post('quantidade') ? $this->input->post('quantidade') : $iteminventario['quantidade']); ?>" class="form-control" id="quantidade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time" class="control-label">Time</label>
						<div class="form-group">
							<input type="text" name="time" value="<?php echo ($this->input->post('time') ? $this->input->post('time') : $iteminventario['time']); ?>" class="has-datetimepicker form-control" id="time" />
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