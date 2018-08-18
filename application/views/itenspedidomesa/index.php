<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Itenspedidomesa Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('itenspedidomesa/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Iditenspedidomesa</th>
						<th>Idpedidomesa</th>
						<th>Produto Id</th>
						<th>Quantidade</th>
						<th>Preco</th>
						<th>Impresso</th>
						<th>Idusuarios</th>
						<th>Nomeitem</th>
						<th>Horapedidoitem</th>
						<th>Precoadicional</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($itenspedidomesa as $i){ ?>
                    <tr>
						<td><?php echo $i['iditenspedidomesa']; ?></td>
						<td><?php echo $i['idpedidomesa']; ?></td>
						<td><?php echo $i['produto_id']; ?></td>
						<td><?php echo $i['quantidade']; ?></td>
						<td><?php echo $i['preco']; ?></td>
						<td><?php echo $i['impresso']; ?></td>
						<td><?php echo $i['idusuarios']; ?></td>
						<td><?php echo $i['nomeitem']; ?></td>
						<td><?php echo $i['horapedidoitem']; ?></td>
						<td><?php echo $i['precoadicional']; ?></td>
						<td>
                            <a href="<?php echo site_url('itenspedidomesa/edit/'.$i['iditenspedidomesa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('itenspedidomesa/remove/'.$i['iditenspedidomesa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
