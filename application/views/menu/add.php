<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Menu Add</h3>
            </div>
            <?php echo form_open('menu/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-2">
						<div class="form-group">
							<input type="checkbox" name="pedidobalcao" value="1"  id="pedidobalcao" />
							<label for="pedidobalcao" class="control-label">Pedidobalcao</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="checkbox" name="pedidomesa" value="1"  id="pedidomesa" />
							<label for="pedidomesa" class="control-label">Pedidomesa</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="checkbox" name="pedidopdvtouch" value="1"  id="pedidopdvtouch" />
							<label for="pedidopdvtouch" class="control-label">Pedidopdvtouch</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="checkbox" name="pedidopdvean" value="1"  id="pedidopdvean" />
							<label for="pedidopdvean" class="control-label">Pedidopdvean</label>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="checkbox" name="pedidodelivery" value="1"  id="pedidodelivery" />
							<label for="pedidodelivery" class="control-label">Pedidodelivery</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="pedidomobile" value="1"  id="pedidomobile" />
							<label for="pedidomobile" class="control-label">Pedidomobile</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="clientes" value="1"  id="clientes" />
							<label for="clientes" class="control-label">Clientes</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="produtos" value="1"  id="produtos" />
							<label for="produtos" class="control-label">Produtos</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="produtovariaveis" value="1"  id="produtovariaveis" />
							<label for="produtovariaveis" class="control-label">Produtovariaveis</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="categorias" value="1"  id="categorias" />
							<label for="categorias" class="control-label">Categorias</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="adicionais" value="1"  id="adicionais" />
							<label for="adicionais" class="control-label">Adicionais</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="observacoes" value="1"  id="observacoes" />
							<label for="observacoes" class="control-label">Observacoes</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="contaspagar" value="1"  id="contaspagar" />
							<label for="contaspagar" class="control-label">Contaspagar</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="contasreceber" value="1"  id="contasreceber" />
							<label for="contasreceber" class="control-label">Contasreceber</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="caixa" value="1"  id="caixa" />
							<label for="caixa" class="control-label">Caixa</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="fornecedores" value="1"  id="fornecedores" />
							<label for="fornecedores" class="control-label">Fornecedores</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="entradanota" value="1"  id="entradanota" />
							<label for="entradanota" class="control-label">Entradanota</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="inventario" value="1"  id="inventario" />
							<label for="inventario" class="control-label">Inventario</label>
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
