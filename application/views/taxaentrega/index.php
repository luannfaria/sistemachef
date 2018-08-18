<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">TAXAS DE ENTREGA</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('taxaentrega/add'); ?>" class="btn btn-success">NOVA TAXA</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CODIGO</th>
						<th>Descrição</th>
						<th>Valor</th>
						<th>Ações</th>
                    </tr>
                    <?php foreach($taxaentrega as $t){ ?>
                    <tr>
						<td><?php echo $t['idtaxaentrega']; ?></td>
						<td><?php echo $t['nome']; ?></td>
						<td><?php echo $t['valor']; ?></td>
						<td>
                            <a href="<?php echo site_url('taxaentrega/edit/'.$t['idtaxaentrega']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('taxaentrega/remove/'.$t['idtaxaentrega']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
