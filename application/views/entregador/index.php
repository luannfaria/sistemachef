<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Entregadores</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('entregador/add'); ?>" class="btn btn-success">NOVO ENTREGADOR</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Codigo</th>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Celular</th>

						<th>Status</th>
						<th>Ações</th>
                    </tr>
                    <?php foreach($entregadores as $e){ ?>
                    <tr>
						<td><?php echo $e['identregador']; ?></td>
						<td><?php echo $e['nome']; ?></td>
						<td><?php echo $e['telefone']; ?></td>
						<td><?php echo $e['celular']; ?></td>
				
						<td><?php echo $e['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('entregador/edit/'.$e['identregador']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('entregador/remove/'.$e['identregador']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
