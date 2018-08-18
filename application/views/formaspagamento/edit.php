<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Formapagamento Edit</h3>
            </div>
			<?php echo form_open('formaspagamento/edit/'.$formapagamento['idformaspagamento']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nome" class="control-label">Nome</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $formapagamento['nome']); ?>" class="form-control" id="nome" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipopagamento" class="control-label">Tipopagamento</label>
						<div class="form-group">
							<input type="text" name="tipopagamento" value="<?php echo ($this->input->post('tipopagamento') ? $this->input->post('tipopagamento') : $formapagamento['tipopagamento']); ?>" class="form-control" id="tipopagamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numeroparcelas" class="control-label">Numeroparcelas</label>
						<div class="form-group">
							<input type="text" name="numeroparcelas" value="<?php echo ($this->input->post('numeroparcelas') ? $this->input->post('numeroparcelas') : $formapagamento['numeroparcelas']); ?>" class="form-control" id="numeroparcelas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="prazoentreparcelas" class="control-label">Prazoentreparcelas</label>
						<div class="form-group">
							<input type="text" name="prazoentreparcelas" value="<?php echo ($this->input->post('prazoentreparcelas') ? $this->input->post('prazoentreparcelas') : $formapagamento['prazoentreparcelas']); ?>" class="form-control" id="prazoentreparcelas" />
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