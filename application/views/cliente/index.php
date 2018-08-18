<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">CLIENTES CADASTRADOS</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('cliente/add'); ?>" class="btn btn-success">NOVO CLIENTE</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CODIGO</th>

						<th>Nome</th>


						<th>Telefone fixo</th>
						<th>Celular</th>
					<th>Status</th>
						<th>Ações</th>
                    </tr>
                    <?php foreach($clientes as $c){ ?>
                    <tr>
						<td><?php echo $c['idclientes']; ?></td>

						<td><?php echo $c['nome']; ?></td>

						<td><?php echo $c['telfixo']; ?></td>
            	<td><?php echo $c['celular']; ?></td>

						<td><?php echo $c['ativo']; ?></td>
						<td>
                            <a href="<?php echo site_url('cliente/edit/'.$c['idclientes']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('cliente/remove/'.$c['idclientes']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
