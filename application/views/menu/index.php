<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Menu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('menu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idtipodevendas</th>
						<th>Pedidobalcao</th>
						<th>Pedidomesa</th>
						<th>Pedidopdvtouch</th>
						<th>Pedidopdvean</th>
						<th>Pedidodelivery</th>
						<th>Pedidomobile</th>
						<th>Clientes</th>
						<th>Produtos</th>
						<th>Produtovariaveis</th>
						<th>Categorias</th>
						<th>Adicionais</th>
						<th>Observacoes</th>
						<th>Contaspagar</th>
						<th>Contasreceber</th>
						<th>Caixa</th>
						<th>Fornecedores</th>
						<th>Entradanota</th>
						<th>Inventario</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($menu as $m){ ?>
                    <tr>
						<td><?php echo $m['idtipodevendas']; ?></td>
						<td><?php echo $m['pedidobalcao']; ?></td>
						<td><?php echo $m['pedidomesa']; ?></td>
						<td><?php echo $m['pedidopdvtouch']; ?></td>
						<td><?php echo $m['pedidopdvean']; ?></td>
						<td><?php echo $m['pedidodelivery']; ?></td>
						<td><?php echo $m['pedidomobile']; ?></td>
						<td><?php echo $m['clientes']; ?></td>
						<td><?php echo $m['produtos']; ?></td>
						<td><?php echo $m['produtovariaveis']; ?></td>
						<td><?php echo $m['categorias']; ?></td>
						<td><?php echo $m['adicionais']; ?></td>
						<td><?php echo $m['observacoes']; ?></td>
						<td><?php echo $m['contaspagar']; ?></td>
						<td><?php echo $m['contasreceber']; ?></td>
						<td><?php echo $m['caixa']; ?></td>
						<td><?php echo $m['fornecedores']; ?></td>
						<td><?php echo $m['entradanota']; ?></td>
						<td><?php echo $m['inventario']; ?></td>
						<td>
                            <a href="<?php echo site_url('menu/edit/'.$m['idtipodevendas']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('menu/remove/'.$m['idtipodevendas']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
