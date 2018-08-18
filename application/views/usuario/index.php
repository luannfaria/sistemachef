<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">USUARIOS</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success">NOVO USUARIO</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>COD</th>
						<th>Login</th>

						<th>Permissões</th>
						<th>Habilitado</th>


						<th>Ações</th>
                    </tr>
                    <?php foreach($usuarios as $u){ ?>
                    <tr>
						<td><?php echo $u['idusuarios']; ?></td>
						<td><?php echo $u['login']; ?></td>

						<td><?php echo $u['permissoes']; ?></td>
						<td><?php echo $u['habilitado']; ?></td>
			

						<td>
                            <a href="<?php echo site_url('usuario/edit/'.$u['idusuarios']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span> EDITAR</a>
                            <a href="<?php echo site_url('usuario/remove/'.$u['idusuarios']); ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</a>
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
