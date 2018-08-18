<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Mesasaberta Edit</h3>
            </div>
			<?php echo form_open('mesasaberta/edit/'.$mesasaberta['idmesasabertas']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="numeromesa" class="control-label">Numeromesa</label>
						<div class="form-group">
							<input type="text" name="numeromesa" value="<?php echo ($this->input->post('numeromesa') ? $this->input->post('numeromesa') : $mesasaberta['numeromesa']); ?>" class="form-control" id="numeromesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idpedidomesa" class="control-label">Idpedidomesa</label>
						<div class="form-group">
							<input type="text" name="idpedidomesa" value="<?php echo ($this->input->post('idpedidomesa') ? $this->input->post('idpedidomesa') : $mesasaberta['idpedidomesa']); ?>" class="form-control" id="idpedidomesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dataabertura" class="control-label">Dataabertura</label>
						<div class="form-group">
							<input type="text" name="dataabertura" value="<?php echo ($this->input->post('dataabertura') ? $this->input->post('dataabertura') : $mesasaberta['dataabertura']); ?>" class="form-control" id="dataabertura" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="horaabertura" class="control-label">Horaabertura</label>
						<div class="form-group">
							<input type="text" name="horaabertura" value="<?php echo ($this->input->post('horaabertura') ? $this->input->post('horaabertura') : $mesasaberta['horaabertura']); ?>" class="form-control" id="horaabertura" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subtotal" class="control-label">Subtotal</label>
						<div class="form-group">
							<input type="text" name="subtotal" value="<?php echo ($this->input->post('subtotal') ? $this->input->post('subtotal') : $mesasaberta['subtotal']); ?>" class="form-control" id="subtotal" />
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