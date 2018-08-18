<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Itensinventario Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('itensinventario/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Iditensinventario</th>
						<th>Idinventario</th>
						<th>Produto Id</th>
						<th>Nomeproduto</th>
						<th>Codbarra</th>
						<th>Quantidade</th>
						<th>Time</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($itensinventario as $i){ ?>
                    <tr>
						<td><?php echo $i['iditensinventario']; ?></td>
						<td><?php echo $i['idinventario']; ?></td>
						<td><?php echo $i['produto_id']; ?></td>
						<td><?php echo $i['nomeproduto']; ?></td>
						<td><?php echo $i['codbarra']; ?></td>
						<td><?php echo $i['quantidade']; ?></td>
						<td><?php echo $i['time']; ?></td>
						<td>
                            <a href="<?php echo site_url('itensinventario/edit/'.$i['iditensinventario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('itensinventario/remove/'.$i['iditensinventario']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
