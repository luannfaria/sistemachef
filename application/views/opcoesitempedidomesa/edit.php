<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Opcoesitempedidomesa Edit</h3>
            </div>
			<?php echo form_open('opcoesitempedidomesa/edit/'.$opcoesitempedidomesa['idopcoesitempedidomesa']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="iditenspedidomesa" class="control-label">Iditenspedidomesa</label>
						<div class="form-group">
							<input type="text" name="iditenspedidomesa" value="<?php echo ($this->input->post('iditenspedidomesa') ? $this->input->post('iditenspedidomesa') : $opcoesitempedidomesa['iditenspedidomesa']); ?>" class="form-control" id="iditenspedidomesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idadicionais" class="control-label">Idadicionais</label>
						<div class="form-group">
							<input type="text" name="idadicionais" value="<?php echo ($this->input->post('idadicionais') ? $this->input->post('idadicionais') : $opcoesitempedidomesa['idadicionais']); ?>" class="form-control" id="idadicionais" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="valor_adicional" class="control-label">Valor Adicional</label>
						<div class="form-group">
							<input type="text" name="valor_adicional" value="<?php echo ($this->input->post('valor_adicional') ? $this->input->post('valor_adicional') : $opcoesitempedidomesa['valor_adicional']); ?>" class="form-control" id="valor_adicional" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observacao" class="control-label">Observacao</label>
						<div class="form-group">
							<input type="text" name="observacao" value="<?php echo ($this->input->post('observacao') ? $this->input->post('observacao') : $opcoesitempedidomesa['observacao']); ?>" class="form-control" id="observacao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idpedidomesa" class="control-label">Idpedidomesa</label>
						<div class="form-group">
							<input type="text" name="idpedidomesa" value="<?php echo ($this->input->post('idpedidomesa') ? $this->input->post('idpedidomesa') : $opcoesitempedidomesa['idpedidomesa']); ?>" class="form-control" id="idpedidomesa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome" class="control-label">Nome</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $opcoesitempedidomesa['nome']); ?>" class="form-control" id="nome" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipoopcao" class="control-label">Tipoopcao</label>
						<div class="form-group">
							<input type="text" name="tipoopcao" value="<?php echo ($this->input->post('tipoopcao') ? $this->input->post('tipoopcao') : $opcoesitempedidomesa['tipoopcao']); ?>" class="form-control" id="tipoopcao" />
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