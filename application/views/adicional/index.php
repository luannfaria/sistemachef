<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ADICIONAIS</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('adicional/add'); ?>" class="btn btn-success">NOVO ADICIONAL</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CODIGO</th>
						<th>Nome</th>
						<th>Custo</th>
						<th>Valor</th>
						<th>Status</th>
						<th>Ações</th>
                    </tr>
                    <?php foreach($adicionais as $a){ ?>
                    <tr>
						<td><?php echo $a['idadicionais']; ?></td>
						<td><?php echo $a['nome']; ?></td>
						<td><?php echo $a['custo']; ?></td>
						<td><?php echo $a['valor']; ?></td>
						<td><?php echo $a['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('adicional/edit/'.$a['idadicionais']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('adicional/remove/'.$a['idadicionais']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
