<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pagamentopedidomesa Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pagamentopedidomesa/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idpagamentopedidomesa</th>
						<th>Idpedidomesa</th>
						<th>Valor</th>
						<th>Descricao</th>
						<th>Idformapagamento</th>
						<th>Data</th>
						<th>Tipomovimentacao</th>
						<th>Usuario Id</th>
						<th>Formapagto</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pagamentopedidomesa as $p){ ?>
                    <tr>
						<td><?php echo $p['idpagamentopedidomesa']; ?></td>
						<td><?php echo $p['idpedidomesa']; ?></td>
						<td><?php echo $p['valor']; ?></td>
						<td><?php echo $p['descricao']; ?></td>
						<td><?php echo $p['idformapagamento']; ?></td>
						<td><?php echo $p['data']; ?></td>
						<td><?php echo $p['tipomovimentacao']; ?></td>
						<td><?php echo $p['usuario_id']; ?></td>
						<td><?php echo $p['formapagto']; ?></td>
						<td>
                            <a href="<?php echo site_url('pagamentopedidomesa/edit/'.$p['idpagamentopedidomesa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pagamentopedidomesa/remove/'.$p['idpagamentopedidomesa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
