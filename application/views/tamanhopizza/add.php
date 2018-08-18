<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tamanhopizza Add</h3>
            </div>
            <?php echo form_open('tamanhopizza/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idpizza" class="control-label">Idpizza</label>
						<div class="form-group">
							<input type="text" name="idpizza" value="<?php echo $this->input->post('idpizza'); ?>" class="form-control" id="idpizza" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tamanho" class="control-label">Tamanho</label>
						<div class="form-group">
							<input type="text" name="tamanho" value="<?php echo $this->input->post('tamanho'); ?>" class="form-control" id="tamanho" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="custo" class="control-label">Custo</label>
						<div class="form-group">
							<input type="text" name="custo" value="<?php echo $this->input->post('custo'); ?>" class="form-control" id="custo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="venda" class="control-label">Venda</label>
						<div class="form-group">
							<input type="text" name="venda" value="<?php echo $this->input->post('venda'); ?>" class="form-control" id="venda" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="siglatamanho" class="control-label">Siglatamanho</label>
						<div class="form-group">
							<input type="text" name="siglatamanho" value="<?php echo $this->input->post('siglatamanho'); ?>" class="form-control" id="siglatamanho" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="impressora" class="control-label">Impressora</label>
						<div class="form-group">
							<input type="text" name="impressora" value="<?php echo $this->input->post('impressora'); ?>" class="form-control" id="impressora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipocobranca" class="control-label">Tipocobranca</label>
						<div class="form-group">
							<input type="text" name="tipocobranca" value="<?php echo $this->input->post('tipocobranca'); ?>" class="form-control" id="tipocobranca" />
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