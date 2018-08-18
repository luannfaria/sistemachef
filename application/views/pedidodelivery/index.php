<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">PEDIDOS DELIVERY</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pedidodelivery/add'); ?>" class="btn btn-success btn-lg">NOVO PEDIDO</a>
                </div>

            </div>
            <br>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nº Pedido</th>
            	<th>Data</th>
              <th>Cliente</th>


						<th>Identregador</th>
					


						<th>Subtotal</th>

						<th>Desconto</th>
            	<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pedidosdelivery as $p){ ?>
                    <tr>
						<td><?php echo $p['idpedidodelivery']; ?></td>
						<td><?php echo $p['status']; ?></td>
						<td><?php echo $p['timestamp']; ?></td>
						<td><?php echo $p['troco']; ?></td>
						<td><?php echo $p['identregador']; ?></td>
						<td><?php echo $p['idtaxaentrega']; ?></td>
						<td><?php echo $p['idclientes']; ?></td>
						<td><?php echo $p['data']; ?></td>
						<td><?php echo $p['subtotal']; ?></td>
						<td><?php echo $p['taxaentrega']; ?></td>
						<td><?php echo $p['desconto']; ?></td>
						<td>
                            <a href="<?php echo site_url('pedidodelivery/edit/'.$p['idpedidodelivery']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('pedidodelivery/remove/'.$p['idpedidodelivery']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
