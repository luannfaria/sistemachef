<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">CATEGORIAS</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('impressoras/impressaoteste'); ?>" class="btn btn-success">TESTE THERMAL</a>
                    <a href="<?php echo site_url('categoria/add'); ?>" class="btn btn-success">NOVA CATEGORIA</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>CODIGO</th>
						<th>Nome da categoria</th>

						<th>Ações</th>
                    </tr>
                    <?php foreach($categorias as $c){ ?>
                    <tr class="table-dark">
						<td><?php echo $c['idcategoria']; ?></td>
						<td><?php echo $c['nomecategoria']; ?></td>

						<td>
                            <a href="<?php echo site_url('categoria/edit/'.$c['idcategoria']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span> Editar</a>
                            <a href="<?php echo site_url('categoria/remove/'.$c['idcategoria']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Excluir</a>
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
