<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Itenspedidopdv Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('itenspedidopdv/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Iditenspedidodelivery</th>
						<th>Idpedidopdv</th>
						<th>Produto Id</th>
						<th>Nomeproduto</th>
						<th>Quantidade</th>
						<th>Valor</th>
						<th>Hora</th>
						<th>Data</th>
						<th>Usuario Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($itenspedidopdv as $i){ ?>
                    <tr>
						<td><?php echo $i['iditenspedidodelivery']; ?></td>
						<td><?php echo $i['idpedidopdv']; ?></td>
						<td><?php echo $i['produto_id']; ?></td>
						<td><?php echo $i['nomeproduto']; ?></td>
						<td><?php echo $i['quantidade']; ?></td>
						<td><?php echo $i['valor']; ?></td>
						<td><?php echo $i['hora']; ?></td>
						<td><?php echo $i['data']; ?></td>
						<td><?php echo $i['usuario_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('itenspedidopdv/edit/'.$i['iditenspedidodelivery']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('itenspedidopdv/remove/'.$i['iditenspedidodelivery']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
