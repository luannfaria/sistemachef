<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Iteminventario Add</h3>
            </div>
            <?php echo form_open('itensinventario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idinventario" class="control-label">Idinventario</label>
						<div class="form-group">
							<input type="text" name="idinventario" value="<?php echo $this->input->post('idinventario'); ?>" class="form-control" id="idinventario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="produto_id" class="control-label">Produto Id</label>
						<div class="form-group">
							<input type="text" name="produto_id" value="<?php echo $this->input->post('produto_id'); ?>" class="form-control" id="produto_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomeproduto" class="control-label">Nomeproduto</label>
						<div class="form-group">
							<input type="text" name="nomeproduto" value="<?php echo $this->input->post('nomeproduto'); ?>" class="form-control" id="nomeproduto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="codbarra" class="control-label">Codbarra</label>
						<div class="form-group">
							<input type="text" name="codbarra" value="<?php echo $this->input->post('codbarra'); ?>" class="form-control" id="codbarra" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quantidade" class="control-label">Quantidade</label>
						<div class="form-group">
							<input type="text" name="quantidade" value="<?php echo $this->input->post('quantidade'); ?>" class="form-control" id="quantidade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time" class="control-label">Time</label>
						<div class="form-group">
							<input type="text" name="time" value="<?php echo $this->input->post('time'); ?>" class="has-datetimepicker form-control" id="time" />
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