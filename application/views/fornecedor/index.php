<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">FORNECEDORES</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fornecedor/add'); ?>" class="btn btn-success">NOVO FORNECEDOR</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CODIGO</th>
            	<th>Cnpj</th>
						<th>Razão social</th>
						<th>Nome fantasia</th>

            <th>Telefone</th>
            <th>Celular</th>
						<th>Cidade</th>


						<th>Ações</th>
                    </tr>
                    <?php foreach($fornecedores as $f){ ?>
                    <tr>
						<td><?php echo $f['idfornecedor']; ?></td>
            <td><?php echo $f['cnpj']; ?></td>
						<td><?php echo $f['razaosocial']; ?></td>
						<td><?php echo $f['nomefantasia']; ?></td>


						<td><?php echo $f['telefonefixo']; ?></td>
						<td><?php echo $f['celular']; ?></td>

    						<td><?php echo $f['cidade']; ?></td>

						<td>
                            <a href="<?php echo site_url('fornecedor/edit/'.$f['idfornecedor']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span> Editar</a>
                            <a href="<?php echo site_url('fornecedor/remove/'.$f['idfornecedor']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Apagar</a>
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
