<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">AJUSTES DE ESTOQUE</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('inventario/add'); ?>" class="btn btn-success">NOVO AJUSTE</a>
                </div>
            </div>
            <div class="box-body">

              <?php

    $dir = shell_exec('wmic DISKDRIVE GET SerialNumber 2>&1');
  echo $dir;
     // get rid of the evidence :-)
    ?>
                <table class="table table-striped">
                    <tr>

						<th>Data</th>
						<th>Descrição</th>
            	<th>Movimentação</th>
						<th>Ações</th>
                    </tr>
                    <?php foreach($inventarios as $i){ ?>
                    <tr>

						<td><?php echo $i['data']; ?></td>
						<td><?php echo $i['descricao']; ?></td>
            	<td><span class="label label-success"><?php echo $i['tipomov']; ?></span></td>
						<td>
                    <!--        <a href="<?php echo site_url('inventario/edit/'.$i['idinventario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>!-->

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
