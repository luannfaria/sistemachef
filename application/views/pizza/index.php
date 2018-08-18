<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">PIZZAS</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pizza/add'); ?>" class="btn btn-success">NOVA PIZZA</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Codigo</th>
						<th>Nome</th>

						<th>Ações</th>
                    </tr>
                    <?php foreach($pizza as $p){ ?>
                    <tr>
						<td><?php echo $p['idpizza']; ?></td>
						<td><?php echo $p['nome']; ?></td>

						<td>
                            <a href="<?php echo site_url('pizza/edit/'.$p['idpizza']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span> Editar</a>
                            <a href="<?php echo site_url('pizza/remove/'.$p['idpizza']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Excluir</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>
