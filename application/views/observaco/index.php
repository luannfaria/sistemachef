<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">OBSERVAÇÕES</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('observaco/add'); ?>" class="btn btn-success">NOVA OBSERVAÇÃO</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Codigo</th>
						<th>Nome</th>
						<th>Ações</th>
                    </tr>
                    <?php foreach($observacoes as $o){ ?>
                    <tr>
						<td><?php echo $o['idobservacoes']; ?></td>
						<td><?php echo $o['nome']; ?></td>
						<td>
                            <a href="<?php echo site_url('observaco/edit/'.$o['idobservacoes']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a>
                            <a href="<?php echo site_url('observaco/remove/'.$o['idobservacoes']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Excluir</a>
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
