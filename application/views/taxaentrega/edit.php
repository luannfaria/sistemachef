<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">EDITAR TAXA DE ENTREGA</h3>
            </div>
			<?php echo form_open('taxaentrega/edit/'.$taxaentrega['idtaxaentrega']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-4">
						<label for="nome" class="control-label">Nome da taxa</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $taxaentrega['nome']); ?>" class="form-control" id="nome" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="valor" class="control-label">Valor</label>
						<div class="form-group">
							<input type="text" name="valor" value="<?php echo ($this->input->post('valor') ? $this->input->post('valor') : $taxaentrega['valor']); ?>" class="form-control" id="valor" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> ALTERAR
				</button>
	        </div>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>

<script>
$("#valor").maskMoney();


</script>
