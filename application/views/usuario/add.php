<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Add</h3>
            </div>
            <?php echo form_open('usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="login" class="control-label">Login</label>
						<div class="form-group">
							<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" class="form-control" id="login" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="senha" class="control-label">Senha</label>
						<div class="form-group">
							<input type="text" name="senha" value="<?php echo $this->input->post('senha'); ?>" class="form-control" id="senha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="permissoes" class="control-label">Permissoes</label>
						<div class="form-group">
							<input type="text" name="permissoes" value="<?php echo $this->input->post('permissoes'); ?>" class="form-control" id="permissoes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="habilitado" class="control-label">Habilitado</label>
						<div class="form-group">
							<input type="text" name="habilitado" value="<?php echo $this->input->post('habilitado'); ?>" class="form-control" id="habilitado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomepermissao" class="control-label">Nomepermissao</label>
						<div class="form-group">
							<input type="text" name="nomepermissao" value="<?php echo $this->input->post('nomepermissao'); ?>" class="form-control" id="nomepermissao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="datacadastro" class="control-label">Datacadastro</label>
						<div class="form-group">
							<input type="text" name="datacadastro" value="<?php echo $this->input->post('datacadastro'); ?>" class="has-datetimepicker form-control" id="datacadastro" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comissao" class="control-label">Comissao</label>
						<div class="form-group">
							<input type="text" name="comissao" value="<?php echo $this->input->post('comissao'); ?>" class="form-control" id="comissao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="taxacomissao" class="control-label">Taxacomissao</label>
						<div class="form-group">
							<input type="text" name="taxacomissao" value="<?php echo $this->input->post('taxacomissao'); ?>" class="form-control" id="taxacomissao" />
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