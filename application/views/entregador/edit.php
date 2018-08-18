<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">EDITAR ENTREGADOR</h3>
            </div>
			<?php echo form_open('entregador/edit/'.$entregador['identregador']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-4">
						<label for="nome" class="control-label"><span class="text-danger">*</span>Nome</label>
						<div class="form-group">
							<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $entregador['nome']); ?>" class="form-control" id="nome" />
							<span class="text-danger"><?php echo form_error('nome');?></span>
						</div>
					</div>
					<div class="col-md-2">
						<label for="telefone" class="control-label">Telefone</label>
						<div class="form-group">
							<input type="text" name="telefone" value="<?php echo ($this->input->post('telefone') ? $this->input->post('telefone') : $entregador['telefone']); ?>" class="form-control" id="telefone" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="celular" class="control-label">Celular</label>
						<div class="form-group">
							<input type="text" name="celular" value="<?php echo ($this->input->post('celular') ? $this->input->post('celular') : $entregador['celular']); ?>" class="form-control" id="celular" />
						</div>
					</div>

          <div class="col-md-2">
            <label for="status" class="control-label">STATUS</label>
            <div class="form-group">
              <select name="ativo" class="form-control">
                <option value="">select</option>
                <?php
                $ativo_values = array(
                  '1'=>'ATIVO',
                  '0'=>'INATIVO',
                );

                foreach($ativo_values as $value => $display_text)
                {
                  $selected = ($value == $entregador['status']) ? ' selected="selected"' : "";

                  echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                }
                ?>
              </select>
            </div>
          </div>
					<div class="col-md-10">
						<label for="observacao" class="control-label">Observação</label>
						<div class="form-group">
							<input type="text" name="observacao" value="<?php echo ($this->input->post('observacao') ? $this->input->post('observacao') : $entregador['observacao']); ?>" class="form-control" id="observacao" />
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script type="text/javascript">

$("#celular").mask("(00) 00000-0000");
$("#telefone").mask("(00) 0000-0000");
</script>
