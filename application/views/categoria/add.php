<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">CATEGORIA</h3>
            </div>
            <?php echo form_open('categoria/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nomecategoria" class="control-label"><span class="text-danger">*</span>NOME DA CATEGORIA</label>
						<div class="form-group">
							<input type="text" name="nomecategoria" value="<?php echo $this->input->post('nomecategoria'); ?>" class="form-control" id="nomecategoria" />
							<span class="text-danger"><?php echo form_error('nomecategoria');?></span>
						</div>
					</div>
					
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> SALVAR
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
