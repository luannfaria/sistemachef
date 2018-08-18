<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">EMPRESAS</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('empresa/add'); ?>" class="btn btn-success">NOVA EMPRESA</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>

						<th>Razão social</th>
						<th>Fantasia</th>
						<th>Cnpj</th>

						<th>Telefone fixo</th>
						<th>Celular</th>
						<th>Ações</th>
                    </tr>
                    <?php foreach($empresa as $e){ ?>
                    <tr>

						<td><?php echo $e['razaosocial']; ?></td>
						<td><?php echo $e['nomefantasia']; ?></td>
						<td><?php echo $e['cnpj']; ?></td>

						<td><?php echo $e['telefonefixo']; ?></td>
						<td><?php echo $e['celular']; ?></td>

						<td>
                            <a href="<?php echo site_url('empresa/edit/'.$e['idempresa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('empresa/remove/'.$e['idempresa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
