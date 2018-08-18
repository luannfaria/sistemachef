<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Itenspedidodelivery Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('itenspedidodelivery/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Iditenspedidodelivey</th>
						<th>Idpedidodelivery</th>
						<th>Produto Id</th>
						<th>Quantidade</th>
						<th>Preco</th>
						<th>Impresso</th>
						<th>Usuario Id</th>
						<th>Nomeitem</th>
						<th>Horapedidoitem</th>
						<th>Precoadicional</th>
						<th>Timstamp</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($itenspedidodelivery as $i){ ?>
                    <tr>
						<td><?php echo $i['iditenspedidodelivey']; ?></td>
						<td><?php echo $i['idpedidodelivery']; ?></td>
						<td><?php echo $i['produto_id']; ?></td>
						<td><?php echo $i['quantidade']; ?></td>
						<td><?php echo $i['preco']; ?></td>
						<td><?php echo $i['impresso']; ?></td>
						<td><?php echo $i['usuario_id']; ?></td>
						<td><?php echo $i['nomeitem']; ?></td>
						<td><?php echo $i['horapedidoitem']; ?></td>
						<td><?php echo $i['precoadicional']; ?></td>
						<td><?php echo $i['timstamp']; ?></td>
						<td>
                            <a href="<?php echo site_url('itenspedidodelivery/edit/'.$i['iditenspedidodelivey']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('itenspedidodelivery/remove/'.$i['iditenspedidodelivey']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
