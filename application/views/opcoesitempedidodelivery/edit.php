<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Opcoesitempedidodelivery Edit</h3>
            </div>
			<?php echo form_open('opcoesitempedidodelivery/edit/'.$opcoesitempedidodelivery['idopcoesitempedidomesa']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="iditenspedidodelivery" class="control-label">Iditenspedidodelivery</label>
						<div class="form-group">
							<input type="text" name="iditenspedidodelivery" value="<?php echo ($this->input->post('iditenspedidodelivery') ? $this->input->post('iditenspedidodelivery') : $opcoesitempedidodelivery['iditenspedidodelivery']); ?>" class="form-control" id="iditenspedidodelivery" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idadicionais" class="control-label">Idadicionais</label>
						<div class="form-group">
							<input type="text" name="idadicionais" value="<?php echo ($this->input->post('idadicionais') ? $this->input->post('idadicionais') : $opcoesitempedidodelivery['idadicionais']); ?>" class="form-control" id="idadicionais" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="valor_adicional" class="control-label">Valor Adicional</label>
						<div class="form-group">
							<input type="text" name="valor_adicional" value="<?php echo ($this->input->post('valor_adicional') ? $this->input->post('valor_adicional') : $opcoesitempedidodelivery['valor_adicional']); ?>" class="form-control" id="valor_adicional" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observacao" class="control-label">Observacao</label>
						<div class="form-group">
							<input type="text" name="observacao" value="<?php echo ($this->input->post('observacao') ? $this->input->post('observacao') : $opcoesitempedidodelivery['observacao']); ?>" class="form-control" id="observacao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idpedidodelivery" class="control-label">Idpedidodelivery</label>
						<div class="form-group">
							<input type="text" name="idpedidodelivery" value="<?php echo ($this->input->post('idpedidodelivery') ? $this->input->post('idpedidodelivery') : $opcoesitempedidodelivery['idpedidodelivery']); ?>" class="form-control" id="idpedidodelivery" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome" class="control-label">Nome</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $opcoesitempedidodelivery['nome']); ?>" class="form-control" id="nome" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipoopcao" class="control-label">Tipoopcao</label>
						<div class="form-group">
							<input type="text" name="tipoopcao" value="<?php echo ($this->input->post('tipoopcao') ? $this->input->post('tipoopcao') : $opcoesitempedidodelivery['tipoopcao']); ?>" class="form-control" id="tipoopcao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idobservacao" class="control-label">Idobservacao</label>
						<div class="form-group">
							<input type="text" name="idobservacao" value="<?php echo ($this->input->post('idobservacao') ? $this->input->post('idobservacao') : $opcoesitempedidodelivery['idobservacao']); ?>" class="form-control" id="idobservacao" />
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